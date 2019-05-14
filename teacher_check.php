<?php


try {
    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $isteacher = false;

    $query = "SELECT firstname, lastname, id FROM users WHERE isteacher = :isteacher";
    $statement = $conn->prepare($query);

    $statement->bindParam(':isteacher', $isteacher);

    $statement->execute();

    //gets row as associative array
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);


    $students = json_encode($users);
    echo $students;

} catch (PDOException $error) {
    echo $error;
}


