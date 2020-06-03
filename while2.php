<?php
$i = 1;
while ($i<10){
    if ($i==4 ) {
        $i++;
        continue;
    }
    echo "<p>" . $i . "</p>";
    $i++;
}

?>