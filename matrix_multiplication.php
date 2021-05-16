<!DOCTYPE html>
<html>
<body>
  <h1> Matrix Multiplication using php </h1>
<?php
$a = array(
            array(4, 2, 8),
            array(1, 5, 3),
            array(8, 3, 3)
          );
$b = array(
              array(7, 5, 6),
             array(2, 5, 7),
             array(10, 9, 8)
           );
$row1 = count($a);
$col1 = count($a[0]);
$row2 = count($b);
$col2 = count($b[0]);
if($col1 != $row2){
    echo "Matrices cannot be multiplied <br>";
}
else{
    $prod = array_fill(0, $col2, array_fill(0, $row1, 0));
    for($i = 0; $i < $row1; $i++){
        for($j = 0; $j < $col2; $j++){
            for($k = 0; $k < $row2; $k++){
               $prod[$i][$j] = $prod[$i][$j] + $a[$i][$k] * $b[$k][$j];
            }
        }
    }

    echo "Product of two matrices: <br>";
    for($i = 0; $i < $row1; $i++){
        for($j = 0; $j < $col2; $j++){
          echo $prod[$i][$j] . "  ";
        }
        print("<br>");
    }
}
?>
</body>
</html>
