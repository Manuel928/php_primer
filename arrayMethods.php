<?php
$title = 'Array Methods';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>
<?php

$numbers = range(1, 12);
for ($count = 1; $count <= count($numbers); $count++) {
    for ($in = 1; $in <= 12; $in++) {
        $multiplied = $count * $in;
        echo "<p>$count * $in = $multiplied</p>";
    };
    echo "<p>------------------<p/>";
};

?>
<?php require 'includes/footer.php' ?>