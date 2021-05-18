<?php

    require_once __DIR__.'/src/Client.php';
    require_once __DIR__.'/src/Database.php';

    $client = Client::getClient('id_client = '.$_GET['id']);

    require_once __DIR__.'/include/header.inc.php';
    require_once __DIR__.'/include/edition.inc.php';

    if(isset($_POST['button'])){
        if($_POST['button']=='update'){
            $client->nom = $_POST['nom'] ;
            $client->prenom = $_POST['prenom'];
            $client->age = $_POST['age'];
            $client->email = $_POST['email'];

            $client->updateClient();
            header('location: index.php?status=update');
        }
        else if($_POST['button']=='delete'){
            $client->deleteClient();
            header('location: index.php?status=delete');
        }
            
        
    }
    require_once __DIR__.'/include/footer.inc.php';