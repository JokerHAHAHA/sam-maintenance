<?php


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$poste = $_POST['poste'];
$societe = $_POST['societe'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$secteur = $_POST['secteur'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

$devis = "

DEBUT DU DEVIS
--------------------------------------------------------------------



--------------------------------------------------------------------
PERSONNE FAISANT LA DEMANDE DE DEVIS :
--------------------------------------------------------------------

Nom : $nom

Prénom : $prenom

Je travail pour : $societe

Poste dans l'entreprise : $poste



--------------------------------------------------------------------
--------------------------------------------------------------------



----------------------------------------------------
COORDONNEES DE LA PERSONNE :
----------------------------------------------------

Téléphone : $tel 

Adresse mail : $mail



--------------------------------------------------------------------



----------------------------------
DEMANDE EXPLICITE :
----------------------------------

Secteur du devis : $secteur

Sujet du devis : $sujet

Demande : $message



--------------------------------------------------------------------
FIN DU DEVIS";

$sujet = 'Devis du '.date("d-m-Y");
$destinataire = 'giraudcarrier.d@sam-maintenance.com';
$headers = "From: \"$nom $prenom\"<$mail>\n";
$headers .= "Reply-To: $mail\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
if(mail($destinataire,$sujet,$devis,$headers))
{
	echo "<p style='color:green; font-size: 120%; font-size: 120%; font-family: arial; text-align: center;'>" . "Votre demande a bien ete prise en compte<br />" . "</p>";
	echo "<img src='img/bravo.png' style='width:25%; margin-left: 40%;'/>";
	echo "<p style='color:red; font-size: 120%; font-size: 120%; font-family: arial; text-align: center;'>" . "Nous vous répondrons dans les plus bref délais" . "</p>";
}
else
{
		echo "<p style='color:red; font-size: 120%; font-size: 120%; font-family: arial; text-align: center;'>" . "Une erreur s'est produite<br />" . "</p>";
		echo "<img src='img/attention.jpg' style='width:25%; margin-left: 40%;'/>";
		echo "<p style='color:red; font-size: 120%; font-family: arial; text-align: center;'>" . "Veuillez remplir à nouveau le formulaire de devis" . "</p>";
}

?>