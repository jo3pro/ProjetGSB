﻿<!-- Division pour le sommaire -->
<div id="menuGauche">
     <div id="infosUtil">

        <h2>

</h2>

      </div>
        <ul id="menuList">
        <?php
        if($_SESSION['role'] == "comptable"){
            echo '<li id="firstLiSum">
                  Comptable :<br>';
                 echo $_SESSION['prenom']."  ".$_SESSION['nom'] .
           " </li>"; ?>
         <?php 
            echo '<li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMoisPersonne" title="Valider les fiches de frais">Valider les fiches de frais</a>
           </li>';
           echo '<li class="smenu">
           <a href="index.php?uc=suiviFrais&action=selectionnerMoisPersonne" title="Suivi du paiement des fiches de frais">Suivi du paiement des fiches de frais</a>
        </li>';
           }else{
            echo '<li id="firstLiSum">
            Visiteur :<br>';
           echo $_SESSION['prenom']."  ".$_SESSION['nom'] .
         " </li>";
           echo '<li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>';
           echo '<li class="smenu">
           <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
               </li>';
           }?>
 	         <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>

    </div>
