<?php 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    include_once "db.inc.php";

    // Validate and sanitize user input
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);

    $sql = "SELECT username, email, pwd FROM users WHERE username = ? OR email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        $stmt->bind_param('ss', $username, $email);
        $stmt->execute();
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $retrievedUsername = $row['username'];
            $retrievedEmail = $row['email'];
            $retrievedPassword = $row['pwd'];

            if (($username === $retrievedUsername || $email === $retrievedEmail) && password_verify($password, $retrievedPassword)) {
                session_start();
                $_SESSION['username'] = $retrievedUsername;
                session_regenerate_id(); // Regenerate session ID to prevent session fixation
                echo "Login Successful";
                header("Location: ../index.php");
                exit();
            } else {
                echo "Invalid Username Or Email";
            }
        } else {
            echo "Invalid Username Or Email";
        }

        $stmt->close();
    } else {
        echo "Database error";
    }

    mysqli_close($conn);
?>

