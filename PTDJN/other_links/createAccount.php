<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<style>

body{
    background-color: #f4f5ef;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}

.signup-box{
    
    width: 360px;
    height: 680px;
    margin: auto;
    background-color:#ffdc5c;
    border-radius: 3px;
}

h1{
    text-align: center;
    padding-top: 15px;
}

h4{
    text-align: center;
}

form{
    width: 300px;
    margin-left: 20px;

}

form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;
}

form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid black;
    border-radius: 2px;
    outline: none;
}

input[type="submit"]{
   width: 320px;
   height: 50px;
   font-size: 18px;
   margin-top: 40px;
   border: none;
   background-color: black;
   color: #ffdc5c;
}

.recti{
    margin-top: 10%;
}

input[type="submit"]:hover{
    background: brown;
}

input[type="submit"]:hover{
    color: #f4f5ef;
}

.row{
    transform:translate(300%,-100%);
    position: absolute;
   
}



</style>

<body>
    <div class="recti">

        <div class="signup-box">
            <h1>Inscription</h1>
            <h4>c'est gratuit et cela ne prend qu'une minute</h4>
            <form action="" method="post" >
                
                <label for="">Nom</label>
                <input type="text" name="nom" placeholder="Votre Nom" require>
                
                <label for="">Prenom</label>
            <input type="text" name="prenom" placeholder="Votre Prenom" require>
            
            <label for="">Email</label>
            <input type="email" name="mail" placeholder="Votre Email" require>
            
            <label for="">Mot de passe</label>
            <input type="password" name="password" placeholder="Votre mot de passe" require>
            
            <label for="">Confirmez le mot de passe</label>
            <input type="password" name="confirm_pass" placeholder="confirmez le mot de passe" require>
            
            <div class="centerbutton">
            <input type="submit" value="Envoyer">
        </form>

        
        
    </div>
    <div class="row " >
            <div class="col-md-10 col-0"></div>
            <div class="col-md-2 col-12">
                <a href="../index.php" class="lua btn btn-dark btn-lg active ">
                    <p class="text-warning" id="lesAvis">Retour</p>
                </a>
            </div>
</div>

<?php


require('config.php');
if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['mail'], $_REQUEST['password'])){
    
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $nom = stripslashes($_REQUEST['nom']);
    $nom = mysqli_real_escape_string($conn, $nom); 
    
    // récupérer le prenom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $prenom = stripslashes($_REQUEST['prenom']);
    $prenom = mysqli_real_escape_string($conn, $prenom); 
    
    // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
    $mail = stripslashes($_REQUEST['mail']);
    $mail = mysqli_real_escape_string($conn, $mail);
    
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    
    //requéte SQL + mot de passe crypté
    $query = "INSERT into `compte_ptdjn` (nom, prenom, email, pass)
              VALUES ('$nom','$prenom', '$mail', '".hash('sha256', $password)."')";
    
    // Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    header("Location: ../index.php");
}
	

?>
    
</body>
</html>