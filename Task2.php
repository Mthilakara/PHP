<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <h1>Student Grades</h1>

    <?php
    // Define the grading system
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

    // Function to calculate the grade based on marks
    function calculateGrade($marks, $gradingScale) {
        foreach ($gradingScale as $grade => $range) {
            list($minScore, $maxScore) = $range;
            if ($marks >= $minScore && $marks <= $maxScore) {
                return $grade;
            }
        }
        return 'Invalid';
    }
    ?>

    <table border="1">
        <tr>
            <th>Student</th>
            <th>Marks</th>
            <th>Grade</th>
        </tr>

        <?php
        // Display marks and grades for 20 students
        for ($i = 1; $i <= 20; $i++) {
            $marks = rand(0, 100); // Generate random marks between 0 and 100
            $grade = calculateGrade($marks, $gradingScale);
            echo "<tr><td>Student $i</td><td>$marks</td><td>$grade</td></tr>";
        }
        ?>
    </table>
</body>
</html>
