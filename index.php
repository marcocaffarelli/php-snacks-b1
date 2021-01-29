<?php
/*ISTRUZIONI:
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60
*/
$matches = [
    [
        "Home" => "Reggiana",
        "Visitors" => "Trento",
        "Risultato" => "83 - 74",
    ],
    [
        "Home" => "Bologna",
        "Visitors" => "Brescia",
        "Risultato" => "89 - 90",
    ],
    [
        "Home" => "Universo Treviso",
        "Visitors" => "Olimpia Milano",
        "Risultato" => "77 - 82",
    ],
    [
        "Home" => "VL Pesaro",
        "Visitors" => "Cantù",
        "Risultato" => "107 - 83",
    ],
    [
        "Home" => "Venezia",
        "Visitors" => "Cremona",
        "Risultato" => "88 - 84",
    ],
    [
        "Home" => "Trieste",
        "Visitors" => "Dinamo Sassari",
        "Risultato" => "82 - 103",
    ],
];

//var_dump($matches);
//var_dump($matches["Match"])




/*
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];
//var_dump($name, $email, $age);


/*
strlen($name) > 3 = se il nome è formato da più di 3 lettere
strpos($email, "@") !== false && strpos($email, ".") !== false = l'email include una chiocciola e un punto
*/
if (strlen($name) > 3 && strpos($email, "@") !== false && strpos($email, ".") !== false) {
    echo ("Accesso riuscito");
} else {
    echo ("Accesso negato");
};

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php-snacks-b1</title>
    </head>
    <body>
        <!-- ESERCIZIO NUMERO 1 -->
        <h1>LBA</h1>
        <h2>Risultati 17 giornata:</h2>
        <ul><?php
            // attraverso un ciclo for stampo gli array all'interno dell'array $matches
            for ($i=0; $i < count($matches); $i++) {
                echo "<li>" . $matches[$i]["Home"] . " - " . $matches[$i]["Visitors"] . " | " . $matches[$i]["Risultato"] . "</li>";
            };
        ?></ul>

        <!-- ESERCIZIO NUMERO 2 -->
        <h2></h2>
    </body>
</html>
