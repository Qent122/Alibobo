<h1>Inscription</h1>

<?php

debug($_POST);

if (isset($_POST['frmInscription'])) {
    $nom = isset($_POST['nom']) ? htmlentities(trim($_POST['nom'])) : "";
    $prenom =  isset($_POST['prenom']) ? htmlentities(trim($_POST['prenom'])) : "";
    $email = isset($_POST['email']) ? htmlentities(trim($_POST['email'])) : "";
    $mdp1 = isset($_POST['mdp1']) ? htmlentities(trim($_POST['mdp1'])) : "";
    $mdp2 =  isset($_POST['mdp2']) ? htmlentities(trim($_POST['mdp2'])) : "";

    $erreur = [];

    if (mb_strlen($nom) === 0)
        array_push($erreur, "Veuillez saisir votre nom.");

    if (mb_strlen($prenom) === 0)
        array_push($erreur, "Veuillez saisir votre prenom.");

    if (mb_strlen($email) === 0)
        array_push($erreur, "Veuillez saisir votre email.");

    elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        array_push($erreur, "Veuillez saisir une adresse mail conforme.");
    }
    if (mb_strlen($mdp1) === 0 || mb_strlen($mdp2) === 0)
        array_push($erreur, "Veuillez saisir votre mots de passe.");

    elseif ($mdp1 !== $mdp2)
        array_push($erreur, "Vos mots de passe ne sont pas identiques.");




    if (count($erreur) > 0) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreur); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreur[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";

        echo $messageErreur;

        require_once './includes/frmInscription.php';
    } else {
        $mdp1 = sha1($mdp1);
        $requeteInscription = "INSERT INTO t_utilisateurs(id_utilisateur,nom,prenom.email,mdp)VALUES(NULL, '$nom', '$prenom','$email','$mdp1')";
    }
} else {
    $nom = $prenom = $email = "";
    require_once './includes/frmInscription.php';
}
