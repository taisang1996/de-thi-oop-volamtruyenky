<?php

require_once __DIR__ . "/../vendor/autoload.php";

class tao_ds_nguoichoi
{
    var $ds_nguoichoi = [];

    public function make($max = 0)
    {
        if ($max == 0) {
            foreach ($this->danhsachten() as $ten)
                $this->taonguoichoi($ten);
        } else {
            for ($i=1; $i<=$max; $i++) {
                $ten = $this->danhsachten()[$i-1];
                $this->taonguoichoi($ten);
            }
        }

        return $this->ds_nguoichoi;
    }

    public function taonguoichoi($ten)
    {
        $ten = $ten;
        $capdo = rand(70, 80);
        $monphai = $this->monphaingaunhien();
        return $this->ds_nguoichoi[] = new \Game\Nguoichoi($ten, $capdo, $monphai);
    }

    public function danhsachten()
    {
        return $names = [
            "TaiSang", "ThuyTien", "ThiNguyen", "MinhThu",
            "TrangHeo", "HaKute", "DuyGaming",
            "Uyenmap", "ChiHeo",
            "KhangKho", "KhoiKho",
            "TuanPhat", "TuanLoc", "LanAnh", "LanPhuong",
            "HuyPham", "KyMap", "GiaMan", "UyenNy",
            "SangGa", "TamDamDe",
            "DuongQua", "TieuLongNu", "QuachTich", "HoangDung", "QuachPhu", "QuachTuong",
            "DocCoCauBai", "KimLuanPhapVuong", "HoacDo", "AuDuongPhong", "LyMacSau",
            "CauThienXich", "ChuBaThong", "AnhCo"
        ];
    }


    public function monphaingaunhien()
    {
        $ds_monphai = [
            "CaiBang",
            "ConLon",
            "DuongMon",
            "NgaMy",
            "NguDoc",
            "ThienNhan",
            "ThienVuong",
            "ThieuLam",
            "ThuyYen",
            "VoDang",
        ];

        return $ds_monphai[array_rand($ds_monphai)];
    }
}

return (new tao_ds_nguoichoi())->make(3);


