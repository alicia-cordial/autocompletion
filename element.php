<!DOCTYPE html>
<html lang="fr">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Element</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
  </head>
</head>
<body>
   

    <main>
        <?php
            include 'includes/database.php';
            include 'includes/get_infos.php';
        ?>
        <section id="element_philosophe">
            <h2> <?php echo $philosophe['nom']; ?> </h2>
            <p> <?php echo $philosophe['description']; ?> </p>
        </section>
    </main>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="js/autocompletion.js" charset="utf-8"></script>
<script src="js/search.js"></script>
</html>