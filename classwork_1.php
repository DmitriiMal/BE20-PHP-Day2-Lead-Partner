<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Classwork 1</title>
</head>
<body>
  <div class="container mt-5">
  <!-- ---------- -->
  <h1>Exercise 1</h1>
  <!-- ---------- -->
<form action="classwork_1.php" method="POST" class="row row-cols-2">

  <label for="firstname" class="col-4 my-2">Enter your firstname</label>
  <input type="text" name="firstname" id="firstname" class="col-8 my-2">

  <label for="lastname" class="col-4 my-2">Enter your lastname</label>
  <input type="text" name="lastname" id="lastname" class="col-8 my-2">

  <input type="submit" name="submit" class="btn btn-outline-light col-4 my-2">

</form>

  <?php
if(isset($_POST['submit']))
{
  if(empty($_POST["firstname"]) && empty($_POST["lastname"]))
  {
    echo "<p class='text-secondary'>please insert your name, or please insert your surname</p>";

  } elseif (empty(($_POST['firstname'])))
  {
    echo "<p class='text-secondary'>please fill first name</p>";
  }
  elseif (empty(($_POST['lastname'])))
  {
    echo "<p class='text-secondary'>please fill your last name</p>";
  }
 else
 {
    echo "<h4 class='my-3 text-success-emphasis'>Welcome {$_POST["firstname"]} {$_POST["lastname"]}!</h4>";
 }
}
  ?>

  <hr class="mt-5">
  <!-- ---------- -->
  <h1>Exercise 2</h1>
  <!-- ---------- -->

  <?php
  $num1 = 3;
  $num2 = 2;

function divide($val1, $val2){
  $result = $val1 / $val2;
  return $result;
}
$value = divide($num1, $num2);
echo "<p>$num1 / $num2 = $value</p>"
  ?>

<hr class="mt-5">
  <!-- ---------- -->
  <h1>Exercise 3</h1>
  <!-- ---------- -->
  <?php
$num3 = 3;
$num4 = 4;
$num5 = 5;

function getSumAv($val1, $val2, $val3) {
  $sum = $val1 + $val2 + $val3;
  $average = $sum / 3;
  echo "<p>Sum of $val1, $val2 and $val3 is: <strong>$sum</strong></p>";
  echo "<p>Average of $val1, $val2 and $val3 is: <strong>$average</strong></p>";

}

getSumAv($num3, $num4, $num5);
  ?>

<hr class="mt-5">
  <!-- ---------- -->
  <h1>Exercise 4</h1>
  <!-- ---------- -->
  <?php
function getAreaVolume($width, $height, $depth){
  $area = $width * $height;
  $volume = $width * $height * $depth;

  echo "<p>The area of the box is: <strong>$area</strong></p>";
  echo "<p>The volume of the box is: <strong>$volume</strong></p>";
}

getAreaVolume(3, 4, 6);
// ????????????????????
  ?>

<hr class="mt-5">
  <!-- ---------- -->
  <h1>Exercise 5</h1>
  <!-- ---------- -->
<?php 

function convertTime($val){
  $hours = round($val / 60);
  $minutes = $val % 60;
  echo "$val minutes = $hours hour(s) and $minutes minute(s).";
}

convertTime(200);
?>

<hr class="mt-5">
  <!-- ---------- -->
  <h1>Exercise 6</h1>
  <!-- ---------- -->

  <form action="classwork_1.php" method="POST" class="row row-cols-2 mb-5">

  <label for="firstname" class="col-4 my-2">Enter your firstname</label>
  <input type="text" name="firstname" id="firstname" class="col-8 my-2">

  <label for="lastname" class="col-4 my-2">Enter your lastname</label>
  <input type="text" name="lastname" id="lastname" class="col-8 my-2">
  
  <label for="age" class="col-4 my-2">Enter your age</label>
  <input type="number" name="age" id="age" class="col-8 my-2">

  <label for="hobbies" class="col-4 my-2">Enter your hobbies</label>
  <textarea name="hobbies" id="hobbies" class="col-8 my-2" rows="4"></textarea>

  <input type="submit" name="submit" class="btn btn-outline-light col-4 my-2">

</form>

<?php 
if(isset($_POST['submit'])){
  if (strlen($_POST['firstname']) > 5){
    echo "<div class='text-success-emphasis'>{$_POST['firstname']}</div>";
  } else {echo "<div class='text-danger-emphasis'>{$_POST['firstname']}</div>";}
}

if(isset($_POST['submit'])){
  if (strlen($_POST['lastname']) > 5){
    echo "<div class='text-success-emphasis'>{$_POST['lastname']}</div>";
  } else {echo "<div class='text-danger-emphasis'>{$_POST['lastname']}</div>";}
}

if(isset($_POST['submit'])){
  if (strlen($_POST['hobbies']) > 5){
    echo "<div class='text-success-emphasis'>{$_POST['hobbies']}</div>";
  } else {echo "<div class='text-danger-emphasis'>{$_POST['hobbies']}</div>";}
}
?>
  </div>
</body>
</html>

<!-- strlen() -->