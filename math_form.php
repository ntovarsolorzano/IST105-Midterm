<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Operations Form</title>
</head>
<body>

<h2>Math Operations</h2>

<form action="process_math.php" method="post">
    Number 1: <input type="number" name="input1" required><br><br>
    Number 2: <input type="number" name="input2" required><br><br>

    Operation:
    <select name="operation" required>
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

</body>
</html>