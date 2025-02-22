<?php 

$dogs = array(
    array("Chihuahua", "Mexico", 20),
    array("Husky", "Siberia", 15),
    array("Bulldog", "England", 10), 
);//array dy dimensionale

echo $dogs[0][0]. ": Origin: ". $dogs[0][1]. ",life Span: ". $dogs[0][2]. ".<br>";
echo $dogs[1][0]. ": Origin: ". $dogs[1][1]. ",life Span: ". $dogs[1][2]. ".<br>";
echo $dogs[2][0]. ": Origin: ". $dogs[2][1]. ",life Span: ". $dogs[2][2]. ".<br>";

//numri i par e tregon rreshtin, numri i dyt e tregon kolonen prsh 1-array("Husky", "Siberia", 15) ; kolona 2-15

for($row = 0; $row<3; $row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for($col = 0; $col<3; $col++){
        echo "<li>". $dogs[$row][$col]. '</li>';
    }
    echo "</il>";
}
//me ket menyr elementet hprehen ne form te listave sipas rreshtit dhe kolones perkates


?>