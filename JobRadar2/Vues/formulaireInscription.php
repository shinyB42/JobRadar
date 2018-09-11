<?php
    include("/vues/banner.php");
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
        

<div id="content" class="fond2">
    <form method="post">
        <div class="container2">
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
            <label for="quartier">Quartier: </label><select name="quartier" class="inputtext">
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

<?php
    include("/vues/footer.php");
?>