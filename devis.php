<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />


        <link rel="stylesheet" href="style.css" />

        <link rel="icon" type="image/png" href="img/logo.png" />
        <title>SAM | Maintenance Industrielle | Rhone Alpes | Albertville</title>
    </head>


    <body>
        <img src="img/concasseur.png" alt="image d'un concassseur en savoie" />

        <?php include("header.php"); ?>

        <form name="form1" method="post" action="#">
            <div id="contnom">
                <label for="nom">Nom</label>
                <input  placeholder="Votre nom" type="text" id="nom" class="input">
            </div>

            <div id="contprenom">
                <label for="prenom">Prénom</label>
                <input placeholder="Votre prénom" id="prenom" type="text" class="input">
            </div>
            <div id="contposte">
                <label for="poste">Poste</label>
                <input placeholder="Votre poste" id="poste" type="text" class="input">
            </div>

            <div id="conttel">
                <label for="tel">Téléphone</label>
                <input placeholder="Votre numéro de télephone portable" id="tel" type="tel" class="input">
            </div>

            <div id="contemail">
                <label for="email">Email</label>
                <input placeholder="Votre adresse e-mail" id="email" type="email" class="input">
            </div>

            <div id="sousformulaire">
                <div id="secteur">
                    <h4>Secteur concerné</h4>

                    <div id="contpendulaire">
                        <label for="pendulaire">Les broyeurs pendulaires</label>
                        <input type="radio" name="secteur" value="pendulaire" id="pendulaire" checked>
                    </div>


                    <div id="contdechets">
                        <label for="dechets">Les broyeurs à déchets</label>
                        <input type="radio" name="secteur" value="dechets" >
                    </div>

                    <div id="contconcasseur">
                        <label for="concasseur">Les concasseurs</label>
                        <input type="radio" name="secteur" value="concasseur" > 
                    </div>

                    <div id="contbois">
                        <label for="bois">Les broyeurs à bois</label>
                        <input type="radio" name="secteur" value="bois" >
                    </div>

                    <div id="contautre">
                        <label for="autre">Autre</label>
                        <input type="radio" name="secteur" value="autre" >
                    </div>
                </div>

                <div id="contmessage">
                    <label for="message">Demande détaillée :</label>
                    <textarea id="message"></textarea>
                </div>

                <input id="envoyer" type="submit" value="Envoyer">
            </div>
        </form>


        <?php include("footer.php"); ?>
















