<?php
class Vue_tmtDB {
    private $_db;
    function __construct($_db) {
        $this->_db = $_db;
    }
    
    //liste des gâteaux correspondant au choix du type dans liste déroulante
    function getVue_tmtType($id){
         try {            
            $query = "SELECT * FROM VUE_PRODUIT where ID_TMT_TYPE_PRODUIT=:id_tmt_type_produit";
            $resultset = $this->_db->prepare($query);  
            $resultset->bindValue(':id_tmt_type_produit',$id);
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
    

    function getVue_tmt(){
         try {
            $query = "SELECT * FROM VUE_PRODUIT order by TYPE_PRODUIT,NOM_PRODUIT";
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
    
    function getVue_tmtProduit($id){
         try {            
            $query = "SELECT * FROM VUE_PRODUIT where id_tmt_produit=:id_tmt_produit";
            $resultset = $this->_db->prepare($query);  
            $resultset->bindValue(':id_tmt_produit',$id);
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

