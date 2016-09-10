<?php

namespace Game;

use Game\MonPhai\CaiBang;
use Game\MonPhai\ConLon;
use Game\MonPhai\DuongMon;
use Game\MonPhai\NgaMy;
use Game\MonPhai\NguDoc;
use Game\MonPhai\ThienNhan;
use Game\MonPhai\ThienVuong;
use Game\MonPhai\ThieuLam;
use Game\MonPhai\ThuyYen;
use Game\MonPhai\VoDang;

class Nguoichoi extends Nhanvat
{
    protected $monphai;

    public function __construct($ten, $capdo, $monphai)
    {
        parent::__construct($ten, $capdo);
        $this->setMonphai($monphai);
        $this->setHe($this->getMonphai()->getHe());
        $this->tinhSatthuong();
    }

    public function tinhSatthuong()
    {
        $satthuong = $this->getCapdo() * 5;
        $this->setSatthuong($satthuong);
        return $satthuong;
    }




    /**
     * @return mixed
     */
    public function getMonphai()
    {
        return $this->monphai;
    }

    /**
     * @param mixed $monphai
     */
    public function setMonphai($monphai)
    {
        $monphai = strtolower($monphai);

        switch ($monphai) {
            case 'thieulam':
                $this->monphai = new ThieuLam();
                break;
            case 'thienvuong':
                $this->monphai = new ThienVuong();
                break;
            case 'ngudoc':
                $this->monphai = new NguDoc();
                break;
            case 'duongmon':
                $this->monphai = new DuongMon();
                break;
            case 'ngamy':
                $this->monphai = new NgaMy();
                break;
            case 'thuyyen':
                $this->monphai = new ThuyYen();
                break;
            case 'caibang':
                $this->monphai = new CaiBang();
                break;
            case 'thiennhan':
                $this->monphai = new ThienNhan();
                break;
            case 'conlon':
                $this->monphai = new ConLon();
                break;
            case 'vodang':
                $this->monphai = new VoDang();
                break;
            default:
                throw new \Exception("Không có môn phái {$monphai}");
                break;
        }

        return $this->monphai;
    }




}