<?php

namespace Game\MonPhai;

abstract class MonPhai
{
    protected $ten;
    protected $he;

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
    public function getHe()
    {
        $class = "\\Game\\NguHanh\\He{$this->he}";
        return $this->he;
    }

    /**
     * @param mixed $he
     */
    public function setHe($he)
    {
        $this->he = $he;
    }


}