<?php
$matrix = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$transpose = [];

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $transpose[$i][$j] = $matrix[$j][$i];
    }
}

echo "Transpose:<br>";

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $transpose[$i][$j]." ";
    }
    echo "<br>";
}
?>
