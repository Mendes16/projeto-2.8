<?php
include 'conexao.php';
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["email"])){
    header('location:login.phtml');
    exit();

}

?>