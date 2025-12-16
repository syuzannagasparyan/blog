<?php
session_start();

$conn = new mysqli("localhost", "root", "", "shop_db");
if($conn->connect_error){
    die("DB connection error");
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if($username === '' || $password === ''){
    $_SESSION['login_error'] = "Բոլոր դաշտերը պարտադիր են";
    header("Location: login.php");
    exit();
}

$hashedPassword = hash('sha256', $password);

$sql = "SELECT * FROM user 
        WHERE username='$username' AND password='$hashedPassword'";
$result = $conn->query($sql);

if($result->num_rows === 1){
    $_SESSION['user'] = $username;
    header("Location: index10.php");
} else {
    $_SESSION['login_error'] = "Սխալ օգտանուն կամ գաղտնաբառ";
    header("Location: login.php");
}
