<?php  require_once ('functions.php');  ?> 

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Student Grades</title>
    </head>

    <body style="text-align: center;">
        <h2> Student scores and grades </h2>
        <table width='600' border='1' cellspacing='0' cellpadding='5' align='center'>
            <tr>
                <th>Student</th>
                <th>Score</th>
                <th>Grade</th>
                <th>Description</th>
            </tr>
            <?php
            for ($student_count = 1; $student_count <= STUDENT_NUM; $student_count++) {
                $student = ${'student' . $student_count};
                $score = ${'score' . $student_count};
                $grade = ${'grade' . $student_count};
                $description = ${'description' . $student_count};
                ?>
                <tr>
                    <td><?= $student ?></td>
                    <td><?= $score ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $description ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>