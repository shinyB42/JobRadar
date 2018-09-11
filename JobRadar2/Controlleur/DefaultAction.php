
<?php
require_once 'controlleur/action.interface.php';
require_once 'Modeles/Classes/Compte.php';
require_once 'Modeles/Classes/CompteDAO.php';
require_once 'Modeles/Classes/Emploi.php';
require_once 'Modeles/Classes/EmploiDAO.php';
require_once 'Modeles/Classes/Listing.php';
require_once 'Modeles/Classes/QuartierDAO.php';
require_once 'Modeles/Classes/PostulationDAO.php';
class DefaultAction implements Action{
    public function execute(){
        
        $_REQUEST["activePage"]="accueil";
        date_default_timezone_set('America/New_York');
        if(!isset($_SESSION))
            session_start();
        if(isset($_SESSION["connected"])){
            $idCompte = $_SESSION["connected"]->getNumeroCompte();
            $idQuartierCompte = $_SESSION["connected"]->getIdQuartierCompte();
        }else{
            $idCompte = 1337; //compte pour les visiteurs on a besoin que ce compte existe
            $idQuartierCompte = 31; //pour raisons du triage on met le quartier par defaut au centreville de montreal
        }
        
        $ListeAfficher=[];
        $Emplois=[];
        $dbEmploi = new EmploiDAO();
        $Emplois=$dbEmploi->findAll();
        
        
        $dbQuartierCompte = new QuartierDAO();
        $quartierCompte = $dbQuartierCompte->findById($idQuartierCompte);
        $coordCompte = $quartierCompte->getCoordonneeQuartier();
        
        foreach ($Emplois as $emploi){
            $dateNow = date("Y-m-d");
            $dateFin = $emploi->getDateHeureFinEmploi();
            $dateDebut = $emploi->getDateHeureDebutEmploi();
            $echeanceFinale = strtotime($dateFin) - strtotime($dateNow);
            $echeance = strtotime($dateDebut) - strtotime($dateNow);
            $restant = $emploi->getEmploiACombler();
            $idEmploi = $emploi->getIdEmploi();
            $dejaPostulerDAO = new PostulationDAO();
            if ($idCompte==1337){
                $dejaPostuler = FALSE;
            }else{
                $dejaPostuler = $dejaPostulerDAO->findBy2Id($idEmploi, $idCompte);
            }
            $idCompteEmployeur = $emploi->getIdCompteEmployeur();
            
            if ($echeanceFinale>0 and $restant > 0 and $echeance>0 and $dejaPostuler == FALSE and $idCompteEmployeur != $idCompte){
            
                $dbQuartierEmploi = new QuartierDAO();
                $quartierEmploi = $dbQuartierEmploi->findById($emploi->getIdQuartierEmploi());
                $coordEmploi = $quartierEmploi->getCoordonneeQuartier();
                $distance = $this->priorite($coordCompte,$coordEmploi);
                $Listing = new Listing();
                $Listing->setCompte($idCompte);
                $Listing->setEmploi($emploi->getIdEmploi());
                $Listing->setPrioritee($distance);
                array_push($ListeAfficher, $Listing);
            }else if ($echeanceFinale>0 and $restant > 0 and $echeance<=0 and $dejaPostuler == FALSE and $idCompteEmployeur != $idCompte){
                $dbQuartierEmploi = new QuartierDAO();
                $quartierEmploi = $dbQuartierEmploi->findById($emploi->getIdQuartierEmploi());
                $coordEmploi = $quartierEmploi->getCoordonneeQuartier();
                $distance = $this->priorite($coordCompte,$coordEmploi);
                $Listing = new Listing();
                $Listing->setCompte($idCompte);
                $Listing->setEmploi($emploi->getIdEmploi());
                $Listing->setPrioritee($distance-5000);
                array_push($ListeAfficher, $Listing);
            }
        }
        usort($ListeAfficher,array("Listing", "cmp_obj"));
        $_REQUEST["Listing"] = $ListeAfficher;
        $mapData = json_encode($ListeAfficher);
        return "default";
    }
    
   
        
    public function priorite($coord1, $coord2){
/* 
 * source: https://www.movable-type.co.uk/scripts/latlong.html
 * var R = 6371e3; // metres
 * var φ1 = lat1.toRadians();
 * var φ2 = lat2.toRadians();
 * var Δφ = (lat2-lat1).toRadians();
 * var Δλ = (lon2-lon1).toRadians();
 * 
 * var a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
 * Math.cos(φ1) * Math.cos(φ2) *
 * Math.sin(Δλ/2) * Math.sin(Δλ/2);
 * var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
 * 
 * var d = R * c;
 */
        
        $coordCompte = [];
        $coordEmploi = [];
        $coordCompte = explode(",", $coord1);
        $coordEmploi = explode(",", $coord2);
        $latCompte=$coordCompte[0];
        $longCompte=$coordCompte[1];
        $latEmploi=$coordEmploi[0];
        $longEmploi=$coordEmploi[1];
        $RayonTerre = 6371E3;
        
        $phi1 = deg2rad($latCompte);
        $phi2 = deg2rad($latEmploi);
        $deltaPhi = deg2rad($latCompte-$latEmploi);
        $deltaLambda = deg2rad($longCompte-$longEmploi);
        
        $a = sin($deltaPhi/2) * sin($deltaPhi/2) + cos($phi1) * cos($phi2) * sin($deltaLambda/2) * sin($deltaLambda/2);
        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        $d = $RayonTerre * $c;
        return $d;
        
        
        
        
        
    }
}
?>

<script type="text/javascript">
    
function initialiserCarte(){
        if(!navigator.geolocation){
            return false;
        }  
        

        var centreGoogleMap = new google.maps.LatLng(45.498564, -73.75878);
        var optionsGoogleMap = {
            //facteur de zoom
            zoom : 15,
            //point de centrage
            center : centreGoogleMap,
            /*Mode d'affichage de la carte (vue de la carte routière)
            google.maps.mapTypeId.ROADMAP : affichage en mode plan
            google.maps.mapTypeId.TERRAIN : affichage en mode relief
            google.maps.mapTypeId.SATELLITE : affichage en mode sattelite
            google.maps.mapTypeId.HYBRID : affichage en mode plan et sattelite*/
            mapTypeId : google.maps.MapTypeId.ROADMAP
        };
        var maCarte = new google.maps.Map(document.getElementById("maCarte"), optionsGoogleMap);
        var markerGG = new google.maps.Marker({
            position: {lat: 45.498564, lng: -73.75878},
            map: maCarte,
            title : "Cégep Gérald-Godin"
        });

        var markerGC = new google.maps.Marker({
            position: {lat: 45.485444, lng: -73.596583},
            map: maCarte,
            title : "WestMount"
        });

        var commentaireGG = "<div>";
        commentaireGG += "<h1>Quartier Saint-Laurent</h1>";
        commentaireGG += "</div>";
        var fenetreGG = new google.maps.InfoWindow({
            content : commentaireGG
        });
        google.maps.event.addListener(markerGG, "click", function(){
            fenetreGG.open(maCarte, markerGG);
        });

        var fenetreGC = new google.maps.InfoWindow({
            content : commentaireGC
        });

        google.maps.event.addListener(markerGC, "click", function(){
            fenetreGC.open(maCarte, markerGC);
        });

    }
</script>
   