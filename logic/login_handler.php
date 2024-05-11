<?php
session_start(); // Start the session
include "../common/db.php";
// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // User is already logged in, redirect to the dashboard or home page
    header("Location: ../home.php");
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];

    // Validate form data
    $errors = array();

    if (empty($username)) {
        $errors[] = "Username is required";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    // If there are no validation errors, proceed with login
    if (empty($errors)) {
        // Perform database operations or any other required tasks
        // For example, you could check the user credentials in a database

        // Assuming you have a database connection
     
        // Check if the connection was successful
        
        // Prepare the SQL statement
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        // Execute the query
        $stmt->execute(array($username)); 

        if ($stmt->rowCount() == 1) {
            // User found, verify the password
            $row = $stmt->fetch();
            $hashedPassword = $row['password'];
            $password = md5($_POST['password'].$row['salt']);
            if ($password == $hashedPassword) {
                // Password is correct, set session variables and redirect to the dashboard or home page
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['fname'] = $row['first_name'];
                $_SESSION['lname'] = $row['last_name'];

                header("Location: ../home.php");
                exit;
            } else {
                // Invalid password
                $errors[] = "Invalid password";
            }
        } else {
            // User not found
            $errors[] = "User not found";
        }

        // Close the database connection
    }

    // Display the validation errors
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}
?>
