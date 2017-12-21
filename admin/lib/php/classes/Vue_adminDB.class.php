<?php
class Vue_adminDB {
    private $_db;
    function __construct($_db) {
        $this->_db = $_db;
    }
    
   

    function getVue_admin(){
         try {
            $query = "SELECT * FROM VUE_ADMIN order by NOM_CLIENT,PRENOM_CLIENT";
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
    
    
}

