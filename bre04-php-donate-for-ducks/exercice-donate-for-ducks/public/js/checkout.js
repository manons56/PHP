/* global Stripe */
/* global stripe */
/* global fetch */
/* global URLSearchParams */

const stripe = Stripe("pk_test_51Rnb8GCxps63QJj281h9YfYvtma0QfpUOuPbzVT9NYS0X6FhLUIrdDodBXBoEc4vJBAQtcJnoy76gQe37wcRLQbl00DJxHlBcC");

//////////////////////////////
//////////////////////////////
//////////////////////////////
//Reprendre avec l'étape 6 ici 
//////////////////////////////
//////////////////////////////
//////////////////////////////
let amount;
const inputMontant = document.querySelector("#montant-personnalise");

inputMontant.addEventListener("input", () => {
  const newValue = parseFloat(inputMontant.value);

  if (!isNaN(newValue)) {
    amount = Math.round(newValue * 100); // convertir en centimes

    if (amount >= 100) {
      initialize();
    }
  }
});

let elements;

checkStatus();

document
  .querySelector("#payment-form")
  .addEventListener("submit", handleSubmit);

// Fetches a payment intent and captures the client secret
async function initialize() {
  const { clientSecret } = await fetch("../app/controllers/create.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ amount }),
  }).then((r) => r.json());

  elements = stripe.elements({ clientSecret });

  const paymentElementOptions = {
    layout: "tabs",
  };

  const paymentElement = elements.create("payment", paymentElementOptions);
  paymentElement.mount("#payment-element");
  
  const buttonSubmit = document.querySelector('form#payment-form button#submit');
  buttonSubmit.disabled = false;
  buttonSubmit.querySelector("#button-text").textContent = "Don de " + amount + "€";
}

async function handleSubmit(e) {
  e.preventDefault();
  setLoading(true);

  const { error } = await stripe.confirmPayment({
    elements,
    confirmParams: {
      return_url: "https://manonsara.sites.3wa.io/php/bre04-php-donate-for-ducks/exerice-donate-for-ducks/public/index.php",
    },
  });

  // This point will only be reached if there is an immediate error when
  // confirming the payment. Otherwise, your customer will be redirected to
  // your `return_url`. For some payment methods like iDEAL, your customer will
  // be redirected to an intermediate site first to authorize the payment, then
  // redirected to the `return_url`.
  if (error.type === "card_error" || error.type === "validation_error") {
    showMessage(error.message);
  } else {
    showMessage("An unexpected error occurred.");
  }

  setLoading(false);
}

// Fetches the payment intent status after payment submission
async function checkStatus() {
  const clientSecret = new URLSearchParams(window.location.search).get(
    "payment_intent_client_secret"
  );

  if (!clientSecret) {
    return;
  }

  const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

  switch (paymentIntent.status) {
    case "succeeded":
      showMessage("Payment succeeded!");
      break;
    case "processing":
      showMessage("Your payment is processing.");
      break;
    case "requires_payment_method":
      showMessage("Your payment was not successful, please try again.");
      break;
    default:
      showMessage("Something went wrong.");
      break;
  }
}

// ------- UI helpers -------

function showMessage(messageText) {
  const messageContainer = document.querySelector("#payment-message");

  messageContainer.classList.remove("hidden");
  messageContainer.textContent = messageText;

  setTimeout(function () {
    messageContainer.classList.add("hidden");
    messageContainer.textContent = "";
  }, 4000);
}

// Show a spinner on payment submission
function setLoading(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector("#submit").disabled = true;
    document.querySelector("#spinner").classList.remove("hidden");
    document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("#submit").disabled = false;
    document.querySelector("#spinner").classList.add("hidden");
    document.querySelector("#button-text").classList.remove("hidden");
  }
}