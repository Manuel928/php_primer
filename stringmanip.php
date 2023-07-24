<?php
$title = 'String Manipulation';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>

<?php
$phrase1 = "Student who came late";
$phrase2 = "In class, stand up";

echo $phrase1 . ", named Tiffany, " . $phrase2;

echo '<br>';

$name = "trevoir williams";

echo strtolower('ASWELL');

echo str_repeat('n', 5) . '<br/>';

echo substr($name, 5, 10) . '<br>';

echo strpos(strtoupper($name), 'T') . '<br>';

echo strchr($name, 'e') . '<br>';

echo 'Without trim: ' .  "A" . " B C D " . "E" . "<br/>";
echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") .  "E" . "<br>";
echo 'Trim spaces on left side: ' . "A" . ltrim(" B C D ") .  "E" . "<br>";
echo 'Trim spaces on right side: ' . "A" . rtrim(" B C D ") .  "E" . "<br>";
echo 'Replace string with another: ' . str_replace("williams", 'Emmanuel', $name) . "<br>";
echo $name;



?>
<?php require 'includes/footer.php' ?>