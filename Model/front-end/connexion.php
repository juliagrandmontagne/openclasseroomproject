<?php
try/*connection-global-bd*/ */ {
    $bdd=new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'root', 'root') ;
  }
catch (PDOException $e) {
echo "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
?>