<?php

class HinhVuong
{

    // thuoc tinh
    public $chieudai;

    // hanh dong
    function HinhVuong($x)
    {
        $this->chieudai = $x;
    }

    function Tinhchuvi()
    {
        return 'Chu vi là :'.$this->chieudai * 4;
    }

    function Tinhdientich()
    {
        return 'Diện tích là : '.$this->chieudai * $this->chieudai;
    }
}
$ketqua = new HinhVuong(10);
echo $chuvi = $ketqua->Tinhchuvi(); echo "<br>";
echo $dientich = $ketqua->Tinhdientich();
?>