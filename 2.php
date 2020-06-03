<?php

class banhoc {
    //Thuộc tính (Properties)
    public $ten;
    public $tuoi;
    
    public function hello(){
        return "Hello everybody";
    }
    public function who(){
        $s = $this->ten;
        $s .= " ";
        $s .= $this->tuoi;
        return $s;
    }
    }
$bancap1 = new banhoc();
$bancap1 ->ten  = "Cuc";
$bancap1->tuoi = 23;


echo $bancap1->hello(); echo "<hr>";
echo $bancap1->who();






?>