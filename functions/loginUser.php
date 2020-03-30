<?php
require("database.php");
require("config.php");

$password_to_hash = $_POST["password"] . $SECRET_KEY;
$password_hash = md5($password_to_hash);

$req = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND password = :password");

$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $password_hash);

$req->execute();

$result = $req->fetch(PDO::FETCH_ASSOC);

if(empty($result)){
    header("Location: ../register.php?errorMessage=L'utilisateur n'existe pas");
}else{
    session_start();
    $_SESSION["pseudo"] = $result["pseudo"];
    $_SESSION["role"] = $result["role_id"];
    header("Location: ../index.php");
}