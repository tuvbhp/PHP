<?php

// Lớp
class DiNhan{
    
    // Thuộc Tính
    private $sucmanh;
    
    //Hành Động
    
    function setSucManh($a){
        if($a>0) {
            $this->sucmanh = $a; }
            else {
                $this->sucmanh = 0;
            }
    }
    function getSucManh(){
        return 'Sức mạnh là :'. $this->sucmanh;
    }
    
    
}


$songoku = new DiNhan();
$songoku->setSucManh(1000);
echo $songoku->getSucManh();


?>