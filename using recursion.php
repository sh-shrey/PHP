<?php   
function Fibonacci($number){ 
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
$number = 10; 
echo "<h3>Fibonacci series for first 10 numbers: </h3>";  
echo "\n";  
for ($counter = 0; $counter < $number; $counter++){   
    echo Fibonacci($counter),' '; 
} 
?> 