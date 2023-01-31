<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <!-- BOOSTRAP LIEN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>

        *{
            padding: 0;
            margin: 0;
        }

    body{
    background-color: #f4f5ef;
    align-items: center;
    justify-content: center;
    display: flex;
}

.container{
    position: relative;
    margin-top: 100px;
    width: 450px;
    height: auto;
    background:#ffdc5c;
    border-radius: 5px;
}

.label {
    padding: 20px 130px;
    font-size: 35px;
    font-weight: bold;  
}


.login_form{
    padding: 20px 40px;
}

.login_form .form {
    font-size: 19px ; 
    color: #ffdc5c ;
    margin: 5px 0;
}

.login_form input{
    height: 40px;
    width: 350px; 
    padding: 0 5px;
    font-size: 18px;
    outline: none;
    border: 1px solid black;
}

.login_form .font2{
    margin-top: 30px;
}

.login_form button{
    margin: 45px 0 30px 0;
    height: 45px; 
    width: 350px;
    font-size: 20px; 
    color:yellow;
    outline: none;
    cursor: pointer;
    font-weight: bold;
    background: black;
    border-radius: 3px;
    border: 1px solid black;
    transition: .5s;
}

.login_form button:hover{
    background: brown;
}

.login_form button:hover{
    color: #f4f5ef;
}

.login_form #email_error,
.login_form #pass_error{
    margin-top: 5px;
    width: 345px;
    font-size: 18px;
    color: brown;
    background: rgba(255,0,0,0.1);
    text-align: center;
    padding: 5px 8px;
    border-radius: 3px;
    border: 1px solid #EF9A9A;
    display: none;
}

#error{
    color:red;
    transform:translate(0%,-230%);
    position: absolute;
    
}

.row{
    transform:translate(350%,-160%);
    position: absolute;
}

</style>
</head>
<body>
    <section id="connexionAccount">
        <div class="container">
            
                <h1 class="label">Connexion</h1>
                <form class="login_form" action="" method="post" name="form" >
                    
                    <div class="font">Email ou téléphone</div>
                    <input type="text" name="mail" autocomplete="off" require>
                    <div id="email_error">Veuillez indiquer votre adresse électronique ou votre numéro de téléphone</div>
                    
                    <div class="font font2">Mot de passe</div>
                    <input type="password" name="password" require>
                    <div id="pass_error">Veuillez remplir votre mot de passe</div>

                    <button type="submit" >Connexion</button>


                </form>


        </div>
</div>
        <div class="row " >
            <div class="col-md-10 col-0"></div>
            <div class="col-md-2 col-12">
                <a href="../index.php" class="lua btn btn-dark btn-lg active ">
                    <p class="text-warning" id="lesAvis">Retour</p>
                </a>
            </div>
       
    </section>

    <?php
    require('config.php');
    session_start();
    
    if (isset($_POST['mail'])){
        $mail = stripslashes($_REQUEST['mail']);
        $mail = mysqli_real_escape_string($conn, $mail);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM `compte_ptdjn` WHERE email='$mail' and pass='".hash('sha256', $password)."'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location:vous_etes_connecte.html");
        }else{
            echo "<p id='error'>Le nom d'utilisateur ou le mot de passe est incorrect.</p>";
        }
    }
    ?>

    <script src="../js/valid.js"></script>
     <!-- BOOSTRAP JS SCRIPT  -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>