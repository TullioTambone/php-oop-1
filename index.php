<?php

class Movie{
    public $titolo;
    public $genere;
    
    public function __construct($titolo, Genere $genere){
        $this->titolo = $titolo;
        $this->genere = $genere;
    }

    public function getTitle(){
        return "nome: $this->titolo ";
    }
    
    public function getGenere(){
        $array = '';
        foreach($this->genere as $gen){
            $array .= $gen . ', ';
        }
        return 'i generi sono:' . $array;
    }
}

class Genere{
    public $azione;
    public $triller;
    public $fantasy;

    public function __construct( $azione, $triller, $fantasy ){
        $this->azione = $azione;
        $this->triller = $triller;
        $this->fantasy = $fantasy;
    }
}


$film = new Movie('matrix', new Genere('action', 'triller', 'fantasy'));

echo $film->getTitle(); // Output: Matrix
echo $film->getGenere(); // Output: action, triller, lampis
?>