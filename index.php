<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=">
  <meta name="" content="width=device-width, initial-scale=1">

  <title>GPA CGPA REG17</title>
</head>

<body>
    Calculate your CGPA
    <br>Developed by Raagul and Gowtham
    <?php
   
    $s1 = $_POST["g1"];
    $s2 = $_POST["g2"];
    $s3 = $_POST["g3"];
    $s4 = $_POST["g4"];
    $s5 = $_POST["g5"];
    $s6 = $_POST["g6"];
    $s7 = $_POST["g7"];
    $s8 = $_POST["g8"];
    $s9 = $_POST["g9"];
    $ts1= $s1 * 4;
    $ts2=$s2 * 3;
    $ts3=$s3 * 3;
    $ts4=$s4 * 3;
    $ts5=$s5 * 3;
    $ts6=$s6 * 3;
    $ts7=$s7 * 2;
    $ts8=$s8 * 2;
    $ts9=$s9 * 1;
    $tc=24;
    $gpa=($ts1+$ts2+$ts3+$ts4+$ts5+$ts6+$ts7+$ts8+$ts9)/$tc;
    
   ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Propability and Statistics MA8391<br>
        Credits : 4  Grade
        <select name="g1">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        Computer Architecture CS8491<br>
        Credits : 3 Grade
        <select name="g2">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        Database Management System CS8492<br>
        Credits : 3 Grade
        <select name="g3">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        Design and Analysis of Algorithm CS8451<br>
        Credits : 3 Grade 
        <select name="g4">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        Operating System CS8493<br>
        Credits : 3 Grade 
        <select name="g5">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        Environmental Science GE8291<br>
        Credits : 3 Grade 
        <select name="g6">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        Database Management System Laboratory CS8481<br>
        Credits : 2 Grade 
        <select name="g7">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        Operating System Laboratory CS8461<br>
        Credits : 2 Grade 
        <select name="g8">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        Advance Reading amd Writing HS8461<br>
        Credits : 1 Grade 
        <select name="g9">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        <br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
     echo $gpa;
   ?>
   <br><a href="">Want to contribute to source code</a>
   
</body>
</html>
