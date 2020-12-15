<?php

	header("Location: confirmation.php");

	ini_set('display_errors', 'On');

	// récupération des variables du formulaire
	$nomUser = trim($_POST['visNom']);

	$prenomUser = trim($_POST['visPrenom']);

	$telephoneUser = trim($_POST['visTelephone']);

	$emailUser = trim($_POST['visCourrier']);

	$sexeUser = trim($_POST['visSexeM']);

	$adresseUser = $_POST['visAdresse'];

	$codepostalUser = trim($_POST['visCodePostal']);

	$villeUser = trim($_POST['visVille']);

	$datenaissanceUser = $_POST['visDateNais'];

	$sectionUser = trim($_POST['visSectionActuelle']);

	$etablissementUser = trim($_POST['visEtablissementActuel']);

	$server="localhost";
	$base ="jpo_bts_mco";
	$userdb ="root";
	$userpwd="root";
	$table = "visiteur";
	$binome = "Flavio, Ewan, Thomas";
	$section="2";

	if ($sexeUser = "H"){
		$sexeUser = 1;
	}else{
		$sexeUser = 0;
	}

	$connexion = new mysqli($server, $userdb, $userpwd, $base);

	if ($connexion->connect_error) {
	die("Connection error: " . $connexion->connect_error);
	}
	if (!$connexion->set_charset("utf8")) {
   		printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $connexion->error);
   		exit();
	} else {
   		printf("Jeu de caractères courant : %s\n", $connexion->character_set_name());
	}
	echo "vos données ont été enregistrées.";

    if ( isset ( $_SERVER['HTTP_X_FORWARDED_FOR'] ))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif ( isset ( $_SERVER['HTTP_CLIENT_IP'] ))
    {
        $ip  = $_SERVER['HTTP_CLIENT_IP'];
    }
    else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

	if (isset($nomUser) && isset($prenomUser) && isset($telephoneUser) && isset($emailUser) && isset($sexeUser) && isset($adresseUser) && isset($codepostalUser) && isset($villeUser) && isset($datenaissanceUser) && isset($sectionUser) && isset($etablissementUser)) {
		try {
		$sql = "INSERT INTO $table (visNom, visPrenom, visTelephone, visCourrier, visSexeM, visAdresse, visCodePostal, visVille, visDateNais, visSectionActuelle, visEtablissementActuel, visIP, visBinome, visSection) VALUES ('$nomUser', '$prenomUser', '$telephoneUser', '$emailUser', '$sexeUser', '$adresseUser', '$codepostalUser', '$villeUser', '$datenaissanceUser', '$sectionUser', '$etablissementUser', '$ip', '$binome', '$section');";
		$connexion->query($sql);
		}


		catch (exception $e) {
		die("Erreur de type ".$e->getMessage()) ;
		}
	}else{
		die("Erreur dans le remplissage des champs");
	}
?>