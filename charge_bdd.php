<?php
include("includes/database.php");

// Requête comparant le term avec les données de la bdd
$term = $_GET["term"];

try
{

  $query = $db->query("SELECT nom FROM philosophes WHERE nom LIKE '%$term%' LIMIT 8");
  $tableau = $query->fetchAll(PDO::FETCH_COLUMN, 0);

  echo json_encode($tableau);

}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>