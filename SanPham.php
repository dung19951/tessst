<?php


class SanPham
{
public $name;
public $money;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getMoney()
    {
        return $this->money;
    }
    public function setMoney($money)
    {
        $this->money = $money;
    }

}