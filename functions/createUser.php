<?php
require("database.php");

require("database.php");
require("config.php");

if($_POST["password"] !== $_POST["confirmPassword"]){
    header("Location: ../register.php?errorMessage=Les mots de passe doivent correspondre");
}else if(empty($_POST["pseudo"]) || empty($_POST["password"]) || empty($_POST["confirmPassword"])){
    header("Location: ../register.php?errorMessage=Veuillez renseigner tout les champs");
}

if(isset($_POST["role"])){
    $role_id = 1;
}else{
    $role_id = 0;
}

$password_to_hash = $_POST["password"] . $SECRET_KEY;
$password_hash = md5($password_to_hash);

$req = $db->prepare("INSERT INTO user (pseudo, password, role_id) VALUES (:pseudo, :password, :role_id)");

$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $password_hash);
$req->bindParam(":role_id", $role_id);

$req->execute();

header("Location: ../login.php");