<?php
include("includes/database.php");
// Afficher les résultats de recherche provenant du formulaire de l'index
if(isset($_GET['search'])){

  $search = $_GET['search'];

  $query = $db->query("SELECT * FROM philosophes WHERE nom LIKE '%$search%'");
  ?>




<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Résultat(s) Recherche</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  </head>
  <body>
 

    <main class="main_recherche">
      <?php
       while ($donnees = $query->fetch()){ ?>
         <article class="recherche_cont">

           <section class="recherche_nom">
           <h2> <?php echo $donnees['nom']; ?> </h2>
           </section>

           <section class="recherche_desc">
           <p> <?php echo substr($donnees['description'], 0, 200) . "... <br>" ; ?>
           <?php echo "<a href='element.php?id=". $donnees['id'] ."'> Lien vers l'article </a>" ."<br>"; ?> </p>
           </section>
         
          </article>
      <?php
    }
  }else{
    header('Location:index.php');
  } ?>

    </main>

   

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="js/autocompletion.js" charset="utf-8"></script>
</html>