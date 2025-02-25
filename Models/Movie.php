<?php

class Movie
{
    // attributi
    public $titolo;
    public $regia;
    public $anno;
    public $durata;
    public $genere;
    public $poster;

    // costruttore
    function __construct($_titolo, $_regia, $_anno, $_durata, Genre $_genere, $_poster)
    {
        $this->titolo = $_titolo;
        $this->regia = $_regia;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->genere = $_genere;
        $this->poster = $_poster;
    }

    // metodi

    // restituisce i dati del film
    public function getInfo()
    {
        // Accedo all'array di generi e converto in stringa separati da virgola
        $generiString = implode(", ", $this->genere->generiArray);

        // Restituisco una stringa con tutto
        return "Titolo: $this->titolo<br> Regia: $this->regia<br> Anno: $this->anno<br> Durata: $this->durata minuti<br> Genere: $generiString.<br> Poster url: $this->poster<br>";
    }

    // calcola quanti anni ha il film
    public function getAge()
    {
        $currentYear = date("Y");
        return $currentYear - $this->anno;
    }
}
