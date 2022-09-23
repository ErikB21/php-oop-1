<?php

    //creo la classe movie

    class Movie{
        //creo le istanze(attributi)
        public $title;
        public $original_title;
        public $language;
        //il nome dell'autore lo proteggo, ma lo richiamerò nel mio metodo
        protected $author;
        public $description;

        //instanzio un costruttore con diversi parametri(collegati poi ai miei attributi)
        public function __construct($title, $original_title, $language = 'Italiano', $author)
        {
            $this->title = $title;
            $this->original_title = $original_title;
            $this->language = $language;
            $this->author = $author;
        }

        //ritorno l'autore perchè protetto
        public function getAuthor(){
            return $this->author;
        }
        //riporto la descrizione in modo da darne una per ogni film
        public function setDescription($text){
            return '<p>' . $text . '</p>' ;
        }

        public function getDescription(){
            return $this->description;
        }

        //riporto tutto ciò che stampo
        public function getAllInfo(){
            return '<h1>' . $this->title . '</h1>' .
            '<h4>' . $this->original_title . '</h4>' .
            '<div class="lang">' . $this->language . '</div>' .
            '<div class="name">' . $this->getAuthor() . '</div>';
        }
    }