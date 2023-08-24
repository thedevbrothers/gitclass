<?php
session_start();

$questions = array(
    "Question 1" => array("Option A", "Option B"),
    "Question 2" => array("Option A", "Option B"),
    "Question 3" => array("Option A", "Option B"),
    "Question 4" => array("Option A", "Option B"),
    "Question 5" => array("Option A", "Option B")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
</head>
<body>
    <h1>Results</h1>
    <ul>
        <?php foreach ($_SESSION as $key => $value) : ?>
            <?php if (is_numeric($key)) : ?>
                <li><?php echo "$key: {$questions[$key][$_SESSION[$key]]}"; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
