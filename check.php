<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
    <label>Enter first number<input type="number" name="number1" id="number1"></label><br>
    <label>Enter second number<input type="number" name="number2" id="number2"></label><br>
    <button type="submit">Calculate</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 =(int) $_POST['number1'];
    $num2 =(int) $_POST ['number2'];

if($num1 % 2==0 && $num2 % 2==0){
    $sum= $num1 + $num2;
    echo "The sum of the numbers is:  "  .   $sum;
}
elseif($num1 % 2 !=0 && $num2 %2 !=0){
    $product = $num1 * $num2;
    echo "The product of the numbers is :  "  .   $product;
}
else {
    echo "Error";
}
}
?>
</body>
</html>
