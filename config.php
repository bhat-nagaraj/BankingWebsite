<!-- connection -->
<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "spark";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>
