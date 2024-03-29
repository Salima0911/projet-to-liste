<?php
require_once(__DIR__ . '/../Models/User.php');
require_once(__DIR__ . '/../../config/function.php');
//j'instancie  un tilisateur 
$user = new User;

// on verifie que le formulaire a ete envoyé
if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])) {
    // on met les informations du formulaire dans des variable
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ----------------------------///

    // verification de la validité de l'email puis de la presence de l'email en bdd
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid Email";
        require_once(__DIR__ . '/../Views/security/register.view.php');
        exit;
    }

    // // je recupere mon utilisateur en base de donnee et je les met dans la variable user
    // $userQuery = "SELECT * FROM user WHERE email = :email";
    // $userStatement = $mysqlClient->prepare($userQuery);
    // $userStatement->bindParam(':email', $email);
    // $userStatement->execute();
    // // quand l'element est unique on utilise fetch et non fetchAll
    // $user = $userStatement->fetch();

    /* tout ca  on va le mettre  dans  le User.php*/

    // -----------------------------//
    $user->setEmail(htmlspecialchars($email));

    if (!$user->checkUserExists()) {
        $passwordValid = preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password);

        if ($passwordValid) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $user->setPassword($passwordHash);
            $user->setPseudo(htmlspecialchars($pseudo));
            //insert user 
            $user->saveUser();
            redirectToRoute('/');
        } else {
            $error = "
            - at least 8 characters <br>
            - at least one character in uppercase <br>
            - at lest one character in lowercase<br>
            - at least one digit<br>
            - at least one special character<br>
            ";
        }
    } else {
        $error = "Email existant.";
    }
}
require_once(__DIR__ . '/../Views/security/register.view.php');
