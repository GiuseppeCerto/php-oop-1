<?php
require_once "./Movie.php";

$movie1 = new Movie ("The Witch","Horror");
$movie1->releseYear = 2015;
$movie1->ibdmScore = 6.9;

var_dump($movie1);
var_dump($movie1->getParentalAdv());

$movie2 = new Movie ("Sin City","Thriller");
$movie2->releseYear = 2005;
$movie2->ibdmScore = 8.0;

var_dump($movie2);
var_dump($movie2->getParentalAdv());

$movie3 = new Movie ("Finding Nemo","Animation");
$movie3->releseYear = 2003;
$movie3->ibdmScore = 8.2;

var_dump($movie3);
var_dump($movie3->getParentalAdv());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    
</body>
</html>