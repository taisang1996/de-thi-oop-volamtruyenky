<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/function.php";

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