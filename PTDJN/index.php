<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PTDJN</title>
        <!-- BOOSTRAP LIEN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/ptdj.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        
    </head>
    <body>
        <!-- NAVBAR -->
        <nav>
            <div class="container-lg">
                <div class="row navbar justify-content-center fixed-top shadow-sm navbar-expand-sm">
                
                
                <div class="col-md-8">
                    <a class="navbar-brand" href="#">
                        <img src="images/Logo_PTDJ.png" alt="" class="logo_ptdj"> 
                
                    </a>
                    <a href="#lesAvis" class="btn nav_boutton ">
                        <img src="images/edit.png" alt="" class="avis_logo">
                        Avis
                </a>
                </div>
    
                
                <div class=" col-md-4">
                    <img src="images/User_Logo_PTDJ.png" alt="" class="user_logo">
                    <a class="btn nav_boutton" href="other_links/connexionAccount.php">se connecter</a>
                    
                    
                    <a class="btn nav_boutton" href="other_links/createAccount.php">Créer un compte</a>
                    
                        <button type="button" class=" btn btn-secondary btn-warning btn-lg" data-bs-toggle="dropdown">
                        <i class="fas fa-bars "></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end  dropdown-menu-warning" aria-labelledby="navbarwarningDropdownMenuLink">
                          <li><a class="dropdown-item" href="#page01">ACCUEIL</a></li>
                          <li><a class="dropdown-item" href="#page02">À PROPOS</a></li>
                          <li><a class="dropdown-item" href="#page03">SAVEUR</a></li>
                          <li><a class="dropdown-item" href="#page04">AVIS</a></li>
                          <li><a class="dropdown-item" href="#page05">CONTACTS</a></li>
                        </ul>


            </div>
        </nav>
        <!-- CONTENU DE LA PAGE01 -->
        <section id="page01">
        <div class="container-lg">
             <div class="row justify-content-center">
                <div class="col-md-6" >
                    <h5 id="vtptdj">VOTRE PETIT DEJEUNER</h6>
                </div>
                <div class="col-md-12">
                    <h1 id="unptptdj"> UN PETIT GOUT DE PARIS</h1>
                </div>
                <div class="col-md-3 m-5 " >
                    <a class="btn btn-lg" id="btncommandez" href="other_links/commandes.html">COMMANDEZ MAINTENANT
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    </a>

                    </button>
                </div>
            </div>
       </div>
    </div>
</section>
    <!-- CONTENU DE LA PAGE02 -->
    <section id="page02">
        <div class="container-lg">
       <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid croi01" src="images/P02-image01.jpg" alt="">
                </div>
                <div class="col-6 ">
                    <img class="img-fluid imgp202" src="images/P02-image02.jpg" alt="">
                </div>
            </div>
        </div>
        <div class=" parap02 col-6">
            <h5 id="gourmeth5">GOURMET & GOURMETTE</h5>
            <p id="presentation">MJYBF est né de l'amour de tout ce qui est Parisien. Notre fondateur et chef Jean Yves Curtis a passé trois années extraordinaires dans la ville de l'amour, se formant auprès des meilleurs du secteur. Il a ramené chez lui tout ce qu'il a appris - les saveurs, les sentiments, le café de style familial - pour que vous puissiez vous aussi goûter à Paris.</p>
            <a class="btn nav_boutton btn-lg" href="other_links/commandes.html">Réservez</a>
        </div>

       </div>
</section>
    <!-- CONTENU DE LA PAGE03 -->
    <section class="page03" id="page03">
    <div class="marge container-lg ml-2 mr-2 mt-5 mb-5">
        <div class="row">
            <div class="col-md-3">
                <h1 class="mt-4 mb-4" id="h101">SAVEUR DE FRANCE</h1>
                <p class="mt-2 psav ">Paris est un melting-pot, comme en témoigne notre cuisine. Prenez une bouchée et savourez la vie délicieuse !</p>
            </div>
            <div class="col-md-3 sav1" >
                <img class="img-fluid mb-4 mt-4" src="images/P03-image01.jpg" alt="">
                <h6 id="h601">DES AMUSES-GUEULES ALLÉCHANTS</h6>
            </div>
            <div class="col-md-3 sav2">
                <img class="img-fluid mb-4 mt-4" src="images/P03-image02.jpg" alt="">
                <h6 id="h602">DES PLATS SAINS</h6>
            </div>
            <div class="col-md-3 sav3">
                <img class="img-fluid mb-4 mt-4" src="images/P03-image03.jpg" alt="">
                <h6 id="h603">UNE FAIM DOUCE</h6>
            </div>
        </div>
    </div>
</section>
<!-- CONTENU DE LA PAGE04 -->
<section class="page04" id="page04">
<div class="marge container-lg ml-2 mr-2 mt-5 mb-5">
    <div class="row">
        <h1 id="h102" class="pb-5" >BONHEUR ET DOUCEUR DU MATIN</h1>
        <div class=" av1 mb-5 col-md-4" id="lesAvis">
            <h5 class="virgule">”</h5>
            <h6 class="Titre_p04 pb-2">TRANSPORTÉ À PARIS</h6>
            <p class="aviscom">Une seule bouchée et j'avais l'impression d'être de retour en France. Le chef Ingrid et son équipe se sont surpassés !</p>
            <p class="aviscom">- Teddy, Entrepreneur</p>
            <p class="etoiles">★★★★★</p>
        </div>
        <div class=" av2  mb-5 col-md-4">
            <h5 class="virgule">”</h5>
            <h6 class="Titre_p04 pb-2">CHARMANT PATISSIER</h6>
            <p class="aviscom">L'ambiance était excellente - et la nourriture encore meilleure ! Des recettes simples et bien faites, avec des ingrédients de premier choix. Nous reviendrons !</p>
            <p class="aviscom">- Dani</p>
            <p class="etoiles">★★★★★</p>
        </div>
        <div class=" av3   col-md-4" >
            <h5 class="virgule">”</h5>
            <h6 class="Titre_p04 pb-2">UNE DOUCEUR DANS LA BOUCHE</h6>
            <p class="aviscom">En mangeant ici, Paris m'a tellement manqué. Quel plaisir ! Je vais amener mes réunions de clients ici.</p>
            <p class="aviscom">- Carly, Entrepreneur</p>
            <p class="etoiles">★★★★★</p>
        </div>
        <div class="row " >
            <div class="col-md-10 col-0"></div>
            <div class="col-md-2 col-12">
                <a href="other_links/Avis.html" class="lua btn btn-dark btn-lg active ">
                    <span class="spinner-grow spinner-grow-sm" ></span>
                    <p class="text-warning" id="lesAvis">LAISSER UN AVIS</p>
                </a>
            </div>

        </div>

    </div>
</div>
</section>
<!-- CONTENU DE LA PAGE02 -->
<section id="page05">
    <div class="container-lg">
     <div class="row">
         <div class="col-6">
             
         </div>
         <div class="p05content col-6">
             <h1 class=" p05h">A BIENTÔT ^^</h1>

             <h5 class="p05h5">NUMERO</h5>
             <a class="text-black" href="tel:0590 80 22 19" target="_blank">
             <P class="p05">0590 80 22 19</P>
            </a>
             
             <h5 class="p05h5 ">EMAIL</h5>
             <a class="text-black" href="mailto:JYBF@blueLine.com" target="_blank">
             <P class="p05">MJYBF@blueLine.com</P>
            </a>

             <h5 class="p05h5">RESTAURANT</h5>
             <a class="text-black" href="https://goo.gl/maps/HfuLkNHS7CjCY1e6A" target="_blank">
             <P class="p05">8 Rue du soleil, 75001, Paris</P>
            </a>
         </div>
     </div>

    </div>
</section>
<footer class="bg-dark text-wite pt-5 pb-4">
    <div class="container-lg">
        <div class="row " >
            <div class="col">
                <p class="text-white fw-italic font-monospace text-center  "> © Conditions et assistance </p>
            </div>
        </div>

    </div>
</footer>
<!-- SCROLLREVEAL-->
<script src="https://unpkg.com/scrollreveal"></script>
  <!-- JAVASCRIPT-->
  <script src="js/ptdj.js"></script>
    <!-- BOOSTRAP JS SCRIPT  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>