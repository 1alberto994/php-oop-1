<?php
class Movie{
    public $title;
    public $genre;
    public $year;


    public function __construct($_title,$_genre,$_year)
    {
        $this->title=$_title;
        $this->genre=$_genre;
        $this->year=$_year;
    }
}

$fastX=new Movie('FAST X','ACTION',2023);

var_dump($fastX);