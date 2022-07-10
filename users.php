<?php
    include "navbar.php";
    include "config.php";

    $sql="SELECT * from users";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) >0){

        while($row = mysqli_fetch_assoc($result)){
            echo "$row[username] $row[email] <br/>";
        }
        
    }else{
        echo "ไม่พบข้อมูล";
    }

    mysqli_close();

?>