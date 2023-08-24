<?php
session_start();

// Define the questions and their options
$questions = array(
    "Question 1" => array("Option A", "Option B"),
    "Question 2" => array("Option A", "Option B"),
    "Question 3" => array("Option A", "Option B"),
    "Question 4" => array("Option A", "Option B"),
    "Question 5" => array("Option A", "Option B")
);

// Set the current question index
$currentQuestionIndex = isset($_SESSION['current_question']) ? $_SESSION['current_question'] : 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $selectedOption = $_POST['selected_option'];
    $_SESSION[$currentQuestionIndex] = $selectedOption;

    $currentQuestionIndex++;
    $_SESSION['current_question'] = $currentQuestionIndex;

    if ($currentQuestionIndex >= count($questions)) {
        header("Location: results.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire</title>
</head>
<body>
    <form method="post" action="">
        <p><?php echo key($questions); ?></p>
        <?php foreach ($questions[key($questions)] as $option) : ?>
            <label>
                <input type="radio" name="selected_option" value="<?php echo $option; ?>">
                <?php echo $option; ?>
            </label><br>
        <?php endforeach; ?>
        <input type="submit" value="Next">
    </form>
</body>
</html>
