<?php
session_start();
include 'connect.php'; // Pastikan connect.php benar

$conn = mysqli_connect("localhost", "root", "", "konserku");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signUp'])) {
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hashing the password

    // Check if email already exists
    $checkEmail = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        header("Location: login.php?error=Email already exists");
        exit();
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hashing the password

    // Check user credentials
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: konserku.php");
        exit();
    } else {
        header("Location: login.php?error=Incorrect email or password");
        exit();
    }
}

?>
