<?php
$title = 'Index';
include 'includes/header.php'; ?>


<h1><?php echo $title ?></h1>
<?php
echo "<h1>Hello PHP</h1>";
echo '<br>';
echo '<h1>Second Line</h1>'
?>

<?php
$name = "Trevoir Williams";
echo "<h1>My name is: $name </h1>";
echo "<h1>My name is:" . $name . "</h1>";
?>

<?php require 'includes/footer.php' ?>