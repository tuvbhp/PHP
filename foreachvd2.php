<?php
$data1 = array ("HTML", "CSS", "Javarscript");
$data2 = array("MYSQL", "PHP");
$data = array ($data1, $data2);
foreach ($data as $value) {
    foreach ($value as $child) {
        echo $child. "<br>";
    }
    echo "<hr>";
}
?>