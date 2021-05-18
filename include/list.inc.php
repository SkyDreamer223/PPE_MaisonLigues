<?php
    $response = '';
    foreach($clients as $client){
        $response .='<tr>
                        <td><a href="editer.php?id='.$client->id_client.'"><span class="pen"></span> Modifier ou <span class="x"></span> Supprimer</a></td>
                        <td>'.$client->nom.'</td>
                        <td>'.$client->prenom.'</td>
                        <td>'.$client->age.'</td>
                        <td>'.$client->email.'</td>
                    </tr>';
    }

    if(isset($_GET['status'])){
        if($_GET['status']=='update'){
            print '<h2 class="update">Client mis à jour</h2>';
        }
        if($_GET['status']=='delete'){
            print '<h2 class="delete">Client supprimé</h2>';
        }
    }
    
?>
<main>
    
    <section class='list-table'>
        <table>
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Age</th>
                    <th>Adresse Mail</th>
                </tr>
            </thead>
            <tbody>
                <?=$response?>
            </tbody>
        </table>
        <a class="button" href="inscription.php">+ Ajouter un client</a>
    </section>
</main>