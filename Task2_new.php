<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <h1>Student Grades</h1>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        $sub_1 = (float)$_POST['sub_1'];
        $sub_2 = (float)$_POST['sub_2'];
        $sub_3 = (float)$_POST['sub_3'];
        $sub_4 = (float)$_POST['sub_4'];
        $sub_5 = (float)$_POST['sub_5'];

        
        $grade_1 = calculateGrade($sub_1);
        $grade_2 = calculateGrade($sub_2);
        $grade_3 = calculateGrade($sub_3);
        $grade_4 = calculateGrade($sub_4);
        $grade_5 = calculateGrade($sub_5);

       
        echo "<h2>Grades for Each Subject:</h2>";
        echo "Subject 1: Grade = $grade_1<br>";
        echo "Subject 1: Grade = $grade_2<br>";
        echo "Subject 1: Grade = $grade_3<br>";
        echo "Subject 1: Grade = $grade_4<br>";
        echo "Subject 1: Grade = $grade_5<br>";
    }

    
    function calculateGrade($marks) {
        if ($marks >= 90) {
            return "A+";
        } elseif ($marks >= 85) {
            return "A";
        } elseif ($marks >= 80) {
            return "A-";
        } elseif ($marks >= 75) {
            return "B+";
        } elseif ($marks >= 70) {
            return "B";
        } elseif ($marks >= 65) {
            return "B-";
        } elseif ($marks >= 60) {
            return "C+";
        } elseif ($marks >= 55) {
            return "C";
        } elseif ($marks >= 50) {
            return "C-";
        } elseif ($marks >= 40) {
            return "D";
        } else {
            return "F";
        }
    }
    ?>

    <form method="post">
        
        Enter marks for Subject 1: <input type='text' name='sub_1'><br>
        Enter marks for Subject 2: <input type='text' name='sub_2'><br>
        Enter marks for Subject 3: <input type='text' name='sub_3'><br>
        Enter marks for Subject 4: <input type='text' name='sub_4'><br>
        Enter marks for Subject 5: <input type='text' name='sub_5'><br>

        <input type="submit" value="Calculate Grades">
    </form>
</body>
</html>
