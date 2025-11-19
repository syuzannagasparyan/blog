<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index10.css">
</head>
<body>
    <form action="formsubmit.php" method="POST">
    <label>Անուն (First Name)</label><br>
        <input type="text" name="first_name" required><br><br>
    <label>Ազգանուն (Last Name)</label><br>
        <input type="text" name="last_name" required><br><br>
    <label>Էլ. փոստ (Email)</label><br>
        <input type="email" name="email" required><br><br>
    <label>Գաղտնաբառ (Password)</label><br>
        <input type="password" name="password"><br><br>
    <label>Գաղտնաբառի հաստատում</label><br>
        <input type="password" name="confirm_password"><br><br>
    <label>Օգտանուն (Username)</label><br>
        <input type="text" name="username"><br><br>
    <label>Հեռախոսահամար</label><br>
        <input type="tel" name="phone"><br><br>
    <label>Ծննդյան ամսաթիվ</label><br>
        <input type="date" name="birthdate"><br><br>
    <label>Սեռ</label><br><br>
        <input type="radio" name="gender" value="male"> Տղա
        <input type="radio" name="gender" value="female"> Աղջիկ<br><br>
    <label>Հասցե</label><br>
        <textarea name="address" rows="4"></textarea><br><br>
        <button type="submit">Գրանցվել</button>
</form>
</body>
</html>
    <?php
    ?>
</body>
</html>  