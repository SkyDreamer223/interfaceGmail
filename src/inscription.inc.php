<?php
    $nom;
    $prenom;
    $mail;
    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=user_inscription','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));
        
    }
    catch(Exception $e)
    {
        die("Error ".$e->getMessage);
    }
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['psw'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];


        if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) 
        {
            exit('Adresse mail invalide');
        }
        else
        {
            $mail = $_POST['mail'];
        }


        $query = $bdd->prepare( "SELECT mail FROM user_mail WHERE mail = ?" );
        $query->bindValue( 1, $mail );
        $query->execute();
        if($query->rowCount() > 0)
        {
            exit('Cet adresse mail est déjà utilisé');
        }
        else
        {
            $instruction = $bdd->prepare("INSERT INTO user_mail (nom, prenom, mail, password) VALUES (?, ?, ?, ?)");
            $instruction->execute(array($nom, $prenom, $mail, password_hash($_POST['psw'], PASSWORD_DEFAULT)));
        }
    }
    
?>

        