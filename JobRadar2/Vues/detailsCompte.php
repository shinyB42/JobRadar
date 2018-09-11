<?php
include("/vues/banner.php");

?>

<div class="fond2">
    <div class="row">
        <div class="col-md-offset-1 col-xs-5"> <!-- section postulations -->
            <h2>Emplois sollicit&eacute;s:</h2><br/>
        <?php
            foreach($_REQUEST["Details"]["postulations"]["bientot"] as $postulation){
                $idEmploi=$postulation->getIdEmploi();
                $titre = $postulation->getTitreEmploi();
                $description = $postulation->getDescriptionEmploi();
                $compagnie = $postulation->getCompagnieEmploi();
                $postes = $postulation->getNombrePosteEmploi();
                $postesACombler = $postulation->getEmploiACombler();
                $lieu = $postulation->getLieuEmploi();
                $debut = $postulation->getDateHeureDebutEmploi();
                $fin = $postulation->getDateHeureFinEmploi();
         ?>
            <label class="bientot"><?=$titre?> - <?=$description?> - <?=$compagnie?><br/><?=$lieu?> - du <?=$debut?> au <?=$fin?></label>
            <a href="?action=SupprimerEmploiAction&id=<?=$idEmploi?>" class='btn btn-danger'>Supprimer</a><br/>

        <?php
            }
            foreach($_REQUEST["Details"]["postulations"]["actif"] as $postulation){
                $idEmploi=$postulation->getIdEmploi();
                $titre = $postulation->getTitreEmploi();
                $description = $postulation->getDescriptionEmploi();
                $compagnie = $postulation->getCompagnieEmploi();
                $postes = $postulation->getNombrePosteEmploi();
                $postesACombler = $postulation->getEmploiACombler();
                $lieu = $postulation->getLieuEmploi();
                $debut = $postulation->getDateHeureDebutEmploi();
                $fin = $postulation->getDateHeureFinEmploi();
         ?>
            <label class="actif"><?=$titre?> - <?=$description?> - <?=$compagnie?><br/><?=$lieu?> - du <?=$debut?> au <?=$fin?></label>
            <a href="?action=SupprimerEmploiAction&id=<?=$idEmploi?>" class='btn btn-danger'>Supprimer</a><br/>
        <?php
            }
            foreach($_REQUEST["Details"]["postulations"]["passe"] as $postulation){
                $idEmploi=$postulation->getIdEmploi();
                $titre = $postulation->getTitreEmploi();
                $description = $postulation->getDescriptionEmploi();
                $compagnie = $postulation->getCompagnieEmploi();
                $postes = $postulation->getNombrePosteEmploi();
                $postesACombler = $postulation->getEmploiACombler();
                $lieu = $postulation->getLieuEmploi();
                $debut = $postulation->getDateHeureDebutEmploi();
                $fin = $postulation->getDateHeureFinEmploi();
         ?>
            <label class="passe"><?=$titre?> - <?=$description?> - <?=$compagnie?><br/><?=$lieu?> - du <?=$debut?> au <?=$fin?></label><br/>
        <?php
            }
        ?>
        </div>


        <div class="col-xs-6"> <!-- section emplois -->
            <h2>Emplois Cr&eacute;&eacute;s: </h2><br/>
        <?php
            foreach($_REQUEST["Details"]["emplois"]["bientot"] as $emploi){
                $idEmploi=$emploi->getIdEmploi();
                $titre = $emploi->getTitreEmploi();
                $description = $emploi->getDescriptionEmploi();
                $compagnie = $emploi->getCompagnieEmploi();
                $postes = $emploi->getNombrePosteEmploi();
                $postesACombler = $emploi->getEmploiACombler();
                $lieu = $emploi->getLieuEmploi();
                $debut = $emploi->getDateHeureDebutEmploi();
                $fin = $emploi->getDateHeureFinEmploi();


         ?>
            <label class="bientot"><?=$titre?> - <?=$description?> - <?=$compagnie?><br/><?=$postesACombler?> / <?=$postes?> - <?=$lieu?> - du <?=$debut?> au <?=$fin?></label>
            <a href="?action=ModifierEmploiAction&id=<?=$idEmploi?>" class='btn btn-danger'> Modifier</a>
            <a href="?action=SupprimerEmploiAction&idEmploi=<?=$idEmploi?>" class='btn btn-danger'>Supprimer</a>
            <br/>

        <?php
            }
            foreach($_REQUEST["Details"]["emplois"]["actif"] as $emploi){
                $idEmploi=$emploi->getIdEmploi();
                $titre = $emploi->getTitreEmploi();
                $description = $emploi->getDescriptionEmploi();
                $compagnie = $emploi->getCompagnieEmploi();
                $postes = $emploi->getNombrePosteEmploi();
                $postesACombler = $emploi->getEmploiACombler();
                $lieu = $emploi->getLieuEmploi();
                $debut = $emploi->getDateHeureDebutEmploi();
                $fin = $emploi->getDateHeureFinEmploi();


         ?>
            <label class="actif"><?=$titre?> - <?=$description?> - <?=$compagnie?><br/><?=$postesACombler?> / <?=$postes?> - <?=$lieu?> - du <?=$debut?> au <?=$fin?></label><br/>
        <?php
            }
            foreach($_REQUEST["Details"]["emplois"]["passe"] as $emploi){
                $idEmploi=$emploi->getIdEmploi();
                $titre = $emploi->getTitreEmploi();
                $description = $emploi->getDescriptionEmploi();
                $compagnie = $emploi->getCompagnieEmploi();
                $postes = $emploi->getNombrePosteEmploi();
                $postesACombler = $emploi->getEmploiACombler();
                $lieu = $emploi->getLieuEmploi();
                $debut = $emploi->getDateHeureDebutEmploi();
                $fin = $emploi->getDateHeureFinEmploi();


         ?>
            <label class="passe"><?=$titre?> - <?=$description?> - <?=$compagnie?><br/><?=$postesACombler?> / <?=$postes?> - <?=$lieu?> - du <?=$debut?> au <?=$fin?></label><br/>
        <?php
            }
        ?>  
        </div>
    </div>
    
    <?php
        $titre ="";
        $description ="";
        $compagnie ="";
        $nombrePoste ="";
        $lieu ="";
        $quartier="";
        $dateDebut ="";
        $dateFin ="";
        if (isset($_REQUEST["titre"])) $titre = $_REQUEST["titre"];
        if (isset($_REQUEST["description"])) $description = $_REQUEST["description"];
        if (isset($_REQUEST["compagnie"])) $compagnie = $_REQUEST["compagnie"];
        if (isset($_REQUEST["nombrePoste"])) $nombrePoste = $_REQUEST["nombrePoste"];
        if (isset($_REQUEST["lieu"])) $lieu = $_REQUEST["lieu"];
        if (isset($_REQUEST["quartier"])) $quartier = $_REQUEST["quartier"];
        if (isset($_REQUEST["dateDebut"])) $dateDebut = $_REQUEST["dateDebut"];
        if (isset($_REQUEST["dateFin"])) $dateFin = $_REQUEST["dateFin"];


        $valideTitre ="";
        $valideDescription ="";
        $valideCompagnie ="";
        $valideNombrePoste ="";
        $valideLieu ="";
        $valideDateDebut ="";
        $valideDateFin ="";
        if (isset($_REQUEST["field_messages"]["formEmploi"]["titre"]))
            $valideTitre = $_REQUEST["field_messages"]["formEmploi"]["titre"];
        if (isset($_REQUEST["field_messages"]["formEmploi"]["description"]))
            $valideDescription = $_REQUEST["field_messages"]["formEmploi"]["description"];
        if (isset($_REQUEST["field_messages"]["formEmploi"]["compagnie"]))
            $valideCompagnie = $_REQUEST["field_messages"]["formEmploi"]["compagnie"];
        if (isset($_REQUEST["field_messages"]["formEmploi"]["nombrePoste"]))
            $valideNombrePoste = $_REQUEST["field_messages"]["formEmploi"]["nombrePoste"];
        if (isset($_REQUEST["field_messages"]["formEmploi"]["lieu"]))
            $valideLieu = $_REQUEST["field_messages"]["formEmploi"]["lieu"];
        if (isset($_REQUEST["field_messages"]["formEmploi"]["dateDebut"]))
            $valideDateDebut = $_REQUEST["field_messages"]["formEmploi"]["dateDebut"];
        if (isset($_REQUEST["field_messages"]["formEmploi"]["dateFin"]))
            $valideDateFin = $_REQUEST["field_messages"]["formEmploi"]["dateFin"];
    ?>

    <div class="row">
        <div class=" col-md-offset-2 col-xs-2">
            <h2>Formulaire Emploi</h2><!-- section details cest un formulaire prerempli qui est disabled, avec un boutton modifier qui enable le form pour changer les champs pour update le compte-->
            <form>
            <div class="container3">
                <label for="titre">titre: </label> <input class="inputtext" type="text" name="titre" value="<?php echo $titre?>"/><label><?php echo $valideTitre?></label><br/>
                <label for="description">Description: </label> <input class="inputtext" type="text" name="description" value="<?php echo $description?>"/><label><?php echo $valideDescription?></label><br/>
                <label for="compagnie">Compagnie: </label> <input class="inputtext" type="text" name="compagnie" value="<?php echo $compagnie?>"/><label><?php echo $valideCompagnie?></label><br/>
                <label for="nombrePoste">Nombre de Postes: </label> <input class="inputtext" type="text" name="nombrePoste" value="<?php echo $nombrePoste?>" /><label><?php echo $valideNombrePoste?></label><br/>
                <label for="lieu">Lieu: </label> <input class="inputtext" type="text" name="lieu" value="<?php echo $lieu?>"/><label><?php echo $valideLieu?></label><br/>
                <select class="inputtext" name="quartier">
                    <?php
                        foreach ($_REQUEST["quartiers"] as $quarts){
                            $selected = "";
                            if($quarts->getIdQuartier() == $_REQUEST["quartier"]) $selected="selected";
                    ?>
                    <option value="<?=$quarts->getIdQuartier()?>" <?=$selected?>><?=$quarts->getNomQuartier()?></option> 
                    <?php
                        }
                    ?>
                </select><br/>
                <label for="dateDebut">Date du Debut: </label> <input class="inputtext" type="text" name="dateDebut" value="<?php echo $dateDebut?>"/><label><?php echo $valideDateDebut?></label><br/>
                <label for="dateFin">Date de la Fin: </label> <input class="inputtext" type="text" name="dateFin" value="<?php echo $dateFin?>"/><label><?php echo $valideDateFin?></label><br/>
                <input name="action" value="ModifierEmploiAction" type="hidden"/>
                <input class="lbtn" type="submit" value="Modifier"/>
                </div>    
            </form>
        </div>
        
         <!-- Deuxieme formulaire-->
         <?php
             $nom ="";
            $prenom ="";
            $username ="";
            $adresse ="";
            $quartier ="";
            $telephone ="";
            $email ="";
            if (isset($_REQUEST["nom"])) $nom = $_REQUEST["nom"];
            if (isset($_REQUEST["prenom"])) $prenom = $_REQUEST["prenom"];
            if (isset($_REQUEST["username"])) $username = $_REQUEST["username"];
            if (isset($_REQUEST["adresse"])) $adresse = $_REQUEST["adresse"];
            if (isset($_REQUEST["quartier"])) $quartier = $_REQUEST["quartier"];
            if (isset($_REQUEST["telephone"])) $telephone = $_REQUEST["telephone"];
            if (isset($_REQUEST["email"])) $email = $_REQUEST["email"];


            $valideNom ="";
            $validePrenom ="";
            $valideUsername ="";
            $validePassword ="";
            $valideAdresse ="";
            $valideTelephone ="";
            $valideEmail ="";
            if (isset($_REQUEST["field_messages"]["formInscription"]["nom"]))
                $valideNom = $_REQUEST["field_messages"]["formInscription"]["nom"];
            if (isset($_REQUEST["field_messages"]["formInscription"]["prenom"]))
                $validePrenom = $_REQUEST["field_messages"]["formInscription"]["prenom"];
            if (isset($_REQUEST["field_messages"]["formInscription"]["username"]))
                $valideUsername = $_REQUEST["field_messages"]["formInscription"]["username"];
            if (isset($_REQUEST["field_messages"]["formInscription"]["password"]))
                $validePassword = $_REQUEST["field_messages"]["formInscription"]["password"];
            if (isset($_REQUEST["field_messages"]["formInscription"]["adresse"]))
                $valideAdresse = $_REQUEST["field_messages"]["formInscription"]["adresse"];
            if (isset($_REQUEST["field_messages"]["formInscription"]["telephone"]))
                $valideTelephone = $_REQUEST["field_messages"]["formInscription"]["telephone"];
            if (isset($_REQUEST["field_messages"]["formInscription"]["email"]))
                $valideEmail = $_REQUEST["field_messages"]["formInscription"]["email"];
            ?>


        <div id="content" class=" col-md-offset-2 col-xs-6">
            <h2>Formulaire Compte</h2>
            <form method="post">
                <div class="container3">
        <?php
            $postulationOrigin ="";
            if (isset($_REQUEST["postulerTemp"])){
                $postulationOrigin = "Veuillez creer un compte avant de postuler<br/>";
        ?>
                    <label><?=$postulationOrigin?></label><br/><input type="hidden" name="postulerTemp2" value="<?php echo isset($_REQUEST["postulerTemp"]) ? $_REQUEST["postulerTemp"]:""?>">
        <?php

            }
        ?>      
                    <label for="nom">Nom: </label> <input class="inputtext" type="text" name="nom" value="<?php echo $nom?>"/><label><?php echo $valideNom?></label><br/>
                    <label for="prenom">Prenom: </label> <input class="inputtext" type="text" name="prenom" value="<?php echo $prenom?>"/><label><?php echo $validePrenom?></label><br/>
                    <label for="username">Nom d'utilisateur: </label> <input class="inputtext" type="text" name="username" value="<?php echo $username?>"/><label><?php echo $valideUsername?></label><br/>
                    <label for="password">Mot de passe: </label> <input class="inputtext" type="password" name="password" /><label><?php echo $validePassword?></label><br/>
                    <label for="adresse">Adresse: </label> <input class="inputtext" type="text" name="adresse" value="<?php echo $adresse?>"/><label><?php echo $valideAdresse?></label><br/>
                    <select name="quartier" class="inputtext">
        <?php
            foreach ($_REQUEST["quartiers"] as $quarts){
                $selected = "";
                if($quarts->getIdQuartier() == $_REQUEST["quartier"]) $selected="selected";
        ?>
                        <option value="<?=$quarts->getIdQuartier()?>" <?=$selected?>><?=$quarts->getNomQuartier()?></option> 
        <?php
            }
        ?>

                    </select><br/>
                    <label for="telephone">Telephone: </label> <input class="inputtext" type="text" name="telephone" value="<?php echo $telephone?>"/><label><?php echo $valideTelephone?></label><br/>
                    <label for="email">E-mail: </label> <input class="inputtext" type="text" name="email" value="<?php echo $email?>"/><label><?php echo $valideEmail?></label><br/>
                    <input name="action" value="CreerCompteAction" type="hidden"/>
                    <input class="lbtn" type="submit" value="Inscription"/>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'vues/footer.php';
?>