<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Advanced</title>
</head>
<body>
  <div class="container my-5">
    <form action="advanced.php" method="POST">
      <label class="my-2" for="value">Enter °F to get °C</label>
      <input class="my-2" type="number" name="value" id="value">
      <input class="my-2"  type="submit" name="submit" class="btn btn-outline-light col-4 my-2">
    </form>


  <?php
  function getCelsius($far){
    $Celsius = ($far - 32) / 1.8;
    return $Celsius;
  }


  if (isset($_POST["submit"])){
    if( $_POST["value"] ){
    $celsius = getCelsius((int)$_POST['value']);
    echo "<p class='my-2'>Temp is $celsius °C</p>";
    } else { echo "<p class='my-2 text-secondary'>First you need to put the the value</p>";}
  }
  ?>
  </div>
</body>
</html>

