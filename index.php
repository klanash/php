<!DOCTYPE html>
<html lang="fr">

<head>

	<title>Tp1 PHP - Michael Jacoby</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />


</head>

<body>

<?php

if(isset($_GET['q1']) && isset($_GET['q2']) && isset($_GET['q3']) && isset($_GET['q4']) && isset($_GET['q5']) && isset($_GET['q6'])){

	if($_GET['q1'] == 'oui' && $_GET['q2'] == 'non' && $_GET['q3'] == 'non' && $_GET['q4'] == 'oui' && $_GET['q5'] == 'oui' && $_GET['q6'] == 'oui'){
		
		$texte = 'Ok, tu peux. Et fais gaffe! Elle coûte plus cher que toi!';
		$img = 'ok';
	}	
	elseif($_GET['q1'] == 'oui' && $_GET['q2'] == 'non' && $_GET['q3'] == 'non' && $_GET['q4'] == 'oui' && $_GET['q5'] == 'oui' && $_GET['q6'] == 'non'){
		
		$texte = 'Peut-être si tu es gentil';

	}	
	else{
		$texte = 'Dégage petit con';
		

	}
}	
else{
	$texte = 'Aucun argument n\'a encore été validé';
}
	


?>


<main>

	<h1>Choissisez vos arguments!</h1>

	<form method="get" action="index.php">

	 		<fieldset> 

	 			<legend>faire le plein</legend> <!-- oui -->

		 			<label for="oui-q1">oui</label>
		 			<input type="radio" id="oui-q1" name="q1" required value="oui" <?php if (isset($_GET["q1"])) { if ($_GET["q1"] == "oui") { $i++; } }
						if( $_GET['q1']=='oui'){ echo 'checked="checked"';} ?> />
		 			<label for="non-q1">non</label>
		 			<input type="radio" id="non-q1" name="q1" required value="non" <?php if (isset($_GET["q1"])) { if ($_GET["q1"] == "non") { $i++; } }
						if( $_GET['q1']=='non'){ echo 'checked="checked"';} ?> />

	 		</fieldset>
	 		<fieldset> 

	 			<legend>nettoyer la voiture</legend> <!-- non -->

		 			<label for="oui-q2">oui</label>
		 			<input type="radio" id="oui-q2" name="q2" required value="oui" <?php if (isset($_GET["q2"])) { if ($_GET["q2"] == "oui") { $i++; } }
						if( $_GET['q2']=='oui'){ echo 'checked="checked"';} ?> />
		 			<label for="non-q2">non</label>
		 			<input type="radio" id="non-q2" name="q2" required value="non" <?php if (isset($_GET["q2"])) { if ($_GET["q2"] == "non") { $i++; } }
						if( $_GET['q2']=='non'){ echo 'checked="checked"';} ?> />

	 		</fieldset>
	 		<fieldset> 

	 			<legend>conduire papy à l'église</legend> <!-- non -->

		 			<label for="oui-q3">oui</label>
		 			<input type="radio" id="oui-q3" name="q3" required value="oui" <?php if (isset($_GET["q3"])) { if ($_GET["q3"] == "oui") { $i++; } }
						if( $_GET['q3']=='oui'){ echo 'checked="checked"';} ?> />
		 			<label for="non-q3">non</label>
		 			<input type="radio" id="non-q3" name="q3" required value="non" <?php if (isset($_GET["q3"])) { if ($_GET["q3"] == "non") { $i++; } }
						if( $_GET['q3']=='non'){ echo 'checked="checked"';} ?> />

	 		</fieldset>
	 		<fieldset> 

	 			<legend>passer le contrôle technique</legend> <!-- oui -->

		 			<label for="oui-q4">oui</label>
		 			<input type="radio" id="oui-q4" name="q4" required value="oui" <?php if (isset($_GET["q4"])) { if ($_GET["q4"] == "oui") { $i++; } }
						if( $_GET['q4']=='oui'){ echo 'checked="checked"';} ?> />
		 			<label for="non-q4">non</label>
		 			<input type="radio" id="non-q4" name="q4" required value="non" <?php if (isset($_GET["q4"])) { if ($_GET["q4"] == "non") { $i++; } }
						if( $_GET['q4']=='non'){ echo 'checked="checked"';} ?> />

	 		</fieldset>
	 		<fieldset> 

	 			<legend>aller faire les courses</legend> <!-- oui -->

		 			<label for="oui-q5">oui</label>
		 			<input type="radio" id="oui-q5" name="q5" required value="oui" <?php if (isset($_GET["q5"])) { if ($_GET["q5"] == "oui") { $i++; } }
						if( $_GET['q5']=='oui'){ echo 'checked="checked"';} ?> />
		 			<label for="non-q5">non</label>
		 			<input type="radio" id="non-q5" name="q5" required value="non" <?php if (isset($_GET["q5"])) { if ($_GET["q5"] == "non") { $i++; } }
						if( $_GET['q5']=='non'){ echo 'checked="checked"';} ?> />

	 		</fieldset>
	 		<fieldset> 

	 			<legend>je ferai du repassage pendant 2 semaines</legend> <!-- oui -->

		 			<label for="oui-q6">oui</label>
		 			<input type="radio" id="oui-q6" name="q6" required value="oui" <?php if (isset($_GET["q6"])) { if ($_GET["q6"] == "oui") { $i++; } }
						if( $_GET['q6']=='oui'){ echo 'checked="checked"';} ?> />
		 			<label for="non-q6">non</label>
		 			<input type="radio" id="non-q6" name="q6" required value="non" <?php if (isset($_GET["q6"])) { if ($_GET["q6"] == "non") { $i++; } }
						if( $_GET['q6']=='non'){ echo 'checked="checked"';} ?> />

	 		</fieldset>

		<input type="submit">

	</form>	
<div>
<p><?php echo $texte; ?></p>

</div>
<small>Réalisé par michael Jacoby</small>
</main>
	<?php if($img == "ok"){echo '<img id="img" src="voiture.jpg" width="300px" alt="voiture de papa"/>';} ?>
	<a href="https://github.com/klanash/php">Accédez au code sur Github!</a>



</body>

</html>
