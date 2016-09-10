<?php

require_once __DIR__ . "/../vendor/autoload.php";

$ds_quaivat = [];

$ds_ten = [
    "Cóc",
    "Mèo",
    "Gấu",
    "Heo",
    "Trâu",
    "Sói",
    "Hồ Ly",
    "Sơn tặc",
];

$ds_he = [
    'kim', 'tho', 'thuy', 'hoa', 'moc'
];

$capdo = 10;
foreach ($ds_ten as $ten) {
    $loai = 'thongthuong';
    $he = $ds_he[array_rand($ds_he)];
    $ds_quaivat[] = new \Game\Quaivat($ten, $capdo, $he, $loai);
    $capdo += 10;
}


return $ds_quaivat;