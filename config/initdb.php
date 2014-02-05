<?php
include('db.php');

$mysqli=new mysqli_connect($host, $usr, $pwd, $db);
if($mysqli->connect_errno){
	echo "Echec lors de la connexion à MySQL : " . $mysqli->connect_error;	
}

//Création des tables

/* TABLE : Utilisateur 
 * >username
 * >email
 * >password
 * >salt
 * >pseudonyme
 * >creation
 */

$req="
	CREATE TABLE utilisateur(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(255) NOT NULL,
		email VARCHAR(255),
		password VARCHAR (255) NOT NULL,
		salt VARCHAR (255),
		pseudonyme VARCHAR(255),
		date_creation DATETIME
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Partie */

$req="
	CREATE TABLE partie(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		maitre_jeu INT(10),
		theme VARCHAR(255) NOT NULL,
		description BLOB,
		nb_place INT(2) NOT NULL DEFAULT 0,
		niveau_depart VARCHAR(10) NOT NULL DEFAULT 150, 
		date_creation DATETIME NOT NULL,
		date_modification DATETIME NOT NULL,
		CONSTRAINT fk_partie_joueur FOREIGN KEY (maitre_jeu) REFERENCES utilisateur(id)
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Personnage */

$req="
	CREATE TABLE personnage(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		id_utilisateur INT(10),
		date_creation DATETIME,
		date_modification DATETIME,
		date_suppression DATETIME,
		nom VARCHAR(255),
		origine VARCHAR(255),
		sexe INT(1),
		age INT(10),
		taille_val INT(10),
		taille INT(10),
		poids_val INT(10),
		poids INT(10),
		beaute INT(2) DEFAULT 0,
		tenue INT(2) DEFAULT 0,
		foi_val INT(10),
		foi VARCHAR(255),
		memoire INT(10) DEFAULT 5,
		diplomatie INT(10) DEFAULT 5,
		intellect INT(10) DEFAULT 5,
		volonte INT(10) DEFAULT 5,
		charisme INT(10) DEFAULT 5,
		perception INT(10) DEFAULT 5,
		adresse INT(10) DEFAULT 5,
		force INT(10) DEFAULT 5,
		endurance INT(10) DEFAULT 5,
		rapidite INT(10) DEFAULT 5,
		niveau_depart INT(10),
		nb_caracteristique INT(10) DEFAULT 0,
		nb_competence INT(10) DEFAULT 0,
		nb_avantage INT(10) DEFAULT 0,
		nb_experience INT(10) DEFAULT 0,
		nb_faveur INT(10) DEFAULT 0,
		CONSTRAINT fk_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id)
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Partie-personnage */

$req="
	CREATE TABLE partie-personnage(
		id_partie INT(10),
		id_personnage INT(10),
		PRIMARY KEY(id_partie,id_personnage),
		CONSTRAINT fk_partie FOREIGN KEY (id_partie) REFERENCES partie(id),
		CONSTRAINT fk_personnage FOREIGN KEY (id_personnage) REFERENCES personnage(id)
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Categorie-trait */

$req="
	CREATE TABLE categorie-trait(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		label VARCHAR(255),
		description BLOB
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Trait */

$req="
	CREATE TABLE trait(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		label VARCHAR(255),
		id_category INT(10),
		CONSTRAINT fk_categorie FOREIGN KEY (id_categorie) REFERENCES categorie-trait(id)
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Personnage-trait */

$req="
	CREATE TABLE personnage-trait(
		id_personnage INT(10),
		id_trait INT(10),
		valeur INT(10),
		PRIMARY KEY(id_personnage,id_trait),
		CONSTRAINT fk_personnage FOREIGN KEY (id_personnage) REFERENCES personnage(id),
		CONSTRAINT fk_trait FOREIGN KEY (id_trait) REFERENCES trait(id)
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Competence */

$req="
	CREATE TABLE competence(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		label VARCHAR(255),
		description BLOB
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Personnage-competence */
$req="
	CREATE TABLE personnage-competence(
		id_personnage INT(10),
		id_competence INT(10),
		valeur INT(10),
		PRIMARY KEY(id_personnage,id_competence),
		CONSTRAINT fk_personnage FOREIGN KEY (id_personnage) REFERENCES personnage(id),
		CONSTRAINT fk_competence FOREIGN KEY (id_competence) REFERENCES competence(id)
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Specialisation */

$req="
	CREATE TABLE specialisation(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		id_competence INT(10),
		label VARCHAR(255),
		description BLOB,
		CONSTRAINT fk_competence FOREIGN KEY (id_competence) REFERENCES competence(id)
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Personnage-specialisation*/
$req="
	CREATE TABLE personnage-specialisation(
		id_personnage INT(10),
		id_specialisation INT(10),
		PRIMARY KEY(id_personnage,id_specialisation),
		CONSTRAINT fk_personnage FOREIGN KEY (id_personnage) REFERENCES personnage(id),
		CONSTRAINT fk_specialisation FOREIGN KEY (id_specialisation) REFERENCES specialisation(id)
	)"; 
if(!$mysqli->query($req)){
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

/* TABLE : Avantage */

/* TABLE : Personnage-avantage */

/* TABLE : Passif*/
?>
