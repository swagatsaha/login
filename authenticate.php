<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Read the users.txt file and check if the credentials match
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode(":", $user);
        if ($username === $storedUsername && $password === $storedPassword) {
            // Redirect to another webpage upon successful login
            header("Location: another_webpage.html");
            exit();
        }
    }

    // Redirect back to the login page if credentials are invalid
    header("Location: login.html");
    exit();
}
?>
