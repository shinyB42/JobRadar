<?php
require_once 'Controlleur/DefaultAction.php';
require_once 'Controlleur/LoginAction.php';
require_once 'Controlleur/LogoutAction.php';
require_once 'Controlleur/CreerCompteAction.php';
require_once 'Controlleur/CreerEmploiAction.php';
require_once 'Controlleur/PostulerAction.php';
require_once 'Controlleur/ContactAction.php';
require_once 'Controlleur/AProposAction.php';
require_once 'Controlleur/DetailCompteAction.php';
require_once 'Controlleur/ModifierEmploiAction.php';
require_once 'Controlleur/SupprimerEmploiAction.php';


class ActionBuilder{
    public static function getAction($nomAction){
        switch($nomAction){
            case "loginAction":
                return new LoginAction();
                break;
            case "logoutAction":
                return new LogoutAction();
                break;
            case "CreerCompteAction":
                return new CreerCompteAction();
                break;
            case "CreerEmploiAction":
                return new CreerEmploiAction();
                break;
            case "PostulerAction":
                return new PostulerAction();
                break;
            case "ContactAction":
                return new ContactAction();
                break;
            case "AProposAction":
                return new AProposAction();
                break;
            case "DetailCompteAction":
                return new DetailCompteAction();
                break;
            case "ModifierEmploiAction":
                return new ModifierEmploiAction();
                break;	
            case "ModifierCompteAction":
                return new ModifierCompteAction();
                break;	
            case "SupprimerEmploiAction":
                return new SupprimerEmploiAction();
                break;	
				
            default:
                return new DefaultAction();
        }
    }
}