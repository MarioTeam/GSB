<form action="index.php?uc=validerFrais&action=validation" method="post">		

	
	<br/><br/><br/>	
	
       
  	<table class="listeLegere">
  	   <caption>Eléments forfaitisés </caption>
           <br/>
        <tr>
         <?php
         foreach ( $lesFraisForfait as $unFrais ) 
		 {
			$libelle = $unFrais['libelle'];?>	
			<th> <?php echo $libelle?></th>
	 <?php } ?>
		</tr>
        <tr>
        <?php
          foreach (  $lesFraisForfait as $unFrais  ) 
		  {
				$quantite = $unFrais['quantite'];
                                ?>
                <td class="qteForfait"><?php echo $quantite?> </td>
                
	 <?php } ?>
                
                 <td  style="float:right;">
                    <select size="3" name="situ" style="float:right">
                        
                       <?php
					if($lesEtats['idEtat'] == "CR" || $lesEtats['idEtat'] == "CL"){ ?>
						<option selected value="CL"> Enregistré </option>
						<option value="VA"> Validé </option>
						<option value="RB"> Remboursé </option>
				<?php }
					else if($lesEtats['idEtat'] == "VA"){ ?>
						<option value="CL"> Enregistré </option>
						<option selected value="VA"> Validé </option>
						<option value="RB"> Remboursé </option>
				<?php } 
					else if($lesEtats['idEtat'] == "RB"){ ?>
					<option value="CL"> Enregistré </option>
					<option value="VA"> Validé </option>
					<option selected value="RB"> Remboursé </option>
				<?php }?>
                        
                    </select>
                    
                </td>
		</tr>
      
        
        </table>
    
    
    
    <br/><br/><br/><br/>
    
  	<table class="listeLegere">
  	   <caption>Eléments hors forfait</caption>
           
           <tr>
              <th class="date">Date</th> <th class="libelle">Libellé</th>  <th class='montant'>Montant</th>                
           </tr>
             
             
        <?php      
        
          $montantTotal = 0;
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
                        $montantTotal = $montantTotal + $montant;
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                
                  
        <?php 
          }
		?>
        </tr>
        
        <td> Montant Total Hors Forfait : </td> <td> <?php echo $montantTotal ?> </td> 
        
        <td  style="float:right;">
                    
                    <select size="3" name="situ" style="float:right">
                        
                        <?php
					if($lesEtats['idEtat'] == "CR" || $lesEtats['idEtat'] == "CL"){ ?>
						<option selected value="CL"> Enregistré </option>
						<option value="VA"> Validé </option>
						<option value="RB"> Remboursé </option>
				<?php }
					else if($lesEtats['idEtat'] == "VA"){ ?>
						<option value="CL"> Enregistré </option>
						<option selected value="VA"> Validé </option>
						<option value="RB"> Remboursé </option>
				<?php } 
					else if($lesEtats['idEtat'] == "RB"){ ?>
					<option value="CL"> Enregistré </option>
					<option value="VA"> Validé </option>
					<option selected value="RB"> Remboursé </option>
				<?php }?>
                        
                    </select>
           
                </td>
    
        </table>
    
         <br/><br/><br/>
    
        <div class="encadre">
         <p>
            <br> Montant validé : <?php echo $montantValide?>
         </p>
 
		
	<p class="titre"></p>
        <p>Nombre de justificatifs : <input value="<?php echo $nbJustificatifs ?>" style="width:25px;" /></p>
	<p class="titre" /><label class="titre">&nbsp;</label><input class="zone"type="reset" /><input class="zone"type="submit" />
        
        
     </div>
</form>
