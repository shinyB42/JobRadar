<?php
    include("/vues/banner.php");
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

<div id="content" class="fond2">
    <form method="post">
        <div class="container2">
        <label for="titre">titre: </label> <input class="inputtext" type="text" name="titre" value="<?php echo $titre?>"/><label><?php echo $valideTitre?></label><br/>
        <label for="description">Description: </label> <input class="inputtext" type="text" name="description" value="<?php echo $description?>"/><label><?php echo $valideDescription?></label><br/>
        <label for="compagnie">Compagnie: </label> <input class="inputtext" type="text" name="compagnie" value="<?php echo $compagnie?>"/><label><?php echo $valideCompagnie?></label><br/>
        <label for="nombrePoste">Nombre de Postes: </label> <input class="inputtext" type="text" name="nombrePoste" value="<?php echo $nombrePoste?>" /><label><?php echo $valideNombrePoste?></label><br/>
        <label for="lieu">Lieu: </label> <input class="inputtext" type="text" name="lieu" value="<?php echo $lieu?>"/><label><?php echo $valideLieu?></label><br/>
        <label for="quartier">Quartier: </label><select class="inputtext" name="quartier">
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
        <label for="dateDebut">Date du Debut: </label> <input placeholder="YYYY-MM-DD" class="inputtext" type="text" name="dateDebut" value="<?php echo $dateDebut?>"/><label><?php echo $valideDateDebut?></label><br/>
        <label for="dateFin">Date de la Fin: </label> <input placeholder="YYYY-MM-DD" class="inputtext" type="text" name="dateFin" value="<?php echo $dateFin?>"/><label><?php echo $valideDateFin?></label><br/>
        <input name="action" value="CreerEmploiAction" type="hidden"/>
        <input class="lbtn" type="submit" value="Inscription"/>
        </div>
    </form>
</div>

<?php
    include("/vues/footer.php");
?>