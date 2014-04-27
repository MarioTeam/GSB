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
		$listeUtilisateur = $pdo->getNomPrenomIdVisiteur();
                include("vues/v_listeVisiteur.php");
            
                $_SESSION['idVisiteur_C'] = $_REQUEST['lstVisiteur'];
		$_SESSION['mois'] = $_REQUEST['mois'];
		$_SESSION['annee'] = $_REQUEST['annee'];
		$dateValid = $_SESSION['annee'] . $_SESSION['mois'];
                $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($_SESSION['idVisiteur_C'],$dateValid);
		
        
                $lesFraisForfait = $pdo->getLesFraisForfait($_SESSION['idVisiteur_C'],$dateValid);
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($_SESSION['idVisiteur_C'],$dateValid);
		$nbJustificatifs = $pdo->getNbjustificatifs($_SESSION['idVisiteur_C'],$dateValid);
		
                $lesEtats = $pdo->getIdEtat($_SESSION['idVisiteur_C'],$dateValid);
                $montantValide = $lesInfosFicheFrais['montantValide'];
               
		include ("vues/v_validFrais.php");
		break;
	}
	
        case 'validation':{
            
                include ("vues/v_redirect.php");
                
                $dateValid = $_SESSION['annee'] . $_SESSION['mois'];
                $situation = $_REQUEST['situ'];
                $pdo->majIdEtat($_SESSION['idVisiteur_C'],$situation,$dateValid);
        }
}

?>
</center>
