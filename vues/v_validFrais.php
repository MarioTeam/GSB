<form name="formValidFrais" method="post" action="enregValidFrais.php">
				
		
	<p class="titre" />
	<center><h2>Frais au forfait </h2></center>
	<?php echo $dateValid ?>
	<table border="1">
		<tr><th>Repas midi</th><th>Nuitée </th><th>Etape</th><th>Km </th><th>Situation</th></tr>
		<tr align="center"><td width="80" ><input type="text" size="3" name="repas"/></td>
			<td width="80"><input type="text" size="3" name="nuitee"/></td> 
			<td width="80"> <input type="text" size="3" name="etape"/></td>
			<td width="80"> <input type="text" size="3" name="km" /></td>
			<td width="80"> 
				<select size="3" name="situ">
					<option value="E">Enregistré</option>
					<option value="V">Validé</option>
					<option value="R">Remboursé</option>
				</select></td>
			</tr>
	</table>
	
	<h2>Hors Forfait</h2>
	<table border="1">
		<tr><th>Date</th><th>Libellé </th><th>Montant</th><th>Situation</th></tr>
		<tr align="center"><td width="100" ><input type="text" size="12" name="hfDate1"/></td>
			<td width="220"><input type="text" size="30" name="hfLib1"/></td> 
			<td width="90"> <input type="text" size="10" name="hfMont1"/></td>
			<td width="80"> 
				<select size="3" name="hfSitu1">
					<option value="E">Enregistré</option>
					<option value="V">Validé</option>
					<option value="R">Remboursé</option>
				</select></td>
			</tr>
	</table>
		<?php echo $user ?>
	<p class="titre"></p>
	<div class="titre">Nb Justificatifs</div><input type="text" class="zone" size="4" name="hcMontant"/>		
	<p class="titre" /><label class="titre">&nbsp;</label><input class="zone"type="reset" /><input class="zone"type="submit" />
</form>
