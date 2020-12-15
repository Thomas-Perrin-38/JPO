<!DOCTYPE html>
<html lang="fr">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Thomas PERRIN">
		<title>Formulaire JPO</title>
		<link rel="stylesheet" href="style.css">
		
	</head>
	
	<body>
		<header>
			<h1 >Formulaire JPO BTS MCO</h1> <br/> <br/>
		</header>
			<br/><br/>
		<form class="formulaire" id="IDform" name="form" action="inscrire2.php" method="POST">
			<br/>
			<input class="champ" type="text" name="visNom" placeholder="Nom" id="IDnom" required /> <br/> <br/>

			<input class="champ" type="text" name="visPrenom" placeholder="Prénom" id="IDprenom" required /> <br/> <br/>

			<input class="champ" type="text" name="visTelephone" placeholder="Téléphone" id="IDtel" required /><br/><br/>

			<input class="champ" type="text" name="visCourrier" placeholder="Email" id="IDemail" required /><br/> <br/>

			<label for="IDsexeH" >Homme</label>
			<input type="radio" id="IDsexeH" name="visSexeM" value="H" checked />
			<label for="IDsexeF" >Femme</label>
			<input type="radio" id="IDsexeF" name="visSexeM" value="F" /><br/> <br/>

			<input class="champ" type="text" name="visAdresse" placeholder="Adresse" id="IDadresse" required /><br/> <br/>

			<input class="champ" type="text" name="visCodePostal" placeholder="Code postal" id="IDcodepostal" required /><br/> <br/>

			<input class="champ" type="text" name="visVille" placeholder="Ville" id="IDvile" required /><br/> <br/>

			<input class="champcom" type="text" id="IDcom" value="Date de naissance" readonly="">
			<input class="champdate" type="date" name="visDateNais" id="IDdatenais" required /><br/> <br/>

			<input class="champ" type="text" name="visSectionActuelle" placeholder="Section actuelle" id="IDsecactu" required /><br/> <br/>

			<input class="champ" type="text" name="visEtablissementActuel" placeholder="Etablissement actuel" id="IDetablissement" required /> <br/> <br/>

			<input class="btn" type="submit" value="Envoyer" id="IDenvoyer" name="envoyer" readonly /><br/> <br/>
		</form>
		
		<script>
		</script>
		
		
		
	</body>
	
	
</html>
