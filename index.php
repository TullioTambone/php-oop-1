<?php

class Movie{
    public $titolo;
    public $genere;

    public function __construct($titolo, $genere){
        $this->titolo = $titolo;
        $this->genere = $genere;
    }

    public function getTitle(){
        return "$this->titolo $this->genere";
    }
}

class Genere{
    public $genere1;
    public $genere2;
    public $genere3;

    public function __construct($genere1, $genere2, $genere3){
        $this->genere1 = $genere1;
        $this->genere2 = $genere2;
        $this->genere3 = $genere3;
    }

    public function setGenere($genere){
        $this->genere1 = $genere;
        $this->genere2 = $genere;
        $this->genere3 = $genere;
    }
}

$film = new Movie('gorgio', 'zola');
var_dump($film);
echo $film -> getTitle();

?>