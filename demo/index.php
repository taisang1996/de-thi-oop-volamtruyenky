<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/function.php";

//$ds_quaivat = require "tao_ds_quaivat.php";
//$ds_nguoichoi = require "tao_ds_nguoichoi.php";

$tai = new \Game\Nguoichoi("Tài", 80, "NgaMy");
$sang = new \Game\Nguoichoi("Sang", 80, "ThieuLam");
$quaivat = new \Game\Quaivat("Cóc quỷ", 10, "Hoa", "daulinh");


inNguoichoi($tai);
echo "<hr>";
inNguoichoi($sang);
echo "<hr>";
inQuaivat($quaivat);
echo "<hr>";

$tai->tancong($quaivat);
echo "<hr>";
$sang->tancong($quaivat);
echo "<hr>";

$quaivat->tancong($tai);
echo "<hr>";
$quaivat->tancong($sang);


die();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<section>
    <div class="container">
        <div class="page-header">
            <h2>Danh sách người chơi</h2>
        </div>
        <?php
            $rows = array_chunk($ds_nguoichoi, 3, true);
            foreach ($rows as $row) {
                echo "<div class=\"row\">";
                    foreach ($row as $nguoichoi) {
                        echo "<div class=\"col-md-4\">";
                        inNguoichoi($nguoichoi);
                        echo "</div>";
                    }
                echo "</div>";
            }
        ?>
    </div>
</section>



<section>
    <div class="container">
        <div class="page-header">
            <h2>Danh sách quái vật</h2>
        </div>
        <?php
        $rows = array_chunk($ds_quaivat, 3, true);
        foreach ($rows as $row) {
            echo "<div class=\"row\">";
            foreach ($row as $quaivat) {
                echo "<div class=\"col-md-4\">";
                inQuaivat($quaivat);
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</section>
</body>
</html>
