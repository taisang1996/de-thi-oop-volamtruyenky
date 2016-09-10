<?php

namespace Game;

use Game\NguHanh\HeHoa;
use Game\NguHanh\HeKim;
use Game\NguHanh\HeMoc;
use Game\NguHanh\HeTho;
use Game\NguHanh\HeThuy;

abstract class Nhanvat
{
    protected $ten;
    protected $capdo;
    protected $satthuong = 1;
    protected $he;

    public function __construct($ten, $capdo, $he = '')
    {
        $this->setTen($ten);
        $this->setCapdo($capdo);

        if ($he != '')
            $this->setHe($he);

        $this->setSatthuong(1);
    }

    /**
     * @return mixed
     */
    public function getTen()
    {
        return $this->ten;
    }

    /**
     * @param mixed $ten
     */
    public function setTen($ten)
    {
        if (empty($ten) || is_null($ten))
            throw new \Exception("Tên không được để trống");

        return $this->ten = $ten;
    }

    /**
     * @return int
     */
    public function getCapdo()
    {
        return $this->capdo;
    }

    /**
     * @param int $capdo
     */
    public function setCapdo($capdo)
    {
        if (!is_int($capdo) || $capdo < 0)
            throw new \Exception("Cấp độ phải là số, và phải lớn hơn 0");

        return $this->capdo = $capdo;
    }

    /**
     * @return int
     */
    public function getSatthuong()
    {
        return $this->satthuong;
    }

    /**
     * @param int $satthuong
     */
    public function setSatthuong($satthuong)
    {
        return $this->satthuong = $satthuong;
    }

    /**
     * @return string
     */
    public function getHe()
    {
        return $this->he;
    }

    /**
     * @param string $he
     */
    public function setHe($he)
    {
        $he = strtolower($he);
        switch ($he) {
            case 'hoa':
                $this->he = new HeHoa();
                break;
            case 'tho':
                $this->he = new HeTho();
                break;
            case 'kim':
                $this->he = new HeKim();
                break;
            case 'thuy':
                $this->he = new HeThuy();
                break;
            case 'moc':
                $this->he = new HeMoc();
                break;
            default:
                throw new \Exception("Không có hệ {$he}");
                break;
        }

        return $this->he;
    }

    public function tancong($muctieu)
    {
        if ($this->getHe()->getSinh() == $muctieu->getHe()->getTen()) {
            $satthuong = $this->getSatthuong() + ($this->getSatthuong() * $this->getHe()->tuongsinh() / 100);
            echo "{$this->getTen()} Sat thuong tuong sinh {$muctieu->getTen()}: {$satthuong}";
        } elseif ($this->getHe()->getKhac() == $muctieu->getHe()->getTen()) {
            $satthuong = $this->getSatthuong() + ($this->getSatthuong() * $this->getHe()->tuongkhac() / 100);
            echo "{$this->getTen()} Sat thuong tuong khac {$muctieu->getTen()}: {$satthuong}";
        } else {
            $satthuong = $this->getSatthuong();
            echo "{$this->getTen()} Sat thuong thuong {$muctieu->getTen()}: {$satthuong}";
        }
    }

}