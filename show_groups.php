
<?php

error_reporting(0);
$name="testgruppe";

   $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query= "SELECT COUNT('id') FROM testgruppe";
   $stm = $conn->prepare($query);
   $stm->execute();

   $tablenumber = $stm->fetchColumn();


   $query = "SELECT rating_code FROM presentations WHERE name = :name";
   $statement = $conn->prepare($query);
   $statement->bindParam(':name', $name);
   $statement->execute();       
   $tabelle = $statement->fetch(PDO::FETCH_ASSOC);
    echo "Name der Tabelle: ".$name."<br>";
   echo "Zugriffscode: ".$tabelle[rating_code];


?>