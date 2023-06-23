<!DOCTYPE html>
<html>
<head>
  <title>Lits Installer</title>
  <link rel="icon" type="image/x-icon" href="/images/lits-logo.png">
  <style>
    <?php include "common.css" ?>
  </style>
</head>
<body>
  <?php
    $inputErr = "";
    $input = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["input"])) {
        $inputErr = "Input is required";
      } else {
        $input = test_input($_POST["input"]);
      }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="input">Input</label>
    <input type="text" id="input" name="input">
    <span class="error">* <?php echo $inputErr;?></span><br />
    <input type="submit" name="final_submit" value="Finalize">
  </form>
  
  <?php
    if (empty($input)) {
      echo "Waiting...";
    } else {
      $input = test_input($_POST["input"]);
      echo "<h2>Your Input:</h2>";
      echo $input;
      echo "<br>";
      echo "Output";
      $output = shell_exec("pacman -Ss $input");
      echo "<pre>$output</pre>";
    }
  ?>
</body>
</html>
