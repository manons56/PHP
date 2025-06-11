<?php

$animals = ["Chat", "Chien", "Lapin", "Souris"];

foreach ($animals as $animal){
    echo $animal . "<br>";
}



$numbers = [28, 32, 44, -67, 18, 24, -98];
foreach ($numbers as $number){
    if ($number < 0){
        echo $number . "<br>";
    }
}


$user = [
    "name" => "James",
    "age" => 28
];


foreach ($user as $key => $value){
    echo "My $key is $value .<br>";
}



$users = [
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
];

foreach ($users as $user){
    echo "{$user["firstName"]} {$user["lastName"]} <br>";
}
?>