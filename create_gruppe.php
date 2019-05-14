<?php
include "header.php";

function randcode($n)
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $j = rand(0, strlen($chars) - 1);
        $randomString .= $chars[$j];
    }

    return $randomString;
}

try {

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create = "CREATE TABLE IF NOT EXISTS `webtech`.`1111` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL UNIQUE  ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB";
	$conn->exec($create);
	echo "Table presentations created successfully";
	$name="lucas.thiess@stud.fh-campuswien.ac.at";
	
	$statement = $conn->prepare("INSERT INTO 1111 (name ) VALUES (:name)");
	$statement->execute(array('name' => $name));
	
	$name="a";
	$statement = $conn->prepare("INSERT INTO 1111 (name ) VALUES (:name)");
	$statement->execute(array('name' => $name));
	
	$name="b";
	$statement = $conn->prepare("INSERT INTO 1111 (name ) VALUES (:name)");
	$statement->execute(array('name' => $name));
	
	$name="c";
	$statement = $conn->prepare("INSERT INTO 1111 (name ) VALUES (:name)");
	$statement->execute(array('name' => $name));
	
	$name="d";
	$statement = $conn->prepare("INSERT INTO 1111 (name ) VALUES (:name)");
	$statement->execute(array('name' => $name));
	
	
	
	$name = "testgruppe";
    $id_students ="1111"; //$_POST['id_students'];
	$n = 5;
$creator = $_SESSION['username'];
$rating_code = randcode($n);

$statement = $conn->prepare("INSERT INTO presentations (name, id_students, rating_code, creator) VALUES (:name, :id_students, :rating_code, :creator)");
$statement->execute(array('name' => $name, 'id_students' => $id_students, 'rating_code' => $rating_code, 'creator' => $creator));
$conn=null;

} catch (PDOException $exception) {
    echo $create . "<br>" . $exception->getMessage();
}




include "footer.php";
?>