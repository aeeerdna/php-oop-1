<!-- 
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->
<?php
 class Movie {
    // movie properties
    public $title;
    public $director;
    public $production_company;

    public $release_date;
    public $running_time;
    public $language;
    public $genre;
    public $plot;

    public $cast = [];


    // constructor
    function __construct($_title, $_director, $_production_company = '', $_release_date, $_running_time, $_language = '', $_genre = '', $_plot){
        $this->title = $_title;
        $this->director = $_director;
        $this->production_company = $_production_company;
        $this->release_date = $_release_date;
        $this->running_time = $_running_time;
        $this->language = $_language;
        $this->genre = $_genre;
        $this->plot = $_plot;
    }

    // add actor
    public function addActor($_actor){
        if(!in_array($_actor, $this->cast)){
            $this->cast[] = $_actor;
        }
    }
 }

 ?>