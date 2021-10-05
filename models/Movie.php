<?php

class Movie
{
    public $id;
    public $name;
    public $genre;
    public $year;
    public $duration;
    public function __construct($id, $name, $genre, $year, $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->duration = $duration;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_difference()
    {
        $date = date("Y-m-d");
        $date_arr = explode("-", $date);
        $yr = $date_arr[0];
        $diff = $yr - $this->year;
        return "Questo film è uscito $diff anni fà";
    }
}
