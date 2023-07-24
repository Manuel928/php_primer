<?php
$title = 'Functions';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>

<?php

function writeMessage()
{
};

function sumNumber($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $sum" . "<br>";
}

sumNumber(10, 20);

function changeNum(&$num)
{
    $num = $num + 10;
    // echo $num . "<br>";
}

$num = 500;

changeNum($num);
echo $num . "<br>";

function repeatString($str, $n)
{
    for ($count = 1; $count <= $n; $count++) {
        echo $str . " " . "<br>";
    }
}

repeatString('W', 4);

function returnproduct($num1, $num2)
{
    $prod = $num1 * $num2;
    return $prod;
}

echo returnproduct(200, 10);
?>
<?php require 'includes/footer.php' ?>