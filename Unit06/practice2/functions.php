<?php
define("STUDENT_NUM", 5);

//variables to student names
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


//determine grade for student1
function getGrade($score) {
    //code omitted
    return $grade;
}
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


//determine grade for student2
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


//determine grade for student3
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


//determine grade for student4
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

//determine grade for student5
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

//describe student1 grade
function getDescription($grade) {
    //code omitted
    return $description;
}
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

//describe student2 grade
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
    default:
        $description2 = "Invalid grade";
}

//describe student3 grade
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

//describe student4 grade
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

//describe student5 grade
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
?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

