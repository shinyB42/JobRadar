<?php
    include("/vues/banner.php");
?>
    <div class="fond">
        <section onload="javascript:initialiserCarte();">
            <aside class="map">
                <div id="maCarte" ></div>
            </aside>
            <section class="column">
                <h2 class="laListeEnPlace">La liste des emplois</h2>
<?php
    foreach($_REQUEST["Listing"] as $listing){
        $idEmploi = $listing->getEmploi()->getIdEmploi();
        $titre = $listing->getEmploi()->getTitreEmploi();
        $description = $listing->getEmploi()->getDescriptionEmploi();
        $dateDebut = $listing->getEmploi()->getDateHeureDebutEmploi();
        $dateFin = $listing->getEmploi()->getDateHeureFinEmploi();
        $lieu = $listing->getEmploi()->getLieuEmploi();

?>
                <div>
                    <label class="laListeEnPlaceBody"><?=$titre?> - <?=$description?> - <?=$dateDebut?> - <?=$dateFin?> - <?=$lieu?></label>
                    <a href='?action=PostulerAction&id=<?=$idEmploi?>' class='btn btn-danger' title='Postuler'>postuler</a>

                </div>
<?php } ?>

            </section>
        </section>    
    </div>
<?php
    include("/vues/footer.php");
?>