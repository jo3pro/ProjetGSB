<div id="contenu">
      <h2>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></h2>
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
      <div class="corpsForm">
         
          <fieldset>
            <legend>Eléments forfaitisés
            </legend>
			<?php
      
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
          $quantite = $unFrais['quantite'];
          $montantUni = $unFrais['montantUnitaire'];
          $montantTotal = $quantite*$montantUni;
			?>
					<p>
						<label for="idFrais"><?php echo $libelle ?></label>
						<input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
            <input type="text" id="idFrais2" name="montant" size="10" maxlength="5" value="<?php echo $montantUni?>" disabled>
            <input type="text" id="idFrais3" name="total" size="10" maxlength="5" value="<?php echo $montantTotal?>" disabled>
			
          </p>

         
			<?php
				}
			?>
			  
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
  