<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = strtolower($firstname . "." . $lastname . "@stud.fh-campuswien.ac.at");
try {

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`userss` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `firstname` VARCHAR(50) NOT NULL , 
    `lastname` VARCHAR(50) NOT NULL , 
    `email` VARCHAR(100) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table users created successfully";
 }
catch(PDOException $exception)
 {
 echo $create . "<br>" . $exception->getMessage();
 }

 
$statement = $conn->prepare("INSERT INTO users (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
$statement->execute(array('firstname' => $firstname, 'lastname' => $lastname, 'email' => $email));   


$subject = 'project work';
$message = 'You have been added as a student: please add your password following this link http://localhost:8081/semesterwork/add_password.php to set up your account';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($email, $subject, $message, $headers);


header("Location: teacher.php");
