<?php

class Movie
{
    // attributi
    public $title;
    public $year;
    public $length;
    protected Genre $genre;
    public $poster;
    public $description;

    // trait
    use HasDirector;


    // costruttore
    public function __construct($_title, $_year, $_length, Genre $_genre, $_poster)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->length = $_length;
        $this->genre = $_genre;
        $this->poster = $_poster;
    }

    // metodi

    // restituisce i dati del film
    public function getInfo()
    {
        $genres = $this->genre->getName();

        // Restituisco una stringa con tutto
        return "Titolo: $this->title<br> Anno: $this->year<br> Durata: $this->length minuti<br> Genere: $genres.<br> Poster url: $this->poster<br>";
    }

    public function getGenreName()
    {
        return $this->genre->getName();
    }

    public function getGenreDescription()
    {
        return $this->genre->getDescription();
    }

    // calcola quanti anni ha il film
    public function getAge()
    {
        $currentYear = date("Y");
        return $currentYear - $this->year;
    }
}
