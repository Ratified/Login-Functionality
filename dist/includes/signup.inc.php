<?php 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    include_once('db.inc.php');

    $sql = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
        // OR $stmt -> bind_param("sss", $username, $email, $hashed_password);
        if (mysqli_stmt_execute($stmt)) {
            //Also stmt -> execute();
            // Redirect to the index page 
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error: Unable to execute the statement.";
        }
    } else {
        echo "Error: Unable to prepare the statement.";
    }
?>
