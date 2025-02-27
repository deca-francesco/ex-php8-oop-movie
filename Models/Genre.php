<?php

class Genre
{
    // attributi
    protected $name;
    protected $description;

    // Costruttore
    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }

    // Metodo per visualizzare i generi
    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
