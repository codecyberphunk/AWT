<?php
$A = [[1,2],[3,4]];
$B = [[5,6],[7,8]];
$C = [[0,0],[0,0]];

for($i=0;$i<2;$i++){
    for($j=0;$j<2;$j++){
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

echo "Matrix Addition:<br>";

for($i=0;$i<2;$i++){
    for($j=0;$j<2;$j++){
        echo $C[$i][$j]." ";
    }
    echo "<br>";
}
?>
