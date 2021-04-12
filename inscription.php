<?php
    require_once __DIR__.'./src/Client.php';

    if(isset($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['email'])){
        $client = new Client;
        $client->nom    = $_POST['nom'];
        $client->prenom = $_POST['prenom'];
        $client->age    = $_POST['age'];
        $client->email  = $_POST['email'];
        $client->insert();
        header('location: index.php');
        exit;
    }

    require_once __DIR__.'/include/header.inc.php';
    require_once __DIR__.'/include/form.inc.php';
    require_once __DIR__.'/include/footer.inc.php';
    