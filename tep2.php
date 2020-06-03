
<!Doctype html>

<html>



<body>

	<style type="text/css">
.square {
	height: 50px;
	width: 50px;
	float: right;
	border: 2px black solid;
	margin-left: 5px;
	margin-bottom: 5px;
}
</style>

<?php
/*
 * $number = 1;
 * for ($i = 0; $i<10;$i++){
 * for ($j=0; $j<5;$j++){
 * echo "<p>" . $number . "</p>";
 * $number++;
 * }
 * }
 */
for ($i = 0; $i < 5; $i ++) {
    $text = "";
    for ($j = 0; $j <= 9; $j ++) {
        /*
         * $text = $text . $j . " ";
         * }
         * echo "<p>" . $text . "</p>";
         */
        
        echo "<div class='square'></div>";
    }
    echo "<div style ='clear:both'></div>";
}

?>


</body>

</html>
