<?php
$season = "Xuan";
$thang = 12;
switch ($season) {
    case "Xuan":
        switch ($thang) {
            case 1:
                echo "Mua Xuan - thang 1";
                break;
            case 2:
                echo "Mua Xuan - thang 2";
                break;
            case 3:
                echo "Mua Xuan - thang 3";
                break;
            default:
                echo "Mua " . $season . " khong co thang " . $thang;
                break;
        }
        break;
    case "Ha":
        switch ($thang) {
            case 4:
                echo "Mua Ha - thang 4";
                break;
            case 5:
                echo "Mua Ha - thang 5";
                break;
            case 6:
                echo "Mua Ha - thang 6";
                break;
            default:
                echo "Mua " . $season . " khong co thang " . $thang;
                break;
        }
        break;
    case "Thu":
        switch ($thang) {
            case 7:
                echo "Mua Thu - thang 7";
                break;
            case 8:
                echo "Mua Thu - thang 8";
                break;
            case 9:
                echo "Mua thu - thang 9";
                break;
            default:
                echo "Mua " . $season . " khong co thang " . $thang;
                break;
        }
        break;
    case "Dong":
        switch ($thang) {
            case 10:
                echo "Mua Dong - thang 10";
                break;
            case 11:
                echo "Mua Dong - thang 11";
                break;
            case 12:
                echo "Mua Dong - thang 12";
                break;
            default:
                echo "Mua " . $season . " khong co thang " . $thang;
                break;
        }
        break;
    default:
        echo "KHONG XAC DINH";
        break;
}

?>