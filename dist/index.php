<?php 
    include_once("header.php");
?>

<?php
    if(isset($_SESSION['username'])){
        echo '<p class="text-center text-teal-600 mt-auto"> Welcome ' . $_SESSION['username'] . '</p>';
    } else{
        echo '<p class="text-center text-teal-600 mt-auto"> Please <a class="text-blue underline" href="login.php">Login</a> </p>';
    }
?>


<?php 
    include_once("footer.php");
?>
    
