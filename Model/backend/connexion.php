<?php
try  {
    $bdd=new PDO('mysql:host=db5006311013.hosting-data.io;dbname=dbs5268898;charset=utf8', 'dbu402848', 'ceciestunmotdepasse!') ;
  }
catch (PDOException $e) {
echo "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
?>