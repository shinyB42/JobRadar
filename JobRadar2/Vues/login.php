<?php
    include("/vues/banner.php");
?>
    <div id="content" class="fond2">
<?php
    $username ="";
    if (isset($_REQUEST["username"]))
        $username = $_REQUEST["username"];
?>
        <form method="post">
            <div class="container2">
            <label for="username">Nom d'utilisateur: </label><br/>
            <input name ="username" type="text" class="inputtext" value="<?php echo $username?>"/>
<?php 
    if (ISSET($_REQUEST["field_messages"]["login"]["username"])) 
        echo "<span>".$_REQUEST["field_messages"]["login"]["username"]."</span>";
?>    
            <br/>
            <label for="password"> Mot de passe: </label><br/>
            <input class="inputtext" name="password" type="password"/>
<?php
    if(isset($_REQUEST["field_messages"]["login"]["password"]))
        echo "<span>".$_REQUEST["field_messages"]["login"]["password"]."</span>";
?>
            <br/>
            <input name="action" value="loginAction" type="hidden"/>
            <input class="lbtn" value="OK" type="submit"/>
            </div>
        </form>
        
        
    
    </div>
<?php
    include("/vues/footer.php");
?>
    