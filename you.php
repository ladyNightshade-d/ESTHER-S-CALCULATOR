<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUADRATIC EQUATION SOLVER.</title>
    <style>
        form{
            margin-bottom: 20px;
            padding: 20px;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            background-color: #e8f5e9;
            max-width: 550px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: auto;

        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color:lightblue;
            align-items: center;
            justify-content: center;


        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;

        }
        input {
            margin-left: 10px;
            padding: 5px;
            width: 200px;

        }
        button {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;

        }
        button:hover {
            background-color: lightgray;
            color: black;
        }
        .form-box {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    max-width: 500px;
    margin: 20px auto;
    border: 3px solid #4CAF50;
}
.result-box {
    background: #ffffff;
    padding: 15px;
    border-radius: 8px;
    max-width: 500px;
    margin: 20px auto;   /* centers it */
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    font-family: Arial, sans-serif;
}

    </style>
</head>
<body>
<form action="#" method= "POST">
        <label>Enter a quandratic equation coefficient a: <input type="number" name="a" id="a"></label><br>
        <label>Enter a quandratic equation coefficient b: <input type="number" name="b" id="b"></label><br>
        <label>Enter a quandratic equation coefficient c: <input type="number" name="c" id="c"></label><br>
        <button type="submit">Solve</button>
    </form>
    <div class="form-box">
    <div class="result-box">
        
    <?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){


        $a=(float) $_POST['a'];
        $b=(float) $_POST['b'];
        $c=(float) $_POST['c'];
        $delter= $b * $b - 4 * $a * $c;
        echo "The delter is " . $delter . "<br>";
if($delter > 0){
            
        $x1=(-$b + sqrt($delter)) / (2*$a);
        $x2=(-$b - sqrt($delter)) / (2*$a);
        echo "The X1is ". $x1 . "<br>";
        echo "The X2is ". $x2 . "<br>";
        }

elseif($delter == 0){

    $x1=(-$b + sqrt($delter)) / (2*$a);
    $x2=(-$b - sqrt($delter)) / (2*$a);
    echo "The X1is " . $x1 . "<br>";
    echo "The X2is " . $x2 . "<br>";
}
   else {

        echo "The equation has no real roots";
    }

    }
    ?>
    </div>
    </div>
</body>
</html>