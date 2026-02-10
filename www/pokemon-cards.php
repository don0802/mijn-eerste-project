<?php
include 'database.php';

$sql = "SELECT * FROM cards"; // SQL query om alle pokemon uit de database te halen
$result = mysqli_query($conn, $sql);

$cards = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($cards as $card):

    echo $card["id"];
    echo $card["name"];
    echo $card["type"];

endforeach;

?>