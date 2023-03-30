<?php

class Movie {
    public string $title;
    public $filmType = ["Horror","Storic","Thriller","Animation","Noir"];
    public int $releseYear;
    public float $ibdmScore;

    function __construct($_title, $_filmType) {
        $this->title = $_title;
        $this->filmType = $_filmType;
    }

    function getParentalAdv(){
        if($this->filmType === "Horror")

        return "Forbidden to children under 18 years old";

        elseif($this->filmType === "Thriller")

        return "Forbidden to children under 14 years old";

        else

        return "Movies for everyone";
    }


}

?>