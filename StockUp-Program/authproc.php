<?php
include 'db.php';

session_start();

$login_message = '';
$signup_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['login'])) {
        $login_username = $conn->real_escape_string($_POST['login_username']);
        $login_password = $_POST['login_password'];

        $sql = "SELECT * FROM users WHERE username = '$login_username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify password
            if (password_verify($login_password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("Location: dashboard.php"); 
                exit();
            } else {
                $login_message = 'Invalid username or password.';

                header("Location: auth.php?login_message=" . urlencode($login_message));
            }
        } else {
            $login_message = 'No user found with that username.';
            
            header("Location: auth.php?login_message=" . urlencode($login_message));
        }
    }

    if (isset($_POST['signup'])) {
        $full_name = $conn->real_escape_string($_POST['full_name']);
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password']; 

        $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $signup_message = 'Username or email already exists.';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (full_name, username, email, password) VALUES ('$full_name', '$username', '$email', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                $signup_message = 'Registration successful! You can now log in.';

                header("Location: auth.php?signup_message=" . urlencode($signup_message));
                exit();
            } else {
                $signup_message = 'Error: ' . $conn->error;

                header("Location: auth.php?signup_message=" . urlencode($signup_message));
                exit();
            }
        }
    }
}

$conn->close();
?>
