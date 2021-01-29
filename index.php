<?php
/*ISTRUZIONI:
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60
*/
$matches = [
    "Match" => [
        "Home" => "Reggiana",
        "Visitors" => "Trento", 
        "Risultato" => "83 - 74",
    ],
    "Match1" => [
        "Home" => "Bologna",
        "Visitors" => "Brescia", 
        "Risultato" => "89 - 90",
    ],
    "Match2" => [
        "Home" => "Universo Treviso",
        "Visitors" => "Olimpia Milano", 
        "Risultato" => "77 - 82",
    ],
    "Match3" => [
        "Home" => "VL Pesaro",
        "Visitors" => "Cantù", 
        "Risultato" => "107 - 83",
    ],
    "Match4" => [
        "Home" => "Venezia",
        "Visitors" => "Cremona", 
        "Risultato" => "88 - 84",
    ],
    "Match5" => [
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


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php-snacks-b1</title>
    </head>
    <body>
        <h1><?php echo $matches["Match"]["Home"]; ?></h1>
    </body>
</html>
