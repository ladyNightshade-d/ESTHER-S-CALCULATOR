
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temperature Converter</title>
    <style>
        body {
            background: #e3f2fd;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form {
            background: #fff;
            padding: 2em;
            margin-top: 2em;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.07);
            display: flex;
            flex-direction: column;
            gap: 1em;
            min-width: 320px;
        }
        label {
            font-size: 1.1em;
            color: #1565c0;
        }
        input[type="number"] {
            padding: 0.5em;
            border: 1px solid #90caf9;
            border-radius: 5px;
        }
        select {
            padding: 0.5em;
            border-radius: 5px;
            border: 1px solid #90caf9;
        }
        input[type="submit"] {
            background: #1565c0;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 0.7em;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.2s;
        }
        input[type="submit"]:hover {
            background: #039be5;
        }
        h2 {
            margin-top: 1.5em;
            color: #1976d2;
            font-weight: bold;
            background: #bbdefb;
            padding: 0.5em 1em;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }
    </style>
</head>
<body>
<form method="POST">
    <label for="temp">Enter Temperature:</label>
    <input type="number" id="temp" name="temp" step="any" required>
    <select name="direction">
        <option value="c_to_f">Celsius to Fahrenheit</option>
        <option value="f_to_c">Fahrenheit to Celsius</option>
    </select>
    <input type="submit" value="Convert">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["temp"])) {
        $temp = $_POST["temp"];
        $direction = $_POST["direction"];
        if ($direction == "c_to_f") {
            $converted = ($temp * 9/5) + 32;
            echo "<h2>$temp &deg;C = $converted &deg;F</h2>";
}
 elseif ($direction == "f_to_c") {
$converted = ($temp - 32) * 5/9;
echo "<h2>$temp &deg;F = $converted &deg;C</h2>";
}
}
?>
</body>
</html>