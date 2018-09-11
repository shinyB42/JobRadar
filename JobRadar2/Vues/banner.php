

<div class="banner">
    <section>
        <img src="Images/LogoJobRadar.gif" alt="Logo JobRadar" >
        <div class="banner-right">
            <a <?php echo $_REQUEST["activePage"]=="accueil"? 'class="active"' : "" ?> href="?">accueil</a>
<?php
    if (!ISSET($_SESSION)) 
        session_start();
    if (ISSET($_SESSION["connected"])){
?>   
            
            <a <?php echo $_REQUEST["activePage"]=="creerEmploi"? 'class="active"' : "" ?>href="?action=CreerEmploiAction">Poster un Emploi </a>
<?php	
    }else{
?>
            <a <?php echo $_REQUEST["activePage"]=="login"? 'class="active"' : "" ?>href="?action=loginAction">Login </a>
            <a <?php echo $_REQUEST["activePage"]=="creerCompte"? 'class="active"' : "" ?>href="?action=CreerCompteAction">Creer un nouveau compte </a>
<?php	
    }
?>	
            <a <?php echo $_REQUEST["activePage"]=="Apropos"? 'class="active"' : "" ?>href="?action=AProposAction">&Agrave; propos </a>
            <a <?php echo $_REQUEST["activePage"]=="contact"? 'class="active"' : "" ?>href="?action=ContactAction">Contact </a>

            <form style = "margin-top:10px;"> 
                <input type="text" name="search"/> 
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
<?php
    if (isset($_SESSION["connected"])){
?>
            <a class="account" href="?action=logoutAction">Logout</a>
            <label> Username: <?=$_SESSION["connected"]->getUsername()?></label>
            <a <?php echo $_REQUEST["activePage"]=="details"? 'class="active"' : "" ?>href="?action=DetailCompteAction">Mon Compte </a>
            
<?php
    }
?>
        </div>
    </section>
</div>
