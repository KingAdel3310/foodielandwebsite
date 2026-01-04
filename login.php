<?php
    include 'database/db_connect.php';

    session_start();    
    if($_SERVER ['REQUEST_METHOD'] == 'POST'){
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];

        $stmt = $conn->prepare("SELECT email FROM users WHERE full_name =?");
        $stmt->bind_param("s", $full_name);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows >0){
            $stmt->bind_result($db_password);
            $stmt->fetch();

            if($email === $db_password){
                header("Location: index.php?success=Login%20Successfull");
                session_start();
                $_SESSION['user_name']= $full_name;
                exit();
            }
            else{
                header(
                    "Location: index.php?error=Invalid%20fullname"
                );
            }
        } else{
            header(
                    "Location: index.php?error=Invalid%20request%method"
                );
        }
    }
?>