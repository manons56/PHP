<?php


if (isset($_GET["heroName"]))
{
    $heroName = $_GET["heroName"];
    
    $choiceShortSentence = "Bonjour {$heroName}, comment allez-vous procéder ?";
    $eventDescription = "Vous vous trouvez devant la porte d'un donjon dont vous ne parvenez pas à voir le sommet, enfoui dans les nuages.";
    $eventImage = "tower.png";
    $choices = [
        "Vous poussez la lourde porte en bois.",
        "Vous faites le tour du donjon pour voir s'il n'existe pas une entrée plus discrète."
    ];
    $eventNumber = 0;
    $color = "choice";
} 
else if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] === "0" && isset($_GET["choice"]) && $_GET["choice"] === "choice-0") 
{
    $choiceShortSentence = "Quelle arme choisissez-vous ?";
    $eventDescription = "Vous pénétrez dans l'entrée du donjon. Face à vous se trouvent une masse, une épée et une hache.";
    $eventImage = "cross-swords.png";
    $choices = [
        "La hache",
        "L'épée",
        "La masse"
    ];
    $eventNumber = 1;
    $color = "choice-grey-blue";
} 
else if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] === "0" && isset($_GET["choice"]) && $_GET["choice"] === "choice-1") 
{
    $choiceShortSentence = "Comment allez-vous procéder ?";
    $eventDescription = "Non, pas de porte dérobée. Vous vous trouvez devant la porte d'un donjon dont vous ne parvenez pas à voir le sommet, enfoui dans les nuages.";
    $eventImage = "tower.png";
    $choices = [
        "Vous poussez la lourde porte en bois."
    ];
    $eventNumber = 2;
    $color = "choice";
}
else if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] === "2" && isset($_GET["choice"]) && $_GET["choice"] === "choice-0") {
    $choiceShortSentence = "Vous êtes mort.";
    $eventDescription = "La porte est tellement lourde, qu'elle vous écrase.";
    $eventImage = "door.png";
    $choices = [];
    $eventNumber = 3;
    $color = "choice-red";
}

require "templates/choice.phtml";

?>