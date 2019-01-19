<?php
include "db/formhandler.php";
?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <title> Register </title>
</head>

<body>
  <div id="messages">
    <?php
      if (count($messages) > 0){
        foreach ($messages as $e) {
          echo "<b>".$e."</br></b>";
        }
      }
    ?>
  </div><br>
  <form action="login.php" method="POST">
    <label>Username (*)</label> <input type="text" name="uname_log" required/><br>
    <label>Password (*)</label> <input type="password" name="pswd_log" required/><br>
    <button type="submit" name="login">Login</button>
  </form>
</body>

</html>
