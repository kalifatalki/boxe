<h2 id="titres">Boxeurs du Mayweather Boxing Club</h2>
<?php

    $cake = new Vue_boxeursDB($cnx);
    $liste = $cake->getVue_boxeurs();
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
        <div class="col-sm-12 col-md-6">
                <img class="boxeurss" src="admin/images/<?php print $liste[$i]['IMAGES'];?>" alt="image" />
        </div>
        <div>
            <img class="pays" src="admin/images/<?php print $liste[$i]['NATIONALITE'];?>" alt="image" />
        </div>
        <div class="col-md-4 text-center">
            
            <h3 id="boxeurs"><?php print $liste[$i]['NOM'];?></h3><br/>           
            <h5 id="boxeurs">
            <?php print $liste[$i]['PRENOM'];?>            
            <?php print $liste[$i]['AGE'];?> ans</h5>
            <h6 id="boxeurs">Palmares :&nbsp;<?php print $liste[$i]['PALMARES'];?></h6>
            <h6 id="boxeurs">Titre :&nbsp;<?php print $liste[$i]['TITRE'];?></h6><br/>
            <h5 id="boxeurs">Categorie  :&nbsp;</h5>
            <h6 id="boxeurs"><?php print $liste[$i]['POIDS'];?></h6>
            
            
        </div>
        
    </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <?php } ?> 
</div>

<?php
        }}//fin if du début
?>