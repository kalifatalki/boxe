<h2 id="titres">Formulaire de Commande</h2>
<br /><br /><br />
<h4 id="yess">Vous avez s&eacute;l&eacute;ctionn&eacute; ce produit :</h4><br /><br /><br />
<meta charset="UTF-8" /> 
<?php
if (!isset($_GET['id']) && !isset($_SESSION['id_commande'])) {
    
    ?>
    <p>Pour commander, choisissez <a href="index.php?page=produits.php">ici</a> Votre produit</p>
    <?php
} else if (isset($_GET['id'])) {
    $_SESSION['id_commande'] = $_GET['id'];
}
if (isset($_SESSION['id_commande'])) {
    $cake = new vue_tmtDB($cnx);
    $liste = $cake->getVue_tmtProduit($_SESSION['id_commande']);

    // TRAITEMENT DU FORMULAIRE
    if (isset($_GET['commander'])) {
        //permet d'extraire les champs du tableau $_GET pour simplifier
        extract($_GET, EXTR_OVERWRITE);
        if (empty($email1) || empty($email2) || empty($password) || empty($nom) || empty($prenom) || empty($telephone) || empty($rue_client) || empty($numero) || empty($codepostal) || empty($localite)) {
            $erreur = "Veuillez remplir tous les champs";
        }
        else{
            $client = new ClientDB($cnx);
            $client->addClient($_GET);
        }
    }
        
        ?>
        
        <div class="row">
            <div class="col-sm-2">
                <div class=zoom>
                <div class=produit>
                <img class="boxeurss" src="admin/images/<?php print $liste[0]['IMAGE']; ?>" alt="Gateau">
                </div>
                </div>
            </div>
            <div class="col-sm-2">
        <h6 id="yes"><?php print $liste[0]['NOM_PRODUIT']; ?><h6 /><br />
            </div>
            <div class="col-sm-2">
                <h6 id="yes"><?php print $liste[0]['PRIX_UNITAIRE']; ?>$<h6 />
            </div>
        </div>
        <br /><br /><br />
        <div class="container">
            <div class="row">
                <div class="col-sm-4 erreur">
        <?php
        if (isset($erreur)) {
            print $erreur;
        }
        ?>
                </div>
            </div>
            <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_commande">

                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="email1">Email</label></div>
                    <div class="col-sm-4">
                        <input type="email" id="email1" name="email1" placeholder="aaa@aaa.aa"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="email2">Confirmez votre email</label></div>
                    <div class="col-sm-4">
                        <input type="email" id="email2" name="email2" placeholder="aaa@aaa.aa"/>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="password">Password</label></div>
                    <div class="col-sm-4">
                        <input type="password" id="password" name="password"/>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="nom">Nom</label></div>
                    <div class="col-sm-4">
                        <input type="text" name="nom" id="nom" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="prenom">Pr&eacute;nom</label></div>
                    <div class="col-sm-4">
                        <input type="text" name="prenom" id="prenom" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="telephone">T&eacute;l&eacute;phone</label></div>
                    <div class="col-sm-4">
                        <input type="text" name="telephone" id="telephone" placeholder="xxx/xx.xx.xx"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="adresse">Adresse</label></div>
                    <div class="col-sm-4">
                        <input type="text" name="rue_client" id="adresse" />
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="numero">Num&eacute;ro</label></div>
                    <div class="col-sm-4">
                        <input type="text" name="numero" id="numero" />
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="codepostal">Code postal</label></div>
                    <div class="col-sm-4">
                        <input type="text" name="codepostal" id="codepostal" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="localite">Localit&eacute;</label></div>
                    <div class="col-sm-4">
                        <input type="text" name="localite" id="localite" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 txtBleu"><label for="id">Id du produit</label></div>
                    <div class="col-sm-4">
                        <select name="id" id="id">
                            <option value="<?php print $liste[0]['ID_TMT_PRODUIT'] ?>" ><?php print $liste[0]['ID_TMT_PRODUIT'] ?> </option>
                            </select>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="submit" name="commander" id="commander" value="Finaliser ma commande" class="pull-right"/>&nbsp;           
                        <input type="reset" id="reset" value="Annuler" class="pull-left"/>
                    </div>
                </div>
            </form>
        </div>

        <?php
    }
    ?>