
<h2 id="etitres">Liste des articles TMT</h2><br /><br /><br />
<a href ="./pages/imprimer.php"><img src="./images/pdf.jpg" alt="PDF"/></a>
<?php
$obj = new Vue_tmtDB($cnx);
$liste = $obj->getVue_tmt();
$nbrG = count($liste);
//var_dump($liste);
?>

<table class="table-responsive">
    <tr>
        <th id="yesa" class="ecart">Id&nbsp;:</th>&nbsp;&nbsp;&nbsp;
        <th id="yesaa" class="ecart">&nbsp;&nbsp;&nbsp;Th&egrave;me&nbsp;:</th>
        <th id="yesaa" class="ecart">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nom&nbsp;:</th>
        <th id="yesaa" class="ecart">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prix&nbsp;:</th>
    </tr>
    <?php
    for ($i = 0; $i < $nbrG; $i++) {
        ?>
        <tr>
            <td id="yesaa" class="ecart"><?php print $liste[$i]['ID_TMT_PRODUIT']; ?>&nbsp;&nbsp;&nbsp;</td>
            <td id="yesa" class="ecart"><?php print ($liste[$i]['TYPE_PRODUIT']); ?>&nbsp;&nbsp;&nbsp;</td>
            <td>
<span contenteditable="true" name="NOM_PRODUIT" class="ecart" id="<?php print $liste[$i]['ID_TMT_PRODUIT']; ?>">
                    <td id="yessa" class="ecart"><?php print($liste[$i]['NOM_PRODUIT']); ?></td>
</span>
            </td>
            <td>
<span contenteditable="true" name="PRIX_UNITAIRE" class="ecart" id="<?php print $liste[$i]['ID_TMT_PRODUIT']; ?>">
                <td id="yesa" class="ecart"><?php print $liste[$i]['PRIX_UNITAIRE']; ?>$</td>
</span>
            </td>
        </tr>
        <?php
    }
    ?>
</table>  
