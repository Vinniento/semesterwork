<?php
session_start();
$user_form = ($_POST['username']);
$pass_form = htmlspecialchars($_POST['pwd']);

try{
    //create connection to database
    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['submit'])) {

        if(empty($user_form) && empty ($pass_form)) {
            
                     echo ("all fields are required!");
        }
        else {
            //prepare helps against SQL injections
            $query = "SELECT id,firstname,pwd, isteacher FROM users WHERE firstname = :firstname";
            $statement = $conn->prepare($query);

            $statement->bindParam(':firstname', $user_form);

            $statement->execute();

            //gets row as associative array
            $users = $statement->fetch(PDO::FETCH_ASSOC);
           
            
            if ($user_form === $users['firstname'] && password_verify($pass_form, $users['pwd']) == true){

                $_SESSION['username'] = $user_form;
                $_SESSION['pwd'] = $pass_form;
			    $_SESSION['isteacher'] = $users['isteacher'];
                //print_r($_SESSION);

               /*  echo "login successful";
                echo "\n pass db = " . $users['pwd'];
               echo "\n pass form = " . $pass_form; */
                if($users['isteacher']) {
                header("location: teacher.php"); }
                else {
                    header("location: students.php");
                }
            }
        
            else {
/*                 eigentlich zum login page weiterleiten mit einer warnung wäre cool
entweder ein zeichen "wrong login data" oder sowas */ 
               header("Location: login.php");  
            }
          
        }    
    }
}

    catch(PDOException $error) {
    echo $error;
    }
?>
