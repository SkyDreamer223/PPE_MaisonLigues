<?php

    require_once __DIR__.'/src/Client.php';
    require_once __DIR__.'/src/Database.php';

    $clients = Client::getClients();
    

    require_once __DIR__.'/include/header.inc.php';
    require_once __DIR__.'/include/list.inc.php';
    require_once __DIR__.'/include/footer.inc.php';