<?php
include "header.php";
$conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
//$input = $_GET['hello'];

//echo $input;
//var_dump($_REQUEST);
//var_dump($_POST);
//var_dump($_GET);


function randcode($n)
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    $randomString = '';

    for ($i = 1; $i < $n; $i++) {
        $j = rand(0, strlen($chars) - 1);
        $randomString .= $chars[$j];
    }

    return $randomString;
}

$name = $_POST['groupname'];
$id_students =rand(0,50); //$_POST['id_students'];


try {

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create = "CREATE TABLE IF NOT EXISTS `webtech`.`presentations` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL UNIQUE  , 
	`id_students`   int NOT NULL UNIQUE  ,
    `rating_code` VARCHAR(50) NOT NULL UNIQUE, 
    `creator` VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table presentations created successfully";
} catch (PDOException $exception) {
    echo $create . "<br>" . $exception->getMessage();
}
$n = 5;
$creator = $_SESSION['username'];
$rating_code = randcode($n);

$statement = $conn->prepare("INSERT INTO presentations (name, id_students, rating_code, creator) VALUES (:name, :id_students, :rating_code, :creator)");
$statement->execute(array('name' => $name, 'id_students' => $id_students, 'rating_code' => $rating_code, 'creator' => $creator));

try {
    echo "<br>tablle 3:<br>";
    $create = "CREATE TABLE IF NOT EXISTS `webtech`.`" . $name . "` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `indroduction` int NOT NULL   , 
	`overview` int NOT NULL   , 
	`structure` int NOT NULL   , 
	`content` int NOT NULL   , 
	`conclusion` int NOT NULL   , 
	`visualization` int NOT NULL   , 
	`work_as_team` int NOT NULL   , 
	`preperation_team` int NOT NULL   , 
	`necessity_participate` int NOT NULL   , 
	`feedback_team` text NOT NULL   , 
	`articulation` int NOT NULL   , 
	`talking_speed` int NOT NULL   , 
	`pronounciation` int NOT NULL   , 
	`competence` int NOT NULL   , 
	`presence` int NOT NULL   , 
	`eye_contact` int NOT NULL   , 
	`posture` int NOT NULL   , 
	`gesture` int NOT NULL   , 
	`preperation_individual` int NOT NULL   , 
	`feedback_individual` text NOT NULL   , 
    `isteacher` boolean NOT NULL,
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table criteria created successfully";
} catch (PDOException $exception) {
    echo $create . "<br>" . $exception->getMessage();
}



include "footer.php";
?>