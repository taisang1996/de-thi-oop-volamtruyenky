<?php

function inNguoichoi($nguoichoi)
{
    echo <<<EOF
<div class="panel panel-default">
    <table class="table table-bordered">
        <tr><th class="col-xs-6 col-sm-4 text-center">Tên</th><td>{$nguoichoi->getTen()}</td></tr>
        <tr><th class="col-xs-6 col-sm-4 text-center">Cấp độ</th><td>{$nguoichoi->getCapdo()}</td></tr>
        <tr><th class="col-xs-6 col-sm-4 text-center">Môn phái</th><td>{$nguoichoi->getMonphai()->getTen()}</td></tr>
        <tr><th class="col-xs-6 col-sm-4 text-center">Hệ</th><td>{$nguoichoi->getHe()->getTen()}</td></tr>
        <tr><th class="col-xs-6 col-sm-4 text-center">Sát thương</th><td>{$nguoichoi->getSatthuong()}</td></tr>
    </table>
</div>
EOF;
}

function inQuaivat($quaivat)
{
    echo <<<EOF
<div class="panel panel-default">
    <table class="table table-bordered">
        <tr><th class="col-xs-6 col-sm-4 text-center">Tên</th><td>{$quaivat->getTen()}</td></tr>
        <tr><th class="col-xs-6 col-sm-4 text-center">Cấp độ</th><td>{$quaivat->getCapdo()}</td></tr>
        <tr><th class="col-xs-6 col-sm-4 text-center">Hệ</th><td>{$quaivat->getHe()->getTen()}</td></tr>
        <tr><th class="col-xs-6 col-sm-4 text-center">Sát thương</th><td>{$quaivat->getSatthuong()}</td></tr>
    </table>
</div>
EOF;
}