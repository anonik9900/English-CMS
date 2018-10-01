<?php
session_start();
$password="Ciao1234";/* inserire su questa riga la password voluta */
$username="Utente";
if (isset($_SESSION['login'])) {
    if (isset($_POST['logout'])) {
        unset($_SESSION['login']);
        $messaggio = "<p class=\"php\">Logout effettuato con successo! Arrivederci! </p>";
    } else {
        header("Location: ../index.html");
    }
} else {
    if (isset($_POST['password'],$_POST['username'])) {
        if ($_POST['password'] == $password){
        if ($_POST['username'] == $username){
            $_SESSION['login'] = "verificata";
            header("Location: logout.php"); /*Pagina protetta */
        } }else {
            $messaggio = "<p class=\"php\"> Errore: password o username non corretti! </p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bounce Login Template</title>
    <!--CSS-->
    <link href="../css/login.css" rel="stylesheet" type="text/css">
    <!--META TAG-->
    <meta name="author" content="Template By Anonik">
    <meta name="description" content="Template By Anonik">
    <meta name="keywords" content="Template By Anonik">
    <meta name="application-name" content="Bounce Login Template">
    <!--END META-->
  </head>
  <body>

    <!--LOGIN FORM-->
    <div class="loginform">
      <img src="../img/login-form/avatar.png" class="avatar">
      <h1>Login Here</h1>
      <form name="login" action="login2.php" method="post">
        <p>Username</p>
        <input type="username" name="username" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="" value="Login">
        <a href="#">Lost yout password?</a><br>
        <a href="#">Don't Have Account?</a>
      </form>
    </div>
    <!--END LOGIN FORM-->

    <?php
    if(isset($messaggio)) {
        echo $messaggio;
        unset($messaggio);
    }
    ?>

  </body>
</html>
