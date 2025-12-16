<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="index10.css">
</head>
<body>

<form method="POST" action="loginprocess.php">
    <label>Օգտանուն</label><br>
    <input type="text" name="username" required><br><br>

    <label>Գաղտնաբառ</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Մուտք</button>
</form>

<?php
session_start();
if(isset($_SESSION['login_error'])){
    echo "<p style='color:red'>".$_SESSION['login_error']."</p>";
    unset($_SESSION['login_error']);
}
?>
</body>
</html>
