<?php

class dodung
{




    public function setsochan ($so_chan)
    {
        $this->so_chan =$so_chan  ;
    }

    public function getsochan ()
    {
        return 'So chan: ' . $this->so_chan;
    }
    public function setloaigo($value){
        $this->loaigo = $value;
    }
    public function getloaigo(){
        return "Loai go la : ". $this->loaigo;
    }
}

//ban

$ban = new dodung();
$ban->setsochan(4);
$ban->setloaigo('Lim');
echo $ban->getsochan();
echo "<br>";
echo $ban->getloaigo();
echo "<hr>";

//ghe

$ghe = new dodung();
$ghe ->setsochan(8);
echo $ghe->getsochan();
$ghe->setloaigo('Xoan');
echo "<br>";
echo $ghe->getloaigo();

?>