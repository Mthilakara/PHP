<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <h1>Student Grades</h1>

    <?php
    
    $gradingScale = [
        'A+' => [90, 100],
        'A' => [85, 89],
        'A-' => [80, 84],
        'B+' => [75, 79],
        'B' => [70, 74],
        'B-' => [65, 69],
        'C+' => [60, 64],
        'C' => [55, 59],
        'C-' => [50, 54],
        'D' => [40, 49],
        'F' => [0, 39]
    ];

    
    function calculateGrade($marks, $gradingScale) {
        foreach ($gradingScale as $grade => $range) {
            list($minScore, $maxScore) = $range;
            if ($marks >= $minScore && $marks <= $maxScore) {
                return $grade;
            }
        }
        return 'Invalid';
    }

    
    for ($i = 1; $i <= 20; $i++) {
        if (isset($_POST["marks$i"])) {
            $marks = floatval($_POST["marks$i"]);
            $grade = calculateGrade($marks, $gradingScale);
        } else {
            $marks = 0;
            $grade = '';
        }
        echo "<p>Student $i - Marks: $marks, Grade: $grade</p>";
    }
    ?>

    <form method="post">
        <?php
        
        for ($i = 1; $i <= 20; $i++) {
            echo "Enter marks for Student $i: <input type='text' name='marks$i'><br>";
        }
        ?>
        <input type="submit" value="Calculate Grades">
    </form>
</body>
</html>
