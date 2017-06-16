<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
		    <link rel="stylesheet" href="assets/css/menuAccueil.css">
    <title>questionnaire candidat</title>
	</head>
	<body>
		<?php

       include("includes/header.php");
      ?>

		<h1>Dossier individuel du stagiaire</h1>
		<p>
			Répondez aux questions que vous souhaitez pré-remplir, puis cliquez sur "Envoyer".
		</p>
		<form action="traitement_formulaire.php" method="post" name="questionnaire">
			<h2>Partie à remplir par l'organisme de formation Simplon.co</h2>
			<p>
				Information collective du:
			</p>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id=""/>
			<p>
				Reçu par:
			</p>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id=""/>
			<p>
				Reçu le:
			</p>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id=""/>
			<p>
				Date de début de parcours:
			</p>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id=""/>
			<p>
				Date de fin de parcours:
			</p>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id=""/>
		</form>

		<form action="traitement_candidat.php" method="post" name="questionnaire">
			<h2>Partie à remplir par le candidat -Etat Civil</h2>
			<p>
				Description (facultative)
			</p>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
				Question:
			</h3>
			<input type="checkbox" name="choix1" value="1">
			Monsieur
			<input type="checkbox" name="choix2" value="2">
			Madame
			<input type="checkbox" name="choix3" value="3">
			Mademoiselle
			<h3>
				Nom:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Prénom:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Nom de jeune fille:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Date de naissance:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>
			<h3>
				Age
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Lieu de naissance
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Pays de naissance:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Nationalité
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Date d'entrée en France:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>
			<h3>
				Question:
			</h3>
			<input type="checkbox" name="choix1" value="1">
			Marié(e)
			<input type="checkbox" name="choix2" value="2">
			Célibataire
			<input type="checkbox" name="choix3" value="3">
			Divorcé(e)
			<input type="checkbox" name="choix4" value="4">
			Autre
			<h3>
				Nombre d'enfants:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Age de(s) l'enfant(s):
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Lieu d'hébergement:
			</h3>
			<input type="checkbox" name="choix1" value="1">
			Famille
			<input type="checkbox" name="choix2" value="2">
			Amis
			<input type="checkbox" name="choix3" value="3">
			Foyer
			<input type="checkbox" name="choix4" value="4">
			Autre
			<input type="checkbox" name="choix5" value="5">
			Logement indépendant
			<h3>
				N° personnel CPAM:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				N° CMU:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Date de fin de validité du titre de séjour ou de la carte d'identité:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>
			<h3>
				Adresse:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Code postal:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Ville:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Quartier:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Téléphone fixe:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Portable:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Email
			</h3>
			<label for="">Votre Réponse</label>
			<input type="email" name="" id="app"/>
			<h3>
				Personne à prévenir en cas d'urgence
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Nom Prénom:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Tél:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>


		<h2>Suivi</h2>

			<h3>
				Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Dispositif de suivi
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Mission locale
			<input type="checkbox" name="choix2" value="2">
			Plie
			<input type="checkbox" name="choix3" value="3">
			Civis
			<input type="checkbox" name="choix4" value="4">
			MFR
			<input type="checkbox" name="choix5" value="5">
			Pôle emploi
			<input type="checkbox" name="choix5" value="6">
			Autre

			<h3>
			Vous êtes envoyé par
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			CIO
			<input type="checkbox" name="choix2" value="2">
			Mission locale
			<input type="checkbox" name="choix3" value="3">
			Educateur
			<input type="checkbox" name="choix4" value="4">
			Autre (Presse,TV)
			<input type="checkbox" name="choix5" value="5">
			Ancien élève
			<input type="checkbox" name="choix5" value="6">
			Autre
			<input type="checkbox" name="choix5" value="7">
			Candidature spontanée

			<h2>Quelle mission locale?</h2>
			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Haute Garonne
			<input type="checkbox" name="choix2" value="2">
			Toulouse
			<input type="checkbox" name="choix3" value="3">
			Autre
			<input type="checkbox" name="choix4" value="4">

			<h2>
			Prescripteur
			</h2>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Nom Prénom:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
				Tél:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h2>
			Activité précédent la candidature:
			</h2>
			<h3>Scolarité</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Non scolarisé
			<input type="checkbox" name="choix2" value="2">
			Scolarisé en France
			<input type="checkbox" name="choix3" value="3">
			Scolarisé à l'étranger

			<h3>
			Langue maternelle
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
			Dernière classe fréquenté
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>
			<h3>
			Dernier établissement fréquenté:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Date de sortie du système scolaire:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h3>
			Motif
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Avez vous obtenu le diplôme?
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h2>
			Diplôme obtenu:
			</h2>
			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h2>
			Avez vous présenté un examen?
			</h2>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h2>
			Examen présenté:
			</h2>
			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h2>
			Vos 2 dernières expériences professionnelles:
			</h2>
			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Dernière expérience professionnelle:
			</h3>
			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Nom et adresse de l'entreprise:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Type de contrat:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Durée du contrat:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Poste occupé:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Avant-dernière expérience professionnelle:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Nom et adresse de l'entreprise:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Type de contrat:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Durée du contrat:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Poste occupé:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h2>
			Vos 2 dernières formations professionnelles rémunérées:
			</h2>

			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Derniere formation professionnelle rémunérée:
			</h3>

			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Intitulé de la formation:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Date de début:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h3>
			Date de fin:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h3>
			Coordonnées du centre de formation:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Avant-dernière formation professionnelle rémunérée:
			</h3>

			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Intitulé de la formation:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Date de début:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h3>
			Date de fin:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h3>
			Coordonnées du centre de formation:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h2>
			Avez vous un ou plusieurs projets professionnels définis?
			</h2>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h2>
			Projet(s) professionnel(s)
			</h2>

			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h2>
			Situation à l'entrée de la formation :
			</h2>

			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Inscrit(e) à Pôle emploi :
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h3>
			N° Identifiant:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Date de 1ère inscription:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h3>
			Code secret:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Date dernière inscription:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h3>Raison</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Fin de stage
			<input type="checkbox" name="choix2" value="2">
			Licenciement
			<input type="checkbox" name="choix3" value="3">
			Radiation

			<h3>
			Durée globale d'inscription:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>
			Allocataire Pôle emploi :
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h2>
			Depuis quand êtes-vous allocataire Pôle emploi?:
			</h2>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h2>
			Situation à l'entrée de la formation:
			</h2>

			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>Bénéficiaire du RSA ou ayant droit:</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h3>
			N° allocataire CAF:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

			<h3>Avez-vous une reconnaissance RQTH?</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h3>Avez-vous une reconnaissance RQTH?</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h3>Moyen de locomotion:</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Transports en commun
			<input type="checkbox" name="choix2" value="2">
			Voiture
			<input type="checkbox" name="choix3" value="3">
			Autre...

			<h3>Permis de conduire:</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non
			<input type="checkbox" name="choix3" value="3">
			En cours d'acquisition

			<h3>Carte de gratuité des transports:</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>
			<input type="checkbox" name="choix1" value="1">
			Oui
			<input type="checkbox" name="choix2" value="2">
			Non

			<h2>Carte de gratuité des transports:</h2>

			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Date de fin de validité:
			</h3>
			<label for="">Mois,jour,année</label>
			<input type="date" name="" id="app"/>

			<h2>Loisirs:</h2>

			<h3>
			Description (facultative)
			</h3>
			<label for=""></label>
			<input type="text" name="" id="app"/>

			<h3>
			Quels sont vos loisirs préférés? Expliquez pourquoi:
			</h3>
			<label for="">Votre Réponse</label>
			<input type="text" name="" id="app"/>

	</form>


			<div class="footer">
    <?php
       include("includes/footer.php");
      ?>
</div>
		</body>
	</html>
