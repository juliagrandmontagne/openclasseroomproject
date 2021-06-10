<!DOCTYPE html>
<html>
<?php require('controller/front-end/controller.php')?>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="./../../style.css" />
		<title><? $title ?></title>
		<script src="https://kit.fontawesome.com/a1efcfbe5e.js" crossorigin="anonymous"></script>
	</head>

<body>
    <div id="contenaire">
        <?php require 'header.php'; ?>
        <main><?= $content ?></main>
        <?php require 'footer.php'; ?>
        </div>
</body>	
</html> 