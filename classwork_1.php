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
  </div>
</body>
</html>