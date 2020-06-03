<?php
$mobile = array(
    "HTC",
    "NOKIA",
    "SUMSUNG",
    "LG",
    "APPLE",
    "LENOVO"
);
$i = 0;
while ($i < count($mobile)) {
    echo "<p>" . $mobile[$i] . "</p>";
    $i ++;
}

?>