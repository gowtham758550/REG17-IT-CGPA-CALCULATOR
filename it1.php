<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <title>IT 1st semester</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <?php
    $s1 = $_POST["g1"];
    $s2 = $_POST["g2"];
    $s3 = $_POST["g3"];
    $s4 = $_POST["g4"];
    $s5 = $_POST["g5"];
    $s6 = $_POST["g6"];
    $s7 = $_POST["g7"];
    $s8 = $_POST["g8"];
    $ts1= $s1 * 4;
    $ts2=$s2 * 4;
    $ts3=$s3 * 3;
    $ts4=$s4 * 3;
    $ts5=$s5 * 3;
    $ts6=$s6 * 4;
    $ts7=$s7 * 2;
    $ts8=$s8 * 2;
    $tc=25;
    $gpa=($ts1+$ts2+$ts3+$ts4+$ts5+$ts6+$ts7+$ts8)/$tc;
   ?>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>INFORMATION TECHNOLOGY <br>1ST SEMESTER </h2><br><br>
        <h3>Communicative English HS8151<br>Credit :4</h3>
        <select name="g1">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select>
        <h3>Engineering Mathematics I MA8151<br>Credit :4</h3>
        <select name="g2">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select>
        <h3>Engineering Physics I PH8151<br>Credit :3</h3>
        <select name="g3">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
           </select>
        <h3>Engineering Chemistry CY8151<br>Credit :3</h3>
        <select name="g4">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select>
        <h3>Problem Solving and Python Programming GE8151<br>Credit: 3</h3>
        <select name="g5">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select>
        <h3>Engineering Graphics GE8152<br>Credit :4</></h3>
        <select name="g6">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select>
        <h3>Problem Solving and PythonProgramming Laboratory GE8161<br>Credit :2</h3>
        <select name="g7">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select>
        <h3>Physics and Chemistry Laboratory BS8161<br>Credit :2</h3>
        <select name="g8">
            <option value=10>O</option>
            <option value=9>A+</option>
            <option value=8>A</option>
            <option value=7>B+</option>
            <option value=6>B</option>
            <option value=0>RA</option>
        </select><br><br>
        <input type="submit" value="Calculate"><br><br>
       </form>
    <?php
        echo "Your gpa :$gpa";
    ?>
    </body>
</html>
