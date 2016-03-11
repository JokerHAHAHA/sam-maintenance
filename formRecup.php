<?php


	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$poste = $_POST['poste'];
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
	$destinataire = 'liondejude@gmail.com';
	$headers = "From: \"$nom $prenom\"<$mail>\n";
	$headers .= "Reply-To: $mail\n";
	$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
	if(mail($destinataire,$sujet,$devis,$headers))
	{
	        echo "L'email a bien été envoyé.";
	}
	else
	{
	        echo "Une erreur c'est produite lors de l'envois de l'email.";
	}

	echo $poste;
?>