<?php
/*
 * Author: Matthew Mills
 * Date: 9/24/19
 */

//variables for student names
$student1 = "Nancy Roberts";
$student2 = "Jim Richard";
$student3 = "Hellen Thomas";
$student4 = "Ruth Judy";
$student5 = "Michelle Evans";

//variables to store scores
$score1 = 78;
$score2 = 90;
$score3 = 82;
$score4 = 75;
$score5 = 68;

//IF statements to determine grade
if ($score1 >= 90)
    $grade1 = "A";
else if ($score1 >= 80)
    $grade1 = "B";
else if ($score1 >= 70)
    $grade1 = "C";
else if ($score1 >= 60)
    $grade1 = "D";
else
    $grade1 = "F";

if ($score2 >= 90)
    $grade2 = "A";
else if ($score2 >= 80)
    $grade2 = "B";
else if ($score2 >= 70)
    $grade2 = "C";
else if ($score2 >= 60)
    $grade2 = "D";
else
    $grade2 = "F";

if ($score3 >= 90)
    $grade3 = "A";
else if ($score3 >= 80)
    $grade3 = "B";
else if ($score3 >= 70)
    $grade3 = "C";
else if ($score3 >= 60)
    $grade3 = "D";
else
    $grade3 = "F";

if ($score4 >= 90)
    $grade4 = "A";
else if ($score4 >= 80)
    $grade4 = "B";
else if ($score4 >= 70)
    $grade4 = "C";
else if ($score4 >= 60)
    $grade4 = "D";
else
    $grade4 = "F";

if ($score5 >= 90)
    $grade5 = "A";
else if ($score5 >= 80)
    $grade5 = "B";
else if ($score5 >= 70)
    $grade5 = "C";
else if ($score5 >= 60)
    $grade5 = "D";
else
    $grade5 = "F";

//Describe Student Grades
switch ($grade1) {
    case "A":
        $description1 = "Outstanding";
        break;
    case "B":
        $description1 = "Good";
        break;
    case "C":
        $description1 = "Acceptable";
        break;
    case "D":
        $description1 = "Poor";
        break;
    case "F":
        $description1 = "Failed";
        break;
    default:
        $description1 = "Invalid grade";
}
switch ($grade2) {
    case "A":
        $description2 = "Outstanding";
        break;
    case "B":
        $description2 = "Good";
        break;
    case "C":
        $description2 = "Acceptable";
        break;
    case "D":
        $description2 = "Poor";
        break;
    case "F":
        $description2 = "Failed";
        break;
    default:
        $description2 = "Invalid grade";
}
switch ($grade3) {
    case "A":
        $description3 = "Outstanding";
        break;
    case "B":
        $description3 = "Good";
        break;
    case "C":
        $description3 = "Acceptable";
        break;
    case "D":
        $description3 = "Poor";
        break;
    case "F":
        $description3 = "Failed";
        break;
    default:
        $description3 = "Invalid grade";
}
switch ($grade4) {
    case "A":
        $description4 = "Outstanding";
        break;
    case "B":
        $description4 = "Good";
        break;
    case "C":
        $description4 = "Acceptable";
        break;
    case "D":
        $description4 = "Poor";
        break;
    case "F":
        $description4 = "Failed";
        break;
    default:
        $description4 = "Invalid grade";
}
switch ($grade5) {
    case "A":
        $description5 = "Outstanding";
        break;
    case "B":
        $description5 = "Good";
        break;
    case "C":
        $description5 = "Acceptable";
        break;
    case "D":
        $description5 = "Poor";
        break;
    case "F":
        $description5 = "Failed";
        break;
    default:
        $description5 = "Invalid grade";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Displaying student scores and grades using conditional and loop statements</title>
        <style>
            table {
                width: 600px;
                border-collapse: collapse;
                margin: 0 auto;
            }

            table th, table td {
                padding: 5px;
                border: 1px solid black;
            }
        </style>
    </head>
    <body style="text-align: center;">
        <h2> Student scores and grades </h2>

        <!--  display student scores, grades, and description in a table -->
        <table>
            <tr>
                <th>Student</th>
                <th>Score</th>
                <th>Grade</th>
                <th>Description</th>
            </tr>
            <?php
            define("STUDENT_NUM", 5);
            for ($student_count = 1; $student_count <= STUDENT_NUM; $student_count++) {
                $student = ${'student' . $student_count};
                $score = ${'score' . $student_count};
                $grade = ${'grade' . $student_count};
                $description = ${'description' . $student_count};
                echo "<tr>
                    <td> $student </td>
                    <td> $score </td>
                    <td> $grade </td>
                    <td> $description </td>
                    </tr>";
            }
            ?>
        </table>

    </body>
</html>
