<?php

session_start();
if (isset($_POST["nomsauve"])) {
	$nom = $_POST["nomsauve"];
	$data = $_POST["data"];
	$_SESSION[$nom] = $data;
} 

if (isset($_POST["nomcharge"])) {
	$nom = $_POST["nomcharge"];
		if (isset($_SESSION[$nom])) {
			$dataToLoad = $_SESSION[$nom];
		} 
		else {
		echo 'Il ny a pas de sauvegarde à ce nom !!';
		}
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>React nothing !</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="lib/codemirror.css">
</head>
<body>

	<h1>Editeur de texte MarkDown</h1>

	<!-----------form de sauvegarde---------->
	<form action="index.php" method="post">
	<!-----------éditeur---------->
		<textarea name="data" id="textmd" cols="30" rows="10"><?php if (isset($dataToLoad)){echo $dataToLoad;}?> </textarea>

		<p>Votre nom : <input type="text" name="nomsauve" />
			<input type="submit" value="save"></p>
		</form>

		<!-----------form de chargement---------->
		<form action="index.php" method="post">
			<p>Votre nom : <input type="text" name="nomcharge" />
				<input type="submit" value="load"></p>
			</form>
		</br>
	</br>


	<!-----------scripts---------->	
	<h2 style="color: black;">Live preview</h2>
	<div id="hello"></div>




	<!-----------scripts---------->
	<script src="lib/codemirror.js"></script>
	<script src="mode/markdown/markdown.js"></script>
	<script src="js/bundle.js"></script>
</body>
</html>