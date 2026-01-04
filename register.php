<?php 
    include 'database/db_connect.php';

    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $skill = filter_input(INPUT_POST, 'skill', FILTER_SANITIZE_SPECIAL_CHARS);
        $terms = isset($_POST['terms']) ? 1 : 0;

        if (empty($full_name) || empty($email) || empty($skill) || empty($terms)) {
            mysqli_close($conn);
            header("Location: index.php?error=Please%20fill%20all%20required%20fields");
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            mysqli_close($conn);
            header("Location: index.php?error=Invalid%20email%20format");
            exit();
        }
        $email = mysqli_real_escape_string($conn, $email);
        $query = "SELECT COUNT(*)as count FROM users WHERE email = '$email'";
        $result = mysqli_query($conn,$query);

         if (!$result) {
        mysqli_close($conn);
        header("Location: index.php?error=Database%20error:%20" . urlencode(mysqli_error($conn)));
        exit();
        }

        $row = mysqli_fetch_assoc($result);
        if ($row['count'] > 0) {
            mysqli_close($conn);
            header("Location: index.php?error=Email%20already%20registered");
            exit();
        }
        
        $full_name = mysqli_real_escape_string($conn, $full_name);
        $skill = mysqli_real_escape_string($conn, $skill);
        $query = "INSERT INTO users (full_name,email,skill,terms_accepted)VALUES
        ('$full_name','$email','$skill',$terms)";
        $result = mysqli_query($conn,$query);
        
        if(!$result){
            mysqli_close($conn);
            header("Location: index.php?error=Database%20error:%20" . urlencode(mysqli_error($conn)));
            exit();   
        }

        $_SESSION['user_name'] = $full_name;
        mysqli_close($conn);
        header("Location: index.php?success=Registration%20successful");
        exit();
    }else{
        mysqli_close($conn);
        header("Location: index.php?error=Invalid%20request%20method");
        exit();
    }
?>