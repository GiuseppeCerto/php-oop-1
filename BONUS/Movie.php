<?php

class Movie {
    public string $title;
    public $filmType = []; //["Horror","Storic","Thriller","Animation","Noir"];
    public int $releseYear;
    public float $ibdmScore;

    function __construct($_title) {
        $this->title = $_title;
    }

    function getParentalAdv() {

        if (in_array("Horror", $this->filmType) || in_array ("Storic", $this->filmType)) {

          return "Forbidden to children under 18 years old";

        } elseif (in_array("Thriller", $this->filmType) || in_array ("Noir", $this->filmType)) {

          return "Forbidden to children under 14 years old";

        } else {

          return "Movies for everyone";
        }
    }


}

?>