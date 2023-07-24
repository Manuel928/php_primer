<?php
$title = 'Switch Statement';
include 'includes/header.php';
?>
<h1><?php echo $title ?></h1>

<?php
$grade = 'E';

switch ($grade) {
    case 'A':
        echo '<h2 style = "color: green";>YOU ARE A SUPERSTAR!</h2>';
        break;
    case 'B':
        echo '<h2 style = "color: blue";>YOU DID WELL!</h2>';
        break;
    case 'C':
        echo '<h2 style = "color: yellow";>YOU PASSED!</h2>';
        break;
    default:
        echo '<h2 style = "color: red";>YOU HAVE FAILED...</h2>';
}
?>
<?php require 'includes/footer.php' ?>