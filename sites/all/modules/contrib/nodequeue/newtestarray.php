<?php
$color = array(
    array ("balck", 25 , 26),
    array("green", 25, 88),
    array ("white", 1, 2),
    array("red" ,4,5),

);
for ($row = 1 ; $row < 4; $row++){
    echo "<p><b>Row number $row</b></b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo"<li>". $color[$row][$col]. "</li>";
    }
    echo "</ul>";
}


?>