<?php

 include ("../partials/connect.php"); 
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $sql="INSERT INTO contact(name, email, subject, msg) VALUES ('$name', '$email', '$subject', '$message')";
 $connect->query($sql);

 header("Location: ../index.php");
 die();

 ?>