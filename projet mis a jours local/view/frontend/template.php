<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css"/>
		<title><?php $title ?></title>
		<script src="https://kit.fontawesome.com/a1efcfbe5e.js" crossorigin="anonymous"></script>
	</head>

<body>
    <div id="contenaire">
	<?php require ('header.php'); ?>
        <?=$content ?>
        <?php require ('footer.php'); ?>
        </div>
</body>	
</html> 