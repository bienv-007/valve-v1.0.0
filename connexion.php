<?php
try{
    $connexion=new PDO("mysql:dbname=valve_bdd;host=mysql-valve.alwaysdata.net","valve_bdd","valve_electronique");
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "erreur : ".$e->getMessage();
}?>