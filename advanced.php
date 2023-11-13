<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Advanced</title>
  <style>
    img {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <form action="advanced.php" method="POST">
      <label class="my-2" for="value">Enter °F to get °C</label>
      <input class="my-2" type="number" name="value" id="value">
      <input class="my-2"  type="submit" name="submit" class="btn btn-outline-light col-4 my-2">
    </form>


  <?php
  

  if (isset($_POST["submit"])){
  function getCelsius($far){
    $images = [
      'winter' => 'https://images.unsplash.com/photo-1489674267075-cee793167910?q=80&w=2748&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
      'very_cold' => 'https://images.unsplash.com/photo-1422207134147-65fb81f59e38?q=80&w=2864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
      'cold' => 'https://images.unsplash.com/photo-1433162653888-a571db5ccccf?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
      'pleasant' => 'https://images.pexels.com/photos/19038474/pexels-photo-19038474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
      'warm' => 'https://images.unsplash.com/photo-1571353652572-0145557ba72d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
      'hot' => 'https://images.unsplash.com/photo-1493936734716-77ba6da66365?q=80&w=2938&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ];
    $celsius = round(($far - 32) / 1.8);
   
    if( empty($_POST["value"]) ) {
      echo "<p class='my-2 text-secondary'>First you need to put the the value</p>";
    }
    elseif ( $celsius <= 0) {
      echo "<p class='mt-2 text-info'>Temp is $celsius °C</p>
      <p class=' text-info'>Winter has come...</p>
      <img src='{$images['winter']}' alt=''>
      ";
    }elseif ( $celsius <= 5) {
      echo "<p class='mt-2 text-primary-emphasis'>Temp is $celsius °C</p>
      <p class='text-primary-emphasis'>Very cold</p>
      <img src='{$images['very_cold']}' alt=''>
      ";
    }elseif ( $celsius <= 10) {
      echo "<p class='mt-2 text-info-emphasis'>Temp is $celsius °C</p>
      <p class=' text-info-emphasis'>Cold</p>
      <img src='{$images['cold']}' alt=''>
      ";
    } elseif ( $celsius <= 15) {
      echo "<p class='mt-2 text-success-emphasis'>Temp is $celsius °C</p>
      <p class=' text-success-emphasis'>Pleasant weather</p>
      <img src='{$images['pleasant']}' alt=''>
      ";
    } elseif ( $celsius <= 20) {
      echo "<p class='mt-2 warning-emphasis'>Temp is $celsius °C</p>
      <p class=' warning-emphasis'>Warm</p>
      <img src='{$images['warm']}' alt=''>
      ";
    } elseif ( $celsius >= 21) {
      echo "<p class='mt-2 text-danger-emphasis'>Temp is $celsius °C</p>
      <p class=' text-danger-emphasis'>Hot</p>
      <img src='{$images['hot']}' alt=''>
      ";
    }else { 
      echo "<p class='mt-2 text-secondary'>Temp is $celsius °C</p>";
      }
  }
}
if( empty($_POST["value"]) ) {
  echo "<p class='my-2 text-secondary'>First you need to put the the value</p>";

}else{

  getCelsius($_POST['value']);
}

  ?>
  </div>
</body>
</html>


<!-- 

From 0°C to 5°C: Very cold

From 6°C to 10°C: Cold

From 11°C to 15°C: Pleasant

From 16°C to 20°C: Warm

Above 21°C: Hot 

-->

