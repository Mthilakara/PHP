<!DOCTYPE html>
<html>
<head>
    <title>Find Lowest and Highest Numbers</title>
</head>
<body>
    <h2>Enter three numbers:</h2>
    <form method="post" action="">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" required><br>

        <label for="number2">Number 2:</label>
        <input type="number" name="number2" required><br>

        <label for="number3">Number 3:</label>
        <input type="number" name="number3" required><br>

        <input type="submit" value="Find Lowest and Highest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $number3 = $_POST["number3"];

        
        $lowest = min($number1, $number2, $number3);
        $highest = max($number1, $number2, $number3);

        
        echo "<h3>Results:</h3>";
        echo "The lowest number is: $lowest<br>";
        echo "The highest number is: $highest<br>";
    }
    ?>
</body>
</html>
