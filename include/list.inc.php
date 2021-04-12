<?php
    $response = '';
    foreach($clients as $client){
        $response .='<tr>
                        <td><a href="editer.php?id='.$client->id_client.'"><span class="pen"></span>Modifier ou <span class="x"></span>Supprimer</a></td>
                        <td>'.$client->nom.'</td>
                        <td>'.$client->prenom.'</td>
                        <td>'.$client->age.'</td>
                        <td>'.$client->email.'</td>
                    </tr>';
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
        <a href="inscription.php"><button>+ Ajouter un client</button></a>
    </section>
</main>