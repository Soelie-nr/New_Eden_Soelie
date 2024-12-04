<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Soélie.Nicolas--Robert">
    <link href="../css/Main.css" rel="stylesheet">
    <link rel="icon" type="ico" href="../icones/favicon.ico">
    <title>La conquête du New Eden</title>
  </head>

<!-- Formalité Fin -->

<!-- Body début -->
<body>
    <!-- Header début -->
    <header>

      <!-- contenant des bouton début  -->
      <div class="buttonheader">
        
      <!-- Bouton Retour utilisateur -->
      <a href="../html/Retour_Utilisateur.html" class="button button_style">
        <div class="button__wrapper">
            <span class="button__text">Retour utilisateur</span>
        </div>
      </a>
            
      <!-- Bouton New Eden -->
        <a href="../Index.html" class="button button_style">
         <div class="button__wrapper">
           <span class="button__text">
             <img src="../images/Logo.svg" alt="Logo d'Eve Online" class="img-limited">
            </span>
          </div>
        </a>

      
      <!-- Bouton Univers associé -->
      <a href="html/univers_associer.html" class="button button_style">
        <div class="button__wrapper">
            <span class="button__text">Univers associé</span>
        </div>
      </a>
      </div>
      <!--Contenant des boutons fin -->
  </header>
    <!-- Header end -->
     <!---Main Début-->
  <main>
    <section class="formulaire_rendu">
        <h2> Voici vos information : </h2>
        <aside class="aside_formulaire">
        <?php 
        echo"Votre prénom : ".htmlspecialchars($_POST['Prénom'])."<br>";
        echo"Votre nom : ".htmlspecialchars($_POST['Nom']);
        ?> 
        </aside>
        <h2> Voici votre e-mail et commentaire</h2>
        <p><em>"l'email ne sera visible par aucun utilisateur"</em></p>
        <?php
         echo htmlspecialchars($_POST['Adresse']);
        ?>
        <p>Votre comentaire : </p>
        <?php 
        $Avis = htmlspecialchars($_POST['Avis']);
        
        if (empty($Avis)){ echo "<h4>Aucun avis donné</h4>";}
        else {echo $Avis;}

        ?> 
</section>
</main>
  <!-- Main fin  -->
  <!-- Footer début -->
   <footer>
    <section class="elementfooter">
      <a href="https://www.eveonline.com/fr" target="_blank"> <img src="../images/Jeux.png" alt="Site officiel du jeu"> </a>
      <a href="https://www.youtube.com/@eveonline" target="_blank"> <img src="../images/Youtube.png" alt="Youtube"> </a>
      <a href="https://www.instagram.com/eveonline/" target="_blank"> <img src="../images/Instagram.png" alt="Instagram"></a>
      <a href="https://www.discord.gg/eveonline" target="_blank"> <img src="../images/Discord.png" alt="Discord"> </a>
   </footer>
    <!-- Body Fin -->
  </body>