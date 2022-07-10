<?php
    include "config.php";
    $username= $_POST['username'];
    $password= $_POST['password'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $address= $_POST['address'];
    $email= $_POST['email'];

    if(!empty($username) && !empty($password) && !empty($email)){
        $sql = "INSERT INTO users(username, password, firstname, lastname, address, email)
            VALUES('$username', '$password', '$firstname', '$lastname', '$address', '$email')";

        if(mysqli_query($link, $sql)){
            echo "บันทึกข้อมูลเรียบร้อย";
            header ("location: user.php");
        }else{
            echo "ไม่สามารถบันทึกข้อมูลได้";
        }

    }else{
        echo "ไม่พบข้อมูล";
    }

    mysqli_close();
?>