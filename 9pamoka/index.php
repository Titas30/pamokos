<?php

$array = [1, 2, 6, 8, 9, 9, 12, 2, 4];
$sum = 0;
 
function sumArray($array) {
    $sum = 0;
    foreach ($array as $element) {
        if(is_array($element)) {
            $sum = $sum + sumArray($element);
        }else{
            $sum = $sum + $element;  

        }
    }
    return $sum;
}

echo sumArray($array);
?>

<html>
    <body>
        <form action="help.php" method='post'>
<input type="email" name="email" placeholder="mail@gmail.com">
<input type='submit' value='Prenumeruoti'>
        </form>
    </body>
</html>

