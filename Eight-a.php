<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<form method="post">
    Enter First Number: <input type="number" name="num1" required><br><br>
    Enter Second Number: <input type="number" name="num2" required><br><br>
    
    <input type="submit" name="add" value="Add">
    <input type="submit" name="sub" value="Subtract">
    <input type="submit" name="mul" value="Multiply">
    <input type="submit" name="div" value="Divide">
</form>

<?php
if(isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if(isset($_POST['add'])) {
        echo "Result: " . ($num1 + $num2);
    }
    if(isset($_POST['sub'])) {
        echo "Result: " . ($num1 - $num2);
    }
    if(isset($_POST['mul'])) {
        echo "Result: " . ($num1 * $num2);
    }
    if(isset($_POST['div'])) {
        if($num2 != 0)
            echo "Result: " . ($num1 / $num2);
        else
            echo "Cannot divide by zero!";
    }
}
?>

</body>
</html>
