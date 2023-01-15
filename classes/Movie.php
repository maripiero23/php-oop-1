<?php
require_once __DIR__ . "/Category.php";

class Movie {
    private $category;
    private $year;
    private $name;

    //Uso il construct per forzare a dare degli argomenti nel momento in cui creo l'istanza
    public function __construct($_category, $_year, $_name){

        $this->setCategory($_category);
        $this->setYear($_year);
        $this->setName($_name);

    }
    

    //La funzione SET permette di assegnare un valore agli attributi
    public function setCategory($_category){
        $this->category=$_category;
    }

    //Leggo la proprietà degli attributi(category) tramite la funzione GET
    public function getCategory($_category){
        return $this->category;

    }
    
    
    public function setYear($_year){
        $this->year=$_year;
    }

    public function getYear($_year){
        return $this->year;

    }
    
    
    
    public function setName($_name){
        $this->name=$_name;
    }

    public function getName($_name){
        return $this->name;

    }
}


