<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Page</title>
</head>

<body>
  <h1>Enter Your Name</h1>
  <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="get">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name"><br><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name"><br><br>

    <input type="submit" value="Submit">
  </form>

  <?php
  $firstname = htmlspecialchars($_GET["first_name"]);
  $lastname = htmlspecialchars($_GET["last_name"]);

  if ($firstname != "" && $lastname != "") {
    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo " ";
    echo $lastname;
  } else {
    echo "Please enter both values";
  }
  ?>
</body>

</html>