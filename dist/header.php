<?php 
    include_once('./includes/db.inc.php');
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Login Page</title>
</head>
<body>
    <header class="bg-black">
        <div class="text-white py-5 px-10 flex flex-col gap-4 md:flex-row justify-between items-center">
            <h1 class="text-2xl font-bold">Login</h1>
            <nav>
                <ul class="flex gap-3">
                    <li class="md:ml-5 hover:text-purple-700"><a href="index.php">Home</a></li>
                    <li class="md:ml-5 hover:text-purple-700"><a href="login.php">Login</a></li>
                    <li class="md:ml-5 hover:text-purple-700"><a href="register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>
