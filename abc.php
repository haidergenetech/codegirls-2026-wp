<?php
$car = "Lamborghini";
$cars = ["Mehran", "Civic", "City", "Margala", "Charad"];

// echo $cars[0];
// echo $cars[1];
// echo $cars[2];
echo "<br>";
echo "<br>";
echo "<br>";

echo count($cars);



// echo $i < count($cars);

for ($i = 0; $i < count($cars); $i++) {
    echo "<br>" . $cars[$i] . "<br>";
}

// echo 1 . "abc" . 3.00 . false;

$old_cars = array("Mehran", "city");

$old_cars[1] = "Cultus";

// print_r($old_cars);



$cars_obj = array(
    "mehran" => array(
        "color" => "pink",
        "model" => "2015",
        "price" => 700000,
    )
);
$color = $cars_obj['mehran']["color"];
$price = $cars_obj["mehran"]["price"];

// if ($color == "red") {
//     echo "its mine";
// } elseif ($color == "green") {
//     echo "its my brother's";
// } else {
//     echo "kisi ki bi nai";
// }

// $market_price = 600000;
// $bank_balance = 0;
// if ($price > $market_price || $bank_balance > $price) {
//     echo "wohoOO";
// } else {
//     echo "ya car apka budget nai ha";
// }

// switch ($color) {
//     case "green":
//         echo "its pakistani";
//         break;
//     case "pink":
//         echo "its my sister cars";
//         break;
//     default:
//         echo "none of them";
// }

// echo $car;
// echo "<br>";
// print_r($cars);
// echo "<br><br>";
// print_r($old_cars);
// echo "<br>";
// print_r($cars_obj);
?>