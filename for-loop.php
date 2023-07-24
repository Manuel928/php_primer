<?php
$title = 'For loop';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>

<?php
// For loops
for ($count = 0; $count <= 10; $count++) {
    echo "<p>Hello World-$count</p>";
}
?>
<?php require 'includes/footer.php' ?>