<?php

    $id = $_GET['id'];
    $req = $db->prepare(" SELECT * FROM philosophes WHERE id = '$id' ");
    $req->execute();
    $philosophe = $req->fetch();


?>
