<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CELSIUS TO FAHRENHEIT CONVERTER</title>
    <link rel="stylesheet" href="u.css">
</head>
<body>
    <div class="case">

<form method="POST">
    <label for="temperature"> Enter a temperature: </label>
    <input type="number" name= "temp" value="temperature" id="temperature" step="any" required>
    <div class="are">
          <button type="submit" name="Convert" value="C to F" class="button"> °C to  °F </button required>
          <button type="submit" name="Convert" value="F to C" class = "button"> °F to  °C </button required>

</form>
</div>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST" && isset ($_POST["temp"])){
$celsius= $_POST["celsius"];
$fahrenheit= ($celsius * 9/5) + 32;
echo "<h2>$celsius &deg;C = $fahrenheit &deg;F </h2>";
}
elseif($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fahrenheit"])){
$fahrenheit = $_POST["fahrenheit"];
$celsius = ($fahrenheit - 32)  * 5/9;
echo "<h2>$fahrenheit &deg;F = $celsius &deg;C</h2>";
}
?>
</body>
</html>