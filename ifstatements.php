<?php
$title = 'If statements';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>
<?php
$grade = 80;
if ($grade >= 50) {
    echo '<h3 style = "color: green;">YOU HAVE PASSED!</h3>';
    echo "YOUR GRADE: $grade";
} else {
    echo '<h3 style = "color: red;">WORK SMARTER NOT HARDER!</h3>';
    echo "YOUR GRADE: $grade";
}


?>
<?php require 'includes/footer.php' ?>