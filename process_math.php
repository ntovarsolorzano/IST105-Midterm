<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];
    $operation = $_POST["operation"];

    $input1 = escapeshellarg($input1);
    $input2 = escapeshellarg($input2);
    $operation = escapeshellarg($operation);

    // Execute the Python script and get the output
    $command = "python3 math_operations.py " . $input1 . " " . $input2 . " " . $operation;
    $output = shell_exec($command);

    echo $output;

} else {
    // Handle cases where the form wasn't submitted via POST!
    echo "<b>Error:</b> Please submit the form.";
}

?>