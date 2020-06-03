<!DOCTYPE html>
<html>
<body>

    <style>
        .square{
            height:20px;
            width:20px;
            float:left;
            border:1px solid gray;
            margin-left:5px;
            margin-bottom:5px;
        }
    </style>

    <?php
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 10; $j++){
                echo "<div class='square'></div>";
            }
            echo "<div style='clear:both'></div>";
        }
    ?>

</body>
</html>