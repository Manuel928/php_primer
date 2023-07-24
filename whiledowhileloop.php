<?php
$title = 'While & Do While loops';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>
<?php
$count = 0;
$limit = 10;
while ($count <= $limit) {
    if ($count < 5) {
        echo "<p>I am less than 5, current index: $count</p>";
    } else if ($count > 5) {
        echo "<p>I am greater than 5, current index: $count</p>";
    } else {
        echo "";
    }
    $count++;
}
echo '<p>EXIT LOOP</p>';
?>

<h2>dowhile loop</h2>
<?php
$grade = 0;
do {
    if ($grade < 5) {
        echo "<p>I AM ECHO LESS THAN 5, CURRENT INDEX: $grade</p>";
    } else if ($grade > 5) {
        echo "<p>I AM ECHO GREATER THAN 5, CURRENT INDEX: $grade</p>";
    }
    $grade++;
} while ($grade <= 10);
echo '<p>EXIT LOOP</p>';
?>
<?php require 'includes/footer.php' ?>