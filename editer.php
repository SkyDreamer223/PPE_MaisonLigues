<?php

    require_once __DIR__.'/src/Client.php';
    require_once __DIR__.'/src/Database.php';

    $client = Client::getClient('id_client = '.$_GET['id']);

    require_once __DIR__.'/include/header.inc.php';
    require_once __DIR__.'/include/edition.inc.php';
    require_once __DIR__.'/include/footer.inc.php';