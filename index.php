<?php
define("TITLE", "Free Basic Calculator.");
date_default_timezone_set('Asia/Karachi');
$this_year = date('Y');



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Calculator</title>
    <style>
    .center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;

  </style>
  <style>
  .copy {
margin: auto;
width: 60%;
padding: 10px;

</style>
  </head>
  <body>
    <div class="center">
      <h1>Basic Calculator:</h1>
      <form>
        Enter Your First Number: <input type="text" name="num1" placeholder="Number 1"><br><br>
        Enter your Second Number: <input type="text" name="num2" placeholder="number 2">
        <select name="operater">
          <option>None</option>
          <option>Add</option>
          <option>Subtract</option>
          <option>Multiply</option>
          <option>Divide</option>

        </select>
<button type="submit" name="submit" value="submit">Submit</button>
      </form>
      <h2>Your Answer is:</h2>
      <?php
      if (isset($_GET['submit'])) {
        $number1 = $_GET['num1'];
        $number2 = $_GET['num2'];
        $operater = $_GET['operater'];
        $add = $number1 + $number2;
        $sub = $number1 - $number2;
        $mul = $number1 * $number2;
        $did = $number1 / $number2;
        switch ($operater) {
                  case 'None':
            echo "<h2>Pleaes Select an Operater.</h2>";
            break;
            case 'Add':
      echo "<h2> $add </h2>";
      break;
      case 'Subtract':
echo "<h2> $sub </h2>";
break;
case 'Multiply':
echo "<h2> $mul </h2>";
break;
case 'Divide':
echo "<h2> $did </h2>";
break;

        }
      }


       ?>

    </div>
    <br>
    <br>
    <div class="copy">
<hr>
<br>

    &copy; <?php echo $this_year ?> <a href="https://nearid.com" target="blank"><?php echo TITLE; ?></a>
    </div>
  </body>
</html>
