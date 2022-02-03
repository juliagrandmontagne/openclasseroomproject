<?php
try  {
    $bdd=new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'dbu402848', 'ceciestunmotdepasse!') ;
  }
catch (PDOException $e) {
echo "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
?>