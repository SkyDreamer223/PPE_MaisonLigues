<main>
    <section class="section2">
        <a href="index.php">Voir la liste des Utilisateurs&gt;</a>
        <form class="form" method="post">
            <label for="nom">Nom :</label>
            <input type="text" name='nom' id='nom' value="<?=$client->nom?>">
            <label for="prenom">Prenom :</label>
            <input type="text" name='prenom' id='prenom' value="<?=$client->prenom?>">
            <label for="age">Age :</label>
            <input type="text" name='age' id='age'  value="<?=$client->age?>">
            <label for="email">Adresse mail :</label>
            <input type="text" name='email' id='email' value="<?=$client->email?>">
            <button type="submit" name="button" value="update">Mettre à jour  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
            <button type="submit" name="button" value="delete">Suprimmer  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
        </form>
    </section>
</main>