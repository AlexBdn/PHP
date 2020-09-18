<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Connexion  </title>
	</head>
	
	<body>
		<?php
		//Ouverture connexion bdd
		$objetPDO = new PDO('mysql:host=localhost;dbname= ?','root','');
		
		$pdoStat = $objetPDO->prepare('INSERT INTO nomtable VALUES (NULL, :nom, :prenom, :tel)');
		
		$pdoStat->bindValue(':nom', $_POST['LastName'], PDO::PARAM_STR);
		$pdoStat->bindValue(':prenom', $_POST['FirstName'], PDO::PARAM_STR);
		$pdoStat->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);
		
		$insertisOk = $pdoStat->execute();
		
		if($insertisOk) {
			$message = 'le contact a était ajouté dans la bdd';
		}
		else{
			$message = 'Echec';

		?>
	</body>
</html>