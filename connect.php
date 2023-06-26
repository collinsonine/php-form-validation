<?php
require 'conn.php';

// sql to create table

      $name = $email = $gender = $comment = $website = "";
      $nameErr = $emailErr = $genderErr = $websiteErr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["fullname"]) || $_POST["fullname"] == ""){
            return header("Location:".$_SERVER['HTTP_REFERER']."?error=errors");
        }else{
            $name = $_POST['fullname'];
        }
        if(empty($_POST["email"])){
            return header("Location:".$_SERVER['HTTP_REFERER']."?error=errors");
        }else{
            $email = $_POST['email'];
        }
        if(empty($_POST["website"])){
            return header("Location:".$_SERVER['HTTP_REFERER']."?error=errors");
        }else{
            $website = $_POST['website'];
        }
        if(empty($_POST["comment"])){
            return header("Location:".$_SERVER['HTTP_REFERER']."?error=errors");
        }else{
            $comment = $_POST['comment'];
        }
        if(empty($_POST["gender"])){
            return header("Location:".$_SERVER['HTTP_REFERER']."?error=errors");
        }else{
            $gender = $_POST['gender'];
        }
        $sql = "INSERT INTO users (fullname, email, website, comment, gender)
        VALUES ('$name', '$email', '$website', '$comment', '$gender')";
        test_input($conn, $sql);
      }

      function test_input( $conn, $sql){
        if ($conn->query($sql) === TRUE) {
            header("Location:".$_SERVER['HTTP_REFERER']."?message=success");
        } else {
            header("Location:".$_SERVER['HTTP_REFERER']."?error=errors");
        }
      }


$conn->close();
?>