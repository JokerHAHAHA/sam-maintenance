<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>

    <link rel="stylesheet" href="style.css" />

    <link rel="icon" type="image/png" href="img/logo.png" />
    <title>SAM | Maintenance Industrielle | Rhone Alpes | Albertville</title>
</head>


<body>
    <img src="img/concasseur.png" alt="image d'un concassseur en savoie" />

    <header class="z-depth-4">
        <div class="onglet navbar-fixed-top">
            <img id="imgonglet" src="img/onglet.png" alt="onglet contact de la société sam" />
            <a href="mailto: contact@sam-maintenance.com"><p id="adressemail">contact@sam-maintenance.com</p></a>
            <p id="num">04 79 37 16 29</p>
        </div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <ul class="nav nav-pills">
                    <img src="img/logo.png" alt="logo de la societe sam en rhone alpes" />
                    <li role="presentation"><a href="index.php">ACCUEIL</a></li>
                    <li role="presentation"><a href="chantiers.php">CHANTIERS</a></li>
                    <li role="presentation"><a href="devis.php">DEVIS</a></li>
                    <li role="presentation"><a href="partenaires.php">PARTENAIRES</a></li>
                    <li role="presentation"><a href="affaires.php">BONNES AFFAIRES</a></li>
                    <li role="presentation"><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </nav>

        <div id="conteneur">

            <div id="pendulaire"><a href="pendulaire.php">
                <div id="grispendulaire"></div> 
                <h2 id="titrependulaire">BROYEURS PENDULAIRES</h2>
                <p  id="txtpendulaire">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus nibh quis urna commodo laoreet. Mauris sit amet hendrerit elit. Pellentesque ut ligula ornare, bibendum metus a, rutrum leo. Quisque mi ante, suscipit a egestas sit amet, condimentum vitae tellus.</p>        
            </a></div>

            <div id="dechets"><a href="dechets.php">
                <div id="grisdechets"></div> 
                <h2 id="titredechets">BROYEURS DECHETS</h2>
                <p  id="txtdechets">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus nibh quis urna commodo laoreet. Mauris sit amet hendrerit elit. Pellentesque ut ligula ornare, bibendum metus a, rutrum leo. Quisque mi ante, suscipit a egestas sit amet, condimentum vitae tellus.</p>   
            </a></div>

            <div id="concasseur"><a href="concasseur.php">
                <div id="grisconcasseur"></div> 
                <h2 id="titreconcasseur">CONCASSEURS</h2>
                <p  id="txtconcasseur">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus nibh quis urna commodo laoreet. Mauris sit amet hendrerit elit. Pellentesque ut ligula ornare, bibendum metus a, rutrum leo. Quisque mi ante, suscipit a egestas sit amet, condimentum vitae tellus.</p>   
            </a></div>

            <div id="bois"><a href="bois.php">
               <div id="grisbois"></div> 
               <h2 id="titrebois">BROYEURS BOIS</h2>
               <p  id="txtbois">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus nibh quis urna commodo laoreet. Mauris sit amet hendrerit elit. Pellentesque ut ligula ornare, bibendum metus a, rutrum leo. Quisque mi ante, suscipit a egestas sit amet, condimentum vitae tellus.</p>   
           </a></div>
       </div>
       <div id="slogan">
           <p>Broyez sans limite !</p>
       </div>
   </header>

   <section class="z-depth-4" id="valeurs">
    <p>LES FORCES DE LA SAM</p>
    <div class="z-depth-4" id="delai">
        <img src="img/delai.png" alt="icone de respect des delais" />
        <p><span>DELAI</span>Nous sommes conscients des enjeux liés à l'arret d'une machine pour votre entreprise. C'est pourquoi nous nous engageons à respecter nos délais. Nous sommes à votre service afin de valoriser au maximum votre activité.</p>
    </div>
    <div class="z-depth-4" id="experience">
        <img src="img/experience.jpg" alt="icone de grande expérience" />
        <p><span>10 ANS D'EXPERIENCE</span>La SAM est présente dans le domaine à Albertville depuis plus de 10 ans. Passionnés par le secteur métallurgique, vous pouvez compter sur la SAM pour vos travaux de <em>maintenance industrielle</em>.</p>
    </div>
    <div class="z-depth-4" id="qualite">
        <img src="img/qualite.png" alt="icone de respect de la qualité" />
        <p><span>QUALITE</span>Nous travaillons avec un objectif de qualité. Fort de notres expérience dans le domaine de la maintenance industrielle, nous choisissons des fournisseurs de qualité. Nos équipes sont formés régulièrement afin d'assurer les meilleurs practiques.</p>
    </div>
    <div class="z-depth-4" id="conseils">
        <img src="img/conseils.png" alt="icone de coneils professionnels" />
        <p><span>CONSEILS</span>L'enjeu est fort : un broyeur industriel en panne crée rapidement des manques à gagner importants et les investissements sont non négligeables.Il est crucial de faire les bon choix de maintenance, de pièces détachées et de gestion des pannes. Nous vous conseillerons dans vos prises de décision liés à vos problématiques.</p>
    </div>
</section>

<?php include("footer.php"); ?>

</body>
</html>







