<?php
namespace Game\NguHanh;

abstract class NguHanh
{
    var $ten;
    protected $sinh;
    protected $khac;

    public function tuongsinh(){
        return 10;
    }
    public function tuongkhac(){
        return 20;
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
        $this->ten = $ten;
    }

    /**
     * @return mixed
     */
    public function getSinh()
    {
        return $this->sinh;
    }

    /**
     * @param mixed $sinh
     */
    public function setSinh($sinh)
    {
        $this->sinh = $sinh;
    }

    /**
     * @return mixed
     */
    public function getKhac()
    {
        return $this->khac;
    }

    /**
     * @param mixed $khac
     */
    public function setKhac($khac)
    {
        $this->khac = $khac;
    }


}