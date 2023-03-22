<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponse</title>
</head>

<body>
    
<?php
       $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!isset($_POST['user_name']) || trim($_POST['user_name']) === '') 
            $errors[] = 'Le nom est obligatoire';
        if(!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) == '')
            $errors[] = 'Le prénom est obligatoire';
        if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) || trim($_POST['user_email']) == '')
            $errors[] = 'L\'adresse mail est obligatoire';
        if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) == '')
            $errors[] = 'Un numéro de téléphone est requis';
        if(!isset($_POST['user_about']) || trim($_POST['user_about']) == '')
            $errors[] = 'Merci de sélectionner un sujet';
        if (!isset($_POST['user_message']) || trim($_POST['user_message']) == '')
            $errors[] = 'Merci d\'écrire votre message';
        

        if (empty($errors)) {
            echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . 
            $_POST['user_about'] . '. <br>' . 'Un de nos conseillers vous contactera soit à l\'adresse : ' . $_POST['user_email'] . 
            " ou par téléphone au : " . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande : <br>' . 
            $_POST['user_message'];
        }
    }
        
?>
</body>

</html>
