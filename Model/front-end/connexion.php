<?php
try {
    $bdd=new PDO('mysql:host=localhost;dbname=Julia;charset=utf8', 'root', 'root') ;
  }
catch (PDOException $e) {
echo "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
?>