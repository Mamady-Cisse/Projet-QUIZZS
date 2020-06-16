<?php
   
  class Jeu extends Controller {

    public function __construct(){
        $this->dirname="jeu"; 
    }

    public function listerJoueur(){
       $this->layout="layout_joeur_int";
       $this->views="listeJoueur";
       $this->render();
      
    }
    public function selectReponse(){
        return null;
  
    }

    public function afficheScore(){
         return 0; 
    }

   }
