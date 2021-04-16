<?php
try
{
  $db = new PDO('mysql:host=localhost; port=3308; dbname=autocompletion', 'root', '');

  $db->exec("SET CHARACTER SET utf8");

}
catch(Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}


?>