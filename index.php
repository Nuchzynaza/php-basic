<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"> </script>
    <script src="./js/bootstrap.js"> </script>

</head>

<body>
    <?php
        include "./navbar.php" ;
    ?>
    <div class="container">
        <?php 
        echo "ยินดีต้อนรับเข้าสู่เว็บไซด์";
        echo "<h1> Welcome to website </h1>";
        $year=2565;
        $crhish =$year-543;
        echo "$year";
        echo "ปี พ.ศ. $year ค.ศ. $crhish <br />";
        echo "ปี พ.ศ.". $year ;
        $salary = 25000;
        echo "เงินเดือน $salary บาท <br />";
        echo "เงินเดือน". $salary . "บาท";
        echo $year;

        $name= "Nuchzy";
        $age = 25;
        echo "<br /> สวัสดี " .$name ;
        define("WEB", "https://sanook.com/");
        echo "<br /> Link to : ".WEB;

        ?>
    </div>
</body>

</html>