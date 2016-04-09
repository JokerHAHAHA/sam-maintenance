<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <!--Import bootstrap.css-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>

    <link rel="stylesheet" href="style.css" />

    <link rel="icon" type="image/png" href="img/logo.png" />
    <title>SAM | Maintenance Industrielle Broyeur| Rhone Alpes | Albertville</title>
</head>


<body>

    <?php include("header.php"); ?>

    <img class="large" src="img/concasseur.png" alt="image d'un concassseur en savoie" />

    <form name="formulaire" method="post" action="formRecup.php">
        <h4>DEMANDE DE DEVIS</h4>
        <div id="contnom">
            <label for="nom">Nom</label>
            <input  placeholder="Votre nom" type="text" name="nom" id="nom" class="input">
        </div>

        <div id="contprenom">
            <label for="prenom">Prénom</label>
            <input placeholder="Votre prénom" type="text" name="prenom" id="prenom" class="input">
        </div>

        <div id="contsociete">
            <label for="societe">Société</label>
            <input placeholder="Votre entreprise" type="text" name="societe" id="societe" class="input">
        </div>

        <div id="contposte">
            <label for="poste">Poste</label>
            <input placeholder="Votre poste" type="text" name="poste" id="poste" class="input">
        </div>

        <div id="conttel">
            <label for="tel">Téléphone</label>
            <input placeholder="Votre numéro de mobile" type="tel" name="tel" id="tel" class="input">
        </div>

        <div id="contemail">
            <label for="email">Email</label>
            <input placeholder="Votre adresse e-mail" type="email" name="mail" id="email" class="input">
        </div>
        <div id="secteur">
            <h4>Secteur concerné</h4>

            <select name="secteur">
                <option value="Broyeurs_pendulaire">Broyeurs pendulaires</option>
                <option value="Broyeurs_dechets">Broyeurs déchets</option>
                <option value="Concasseurs">Concasseurs</option>
                <option value="Broyeurs_bois">Broyeurs bois</option>
                <option value="Autre">Autre</option>
            </select>
        </div>

        <div id="contmessage">

            <div id="sujet">
                <label for="sujet">Sujet :</label>
                <input placeholder="Titre de votre demande" name="sujet"></input>
            </div>

            <div id="contmessage">
                <!-- <label for="message">Demande détaillée :</label> -->
                <textarea placeholder="Expliquez votre demande ici" name="message" id="message"></textarea>
            </div>
        </div>

        <input id="envoyer" type="submit" value="Envoyer la demande">
    </form>


    <?php include("footer.php"); ?>

</body>
















