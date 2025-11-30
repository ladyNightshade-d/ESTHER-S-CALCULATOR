<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to the project that transform to degree</h2>
    <form method="POST" action="#">
    <input type="text" name="degree" placeholder="Enter to transform to degree"><br><br>
    <button name="transform" class="transform">transform</button>
</form>
    
    <?php
    //if(isset($_POST['trna'])){
              //$getIt=$_POST['degree'];
            //  $outcome=$_POST['res'];
          //$ou=  $getIt+273.15;
        //  echo "$ou";


  //  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['degree'])) {
    $X = (float) $_POST['degree'];
    $result = $X + 273.15;
    echo "The temperature in Kelvin is: " . $result;

  }
      
    ?>
    
</body>
</html>