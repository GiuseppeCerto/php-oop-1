<?php
require_once "./Movie.php";

$movie1 = new Movie ("The Witch");
$movie1->releseYear = 2015;
$movie1->ibdmScore = 6.9;
$movie1->filmType = ["Horror","Storic"];

// var_dump($movie1);
// var_dump($movie1->getParentalAdv());

$movie2 = new Movie ("Sin City");
$movie2->releseYear = 2005;
$movie2->ibdmScore = 8.0;
$movie2->filmType = ["Thriller","Noir"];

// var_dump($movie2);
// var_dump($movie2->getParentalAdv());

$movie3 = new Movie ("Finding Nemo");
$movie3->releseYear = 2003;
$movie3->ibdmScore = 8.2;
$movie3->filmType = ["Animation"];

// var_dump($movie3);
// var_dump($movie3->getParentalAdv());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>PHP OOP 1</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mt-4">
                <div class="card">
                    <h3 class="ms-3"><?php echo $movie1->title  ?></h3>
                    <div class="d-inline ms-3">
                        <span>
                            Type: 
                            <?php foreach ($movie1->filmType as $type) {
                                echo '<span class="me-1">' . $type . ',</span>';
                            } ?>
                        </span>
                    </div>
                    <div class="ms-3"><?php echo'Relese year:' .' '. $movie1->releseYear ?></div>
                    <div class="ms-3"><?php echo'IBDM:' . ' ' . $movie1->ibdmScore ?></div>
                    <div class="ms-3"><?php echo $movie1->getParentalAdv() ?></div>
                </div>
            </div>

            <div class="col-4 mt-4">
                <div class="card">
                    <h3 class="ms-3"><?php echo $movie2->title  ?></h3>
                    <div class="d-inline ms-3">
                        <span>
                            Type: 
                            <?php foreach ($movie2->filmType as $type) {
                                echo '<span class="me-1">' . $type . ',</span>';
                            } ?>
                        </span>
                    </div>
                    <div class="ms-3"><?php echo'Relese year:' .' '. $movie2->releseYear ?></div>
                    <div class="ms-3"><?php echo'IBDM:' . ' ' . $movie2->ibdmScore ?></div>
                    <div class="ms-3"><?php echo $movie2->getParentalAdv() ?></div>
                </div>
            </div>

            <div class="col-4 mt-4">
                <div class="card">
                    <h3 class="ms-3"><?php echo $movie3->title  ?></h3>
                    <div class="d-inline ms-3">
                        <span>
                            Type: 
                            <?php foreach ($movie3->filmType as $type) {
                                echo '<span class="me-1">' . $type . ',</span>';
                            } ?>
                        </span>
                    </div>
                    <div class="ms-3"><?php echo'Relese year:' .' '. $movie3->releseYear ?></div>
                    <div class="ms-3"><?php echo'IBDM:' . ' ' . $movie3->ibdmScore ?></div>
                    <div class="ms-3"><?php echo $movie3->getParentalAdv() ?></div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>