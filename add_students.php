<?php

/* var_dump($_POST); */ 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$email = strtolower($firstname . "." . $lastname . "@stud.fh-campuswien.ac.at");


$conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");

$query =  "SELECT count('email') FROM users WHERE email= :email LIMIT 1";

// Check the email with database
$stm = $conn->prepare($query);
$stm->bindParam(':email', $email);
$stm->execute();

// Get the result
$result = $stm->fetchColumn();

// Check if result is greater than 0 - user exist
if ($result == 1) {

   
    header("Location: teacher.php");
}

try {

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create = "CREATE TABLE IF NOT EXISTS `webtech`.`users` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `firstname` VARCHAR(50) NOT NULL , 
    `lastname` VARCHAR(50) NOT NULL , 
    `email` VARCHAR(100) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB";

    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table users created successfully";
} catch (PDOException $exception) {
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
