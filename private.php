<?php

class Truong
{

    private $tentruong;

    private $xephang;

    public $ngoai = 'ngoai';

    function settentruong($x)
    {
        $this->tentruong = $x;
    }

    function gettentruong()
    {
        return 'Trường ' . $this->tentruong . ' ';
    }

    function setxephang($y){
        $this->xephang = $y ;
    }


function getxephang()
{
    return 'đứng thứ ' . $this->xephang . ' trong top  trường đứng đầu';
}
    
}

$univercity = new Truong();
$univercity->settentruong('HUMG');
echo $univercity->gettentruong();
$univercity->setxephang(3);
echo $univercity->getxephang(); echo "<hr>";
$univercity1 = new Truong();
$univercity1->settentruong("Neu");
$univercity1->setxephang(6);
echo $univercity1->gettentruong();
echo $univercity1->getxephang();




?>