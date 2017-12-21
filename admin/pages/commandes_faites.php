<h2 id="etitres">Commandes Effectu&eacute;es</h2>
<?php

    $cake = new Vue_adminDB($cnx);
    $liste = $cake->getVue_admin();
    $nbrCakes = count($liste);
    
?>
<br /><br /><br /><br /><br />
<div class="container">
    <?php
        if(isset($liste)){
            if($nbrCakes>0){       
    ?>

    <?php
        for($i=0;$i<$nbrCakes;$i++){
    ?>
    <div class="row">
         <h4 id="titressssaa">Produit Command&eacute;&nbsp;:</h4>
         
        <div>
                <br/>
                <div class=zoom>
                <div class=produit>
                <img class="commande" src="./images/<?php print $liste[$i]['IMAGE'];?>" alt="image" />
                </div>
                </div>      
             </div>      
        <div>
            
            <h3 id="titressssa">Donn&eacute;es du client :</h3><br/>
            <h5 id="titressss">Nom :&nbsp;<?php print $liste[$i]['NOM_CLIENT'];?></h5>          
            <h5 id="titressss">Prenom :&nbsp;<?php print $liste[$i]['PRENOM_CLIENT'];?></h5>
            <h5 id="titressss">Email :&nbsp;<?php print $liste[$i]['EMAIL_CLIENT'];?></h5> 
            <h5 id="titressss">Adresse :&nbsp;<?php print $liste[$i]['RUE_CLIENT'];?>&nbsp;n&deg;&nbsp;<?php print $liste[$i]['NUMERO'];?>,&nbsp;<?php print $liste[$i]['CODEPOSTAL'];?>&nbsp;,<?php print $liste[$i]['LOCALITE'];?></h5>         
            <h5 id="titressss">T&eacute;l&eacute;phone :&nbsp;<?php print $liste[$i]['TELEPHONE'];?></h5>
            <br/><br/><br/><br/><br/>
            <h5 id="titresssss">Produit :&nbsp;<?php print $liste[$i]['NOM_PRODUIT'];?></h5>          
            <h5 id="titresssss">Prix :&nbsp;<?php print $liste[$i]['PRIX_UNITAIRE'];?>$</h5> 
            
            
            
        </div>
        
    </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <?php } ?> 
</div>

<?php
        }}//fin if du début
?>