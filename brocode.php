<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="brocode.php" method="post">
        <label>quantity:</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">

</body>
</html>
<?php
$item="pizza";
$price=5.99;
$quantity=$_POST["quantity"];
$total=null;

$total= $quantity*$price;

echo "you have ordered {$quantity} x {$item}/s <br>";
echo "your total is: \${$total}"

?>