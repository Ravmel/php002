<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<title>Promotion</title>
	</head>

	<body>

	<div class="menu">
		<?php 
        include "menu.php";
        ?>
	</div>


    <h1>Promotion</h1>

    
    <div class="promotion">
		<?php 
        include "variable.php";
        echo $promotion;
        ?>
	</div>

		<script src="script.js"></script>
	</body>

</html>