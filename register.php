<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Store the username and password in a text file
    $file = fopen("users.txt", "a");
    fwrite($file, "$username:$password\n");
    fclose($file);

    // Redirect to the login page
    header("Location: login.html");
    exit();
}
?>
