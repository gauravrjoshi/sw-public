<?php
// At the beginning of the script
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming default values for questions are "off"
    $responses = [
        'question1' => 'off',
        'question2' => 'off',
    ];

    // Update responses based on posted data
    $responses = array_merge($responses, $_POST);

    // Debug output
    echo "<pre>";
    print_r($responses);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <!-- Question 1 -->
        <div class="form-group form-check">
            <!-- Hidden input for 'off' value -->
            <input type="hidden" name="question1" value="off">
            <!-- Checkbox input; if checked, overrides the hidden input -->
            <input type="checkbox" class="form-check-input" id="question1" name="question1" value="on">
            <label class="form-check-label" for="question1">Do you agree to Question 1?</label>
        </div>
        
        <!-- Question 2 -->
        <div class="form-group form-check">
            <!-- Hidden input for 'off' value -->
            <input type="hidden" name="question2" value="off">
            <!-- Checkbox input; if checked, overrides the hidden input -->
            <input type="checkbox" class="form-check-input" id="question2" name="question2" value="on">
            <label class="form-check-label" for="question2">Do you agree to Question 2?</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
