<?php

class QuestionManager extends Manager{
   
    function __construct(){
        $this->className="Question";
    }



    public function create($objet){
        $sql="insert into question (id,nbrePoint,question,reponses,type) values (".$objet->getId().",".$objet->getNbrePoint().",".$objet->getQuestion().",".$objet->getReponses().
        ",".$objet->getType().",".$objet->getScore().")";
        //die($sql);
        return $this->ExecuteUpdate($sql)!=0;

    }
    /*public function update($objet,$id){
        
        $sql="UPDATE user SET  fullname=[.$objet->getFullname($fullName).],login=[.$objet->setLogin($login).],pwd=[.$objet->setPwd($pwd).],profil=[.$objet->setProfil($profil).],score=[.$objet->getScore($score).] WHERE id=$id";
        //die($sql);
        return $this->ExecuteUpdate($sql)!=0;

    }*/
    public  function delete($id){
      $sql="DELETE FROM question WHERE id='$id' ";

      return $this->ExecuteUpdate($sql)!=0;
    }
    public function findAll(){

        $sql="select question,reponses from question";
        

        return $this-> ExecuteSelect($sql);
         }

    public function findById($id){

        $sql="select score,question,repones,nbrePoint from question where id='$id'";
        
       return $this-> ExecuteSelect($sql);

    }   
}