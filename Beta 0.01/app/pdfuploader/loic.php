<?php
session_start();
$username = $_POST['username'];
$password = $_POST['pw'];

if($username == "" or $password == ""){
echo "You can�t login without username or password";
}else if($username == "" and $password == ""){
echo "You can�t login without username and password";
}else{
// configure your username and password
if($username == "admin" AND $password == "password"){
echo "You are logged as $username";
echo "<a href='private.php'>To private page</a>";
}
else if($username == "Root$" AND $password == "Data1100"){

echo "Benvenuto $username, Accedi all'area Upload Cliccando <a href='upload.html'>Qua</a>";
/*
echo "You are logged as $username";
*/
/*
echo "<a href='upload.html'>To private page</a>";
*/
}
else{
echo "Access denied. Doesn�t exist this username";
}
}

function loggeduser($username){

}


?>
