<?php
    require_once __DIR__.'./src/Client.php';

    if(isset($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['email'])){
        $client = new Client($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['email']);
        $client->insert();
        header('location: index.php');
        exit;
    }

    require_once __DIR__.'/include/header.inc.php';
    require_once __DIR__.'/include/form.inc.php';
    require_once __DIR__.'/include/footer.inc.php';
    