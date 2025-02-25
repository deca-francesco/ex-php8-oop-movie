<?php

class Genre
{
    // attributi
    public $generiArray = [];

    // Costruttore
    function __construct($_generi)
    {
        // se il parametro passato è un array lo sovrascrivo all'array vuoto
        if (is_array($_generi)) {
            $this->generiArray = $_generi;
        } else {
            // altrimenti lo aggiungo direttamente all'array vuoto
            $this->generiArray[] = $_generi;
        }
    }

    // Metodo per visualizzare i generi
    public function getGenres()
    {
        return $this->generiArray;
    }


    // Metodo per aggiungere un genere
    public function addGenres($_generi)
    {
        // se il parametro passato è un array lo unisco all'array già esistente
        if (is_array($_generi)) {
            $this->generiArray = array_merge($this->generiArray, $_generi);
        } else {
            // altrimenti lo aggiungo direttamente all'array già esistente
            $this->generiArray[] = $_generi;
        }
    }
}
