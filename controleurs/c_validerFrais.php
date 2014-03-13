<?php
include ("vues/v_sommaire_c.php");
$action = $_REQUEST['action'];
?>
<center>
<?php

switch($action){
	case 'selectionnerVisiteur':{
		$listeUtilisateur = $pdo->getNomPrenomIdVisiteur();
		include("vues/v_listeVisiteur.php");
		break;	
	}
	
	case 'voirFiche':{
		$user = $_REQUEST['lstVisiteur'];
		$mois = $_REQUEST['mois'];
		$annee = $_REQUEST['annee'];
		$dateValid = $annee . $mois;
		$listeUtilisateur = $pdo->getNomPrenomIdVisiteur();
		include("vues/v_listeVisiteur.php");
		include ("vues/v_validFrais.php");
		break;
	}
	
	
}


?>
</center>