<?php

namespace Game;

class Quaivat extends Nhanvat
{
    protected $loai;

    public function __construct($ten, $capdo, $he, $loai)
    {
        parent::__construct($ten, $capdo, $he);
        $this->setLoai($loai);
        $this->tinhSatthuong();
    }

    /**
     * @return mixed
     */
    public function getLoai()
    {
        return $this->loai;
    }

    /**
     * @param mixed $loai
     */
    public function setLoai($loai)
    {
        $loai_hople = ['thongthuong', 'daulinh'];

        if ( ! in_array($loai, $loai_hople))
            throw new \Exception("Loại {$loai} không hợp lệ");

        return $this->loai = $loai;
    }

    /**
     * @param $loai
     */
    public function tinhSatthuong()
    {
        if ($this->loai == 'thongthuong')
            $this->setSatthuong($this->getCapdo() * 3);
        if ($this->loai == 'daulinh')
            $this->setSatthuong($this->getCapdo() * 7);

        return $this->getSatthuong();
    }



}