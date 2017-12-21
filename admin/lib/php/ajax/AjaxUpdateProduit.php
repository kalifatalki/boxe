<?php
header('Content-type: application/json');
require '../dbConnectMysql.php';
require '../classes/Connexion.class.php';
require '../classes/Type_tmt.class.php';
require '../classes/Type_tmtDB.class.php';
$cnx= Connexion::getInstance($dsn, $user, $pass);

try{
    
    $update= new Type_tmtDB($cnx);
    extract($_GET,EXTR_OVERWRITE);
    $param=' id='.$id.'&champ='.$champ.'$nouveau'.$nouveau;
    $update ->updateProduit($champ,$nouveau,$id);
    
} catch (PDOException $e) {
    
    print $e->getMessage();

}



