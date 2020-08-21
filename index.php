<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CGPA CALCULATOR </title>
    <link href="style.css" rel="stylesheet"> 
</head>

<body>
    <form method="post" action="<?php
       $req = $_POST["sem"];
       switch ($req) {
												case "1":
															echo "it1.php";
															break;
}?>">
    <h1>CGPA CALCULATOR</h1>
    <h2>Developed by <a href="https://www.linkedin.com/in/gowtham-s-516433182">Gowtham</a> and <a href="https://www.linkedin.com/in/raagul-t-91102016b">Raagul</a></h2>
    <h3>Regulation</h3>
    <select>
        <option value="2017">2017</option>
    </select>
    <h3>Department</h3>
    <select>
        <option value="it">IT</option>
    </select>
    <h3>Semester</h3>
    <select name="sem">
        <option value="1">1st semester</option>
        <option value="2">2nd semester</option>
        <option value="3">3rd semester</option>
        <option value="4">4th semester</option>
        <option value="5">5th semester</option>
        <option value="6">6th semester</option>
        <option value="7">7th semester</option>
        <option value="8">8th semester</option>
    </select>
    <br><br>
    <input type="submit" value="SUBMIT">
    </form>
    <br><br>
    <footer>&copy; 2020 S. Gowtham, T. Raagul. All Rights Reserved</footer>
</body>

</html>
