<h2 id="titres">Le shop en ligne du Mayweather Boxing Club !</h2><br /><br />
<?php

$types = new Type_tmtDB($cnx);
$tabTypes = $types->getType_tmt();
$nbrTypes = count($tabTypes);

if(isset($_GET['choix_type'])){
    $cake = new Vue_tmtDB($cnx);
    $liste = $cake->getVue_tmtType($_GET['id_tmt_type_produit']);
    $nbrCakes = count($liste);
}    
?>

<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
    <div class="row">
        <div class="col-sm-2">
            <h5 id="produit"><span class="txtGras">Nos produits&nbsp;:</span><h5/>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-sm-3">
            <select name="id_tmt_type_produit" id="id_tmt_type_produit">
                <option value=""></option>
                
                <?php
                    for($i=0;$i<$nbrTypes;$i++){
                ?>
                <option value="<?php print $tabTypes[$i]->ID_TMT_TYPE_PRODUIT;  ?>"><?php print utf8_decode($tabTypes[$i]->TYPE_PRODUIT);  ?></option>
                <?php
                    
                
                    }
                ?>
            </select>
        </div>
           <div class="col-sm-2">
            <input type="submit" name="choix_type" value="Choisir" id="choix_type"/>
        </div>
    </div>         
</form>
</div>
<br /><br/><br/><br/>

<div class="container">
    <?php
        if(isset($liste)){
            if($nbrCakes>0){
                
            
            
        
    ?>
            <div class="row">
                <div class="col-sm-12 ">
   
                         <h6 id="taitres">RAPPEL DU GENRE DE PRODUIT SELECTIONNE :</h6>  
                         <h6 id="traitres"><?php print $liste[0]['TYPE_PRODUIT'];?></h6>
                             
   
                         <br/><br/><br/>
                </div>                             
            </div>
                <?php
                    for($i=0;$i<$nbrCakes;$i++){
                ?>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class=zoom>
                        <div class=produit>
                        <img class="boxeurss" src="admin/images/<?php print $liste[$i]['IMAGE'];?>"  alt="image"/>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">                        
                        
                        
                            
                                
                                    <h3 id="boxeurs"><?php print $liste[$i]['NOM_PRODUIT'];?></h3><br/>               
                                    <h5 id="boxeurs"><?php print $liste[$i]['PRIX_UNITAIRE'];?>$</h5><br/> 
                                                         
                        
                        
                           
                                <br/>
                                    <a href="index.php?page=commande.php&id=<?php print $liste[$i]['ID_TMT_PRODUIT'] ?>"/>
                                        Commander
                                    </a>    
                                <br/>
                                                       
                        
                    </div>
                    </div><br/><br/><br/><br/><br/><br/>
                    <?php } ?>
                
 </div>           
 <?php
            }}//fin if du debut 
 ?>
</div>
