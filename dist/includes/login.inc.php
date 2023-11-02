<?php 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    include_once "db.inc.php";

    $sql = "SELECT username, email, pwd FROM users WHERE username = ? AND email = ? AND pwd = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        $stmt -> bind_param('sss', $username, $email, $password);
        $stmt -> execute();
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $retrievedUsername = $row['username'];
                $retrievedEmail = $row['email'];
                $retrievedPassword = $row['pwd'];

                if($username === $retrievedUsername && $email === $retrievedEmail){
                    if(password_verify($password, $retrievedPassword)){
                        session_start();
                        $_SESSION['username'] = $username;
                        echo "<script>window.location.href = '../index.php';</script>";
                    }
                } else{
                    echo "Invalid Username Or Email";
                }
            }
        }
    }