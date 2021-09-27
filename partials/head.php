<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CharitAble-Welcome<?php $_SESSION['username']?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link
    href="https://fonts.googleapis.com/css2?family=Patrick+Hand&amp;family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet"href="./css/index.css" />
</head>