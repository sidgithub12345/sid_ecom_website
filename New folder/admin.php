<?php
// Database connection
$servername = "localhost";
$email = "admin_email";
$password = "admin_password";
$database = "php_project";

$conn = mysqli_connect("localhost", "root","","php_project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Login functionality
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT admin_id FROM admins WHERE admin_email = '$email' and admin_password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $email;
        header("location: admin_page.php");
    } else {
        $error = "Your Login email or Password is invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        form {
            border: 3px solid #f1f1f1;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
        }
        input[type=email], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<form action="" method="post">
    <div class="container">
        <h2>Admin Login</h2>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit">Login</button>
    </div>
</form>

</body>
</html>
