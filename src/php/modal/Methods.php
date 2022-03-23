<?php
require_once "../modal/Database.php";
class Methodes extends Dbconnect{

    public function getCat()
    {
       $query=$this->connect()->prepare("SELECT * FROM categorie");
         if($query->execute()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return 0;
        }
    }

        public function soleCat($id)
        {
            $query=$this->connect()->prepare("SELECT Nomcat FROM categorie where idCat=$id");
                if($query->execute()){
                    return $query->fetch(PDO::FETCH_ASSOC);
                }else{
                    return 0;
                }
        }


    public function addCat($name)
    {
       $query=$this->connect()->prepare("INSERT INTO `categorie`(`Nomcat`) VALUES ('$name')");
        if($query->execute()){
            return 'inserted';
            ;
        }else{
            return 'error';
        }
    }

    
}