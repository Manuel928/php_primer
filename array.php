<?php
$title = 'Array';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>

<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 43, 22, 44, 21, 43, 56, 77, 87, 78, 97, 65, 44, 11, 11);
array_push($numbers, 1000, 2000);

echo "<p>$numbers[5]<p/>";

$size = count($numbers);
echo "<p>Array Numbers is size: $size<p/>";

for ($count = 0; $count < count($numbers); $count++) {
    echo "<p>$numbers[$count]</p>";
}
?>
<?php require 'includes/footer.php' ?>