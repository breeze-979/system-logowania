<?php
session_start();
if (isset($_POST["login"])) {
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
    if (login == "admin" && haslo == "TajneHaslo321") {
        $_SESSION["login"] = $login;
        header("location: wyniki.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj sie</title>
</head>
<body>
    <main>
    <form method="post">
        <h2>Zaloguj sie do systemu</h2>
        <label>Login</label>
        <input type="text" name="login">
        <label>Haslo</label>
        <input type="password" name="haslo">
        <input type="submit" value="Zaloguj">
    </form>
    </main>
    <?php
    ?>
</body>
</html>
<?php
?>