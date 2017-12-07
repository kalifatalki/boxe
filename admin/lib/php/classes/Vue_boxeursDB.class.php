<?php
class Vue_boxeursDB {
    private $_db;
    function __construct($_db) {
        $this->_db = $_db;
    }
    
    //liste des categorie de poids correspondant au choix du type dans liste déroulante
    function getVue_boxeursType($id){
         try {            
            $query = "SELECT * FROM VUE_BOXEURS where ID_POIDS=:id_poids";
            $resultset = $this->_db->prepare($query);  
            $resultset->bindValue(':id_poids',$id);
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    

    function getVue_boxeurs(){
         try {
            $query = "SELECT * FROM VUE_BOXEURS order by POIDS,NOM";
            $resultset = $this->_db->prepare($query);  
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    
    function getVue_boxeursProduit($id){
         try {            
            $query = "SELECT * FROM VUE_BOXEURS where id_boxeurs=:id_boxeurs";
            $resultset = $this->_db->prepare($query);  
            $resultset->bindValue(':id_boxeurs',$id);
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
}

