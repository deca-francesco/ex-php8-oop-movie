<?php

trait HasDirector
{
    protected $director;

    public function getDirector()
    {
        return $this->director;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }
}
