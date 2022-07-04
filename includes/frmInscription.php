<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" id="nom" value="<?= $nom ?>" placeholder=" Siste"><br><br>
    </div>
    <div>
        <label for="prenom">Prenom :</label><br>
        <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>" placeholder=" Lara"><br><br>
    </div>
    <div>
        <label for="email">Email :</label><br>
        <input type="text" name="email" id="email" value="<?= $email ?>" placeholder="Momodu78@yahoo.com"><br><br>
    </div>
    <div>
        <label for="mdp1">Password :</label><br>
        <input type="password" name="mdp1" id="mdp1" placeholder="L*****"><br><br>
    </div>
    <div>
        <label for="mdp2">Confirm Password :</label><br>
        <input type="password" name="mdp2" id="mdp2" placeholder=" L*****"><br><br>
    </div>
    <div>
        <input type="submit" value="Envoyer">
        <input type="reset" value="Reset">
    </div>
    <input type="hidden" name="frmInscription">

</form>