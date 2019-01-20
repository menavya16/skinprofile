<?php
  session_start();
  include "server.php";
?>

<!DOCTYPE html>
<html>
<head>
<title> User homepage </title>
<script>
  var avoid_list = <?php echo(json_encode($avoid_list)); ?>
</script>
<script src="user/index.php"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>

<body>
  <!-- Form to recommend products to the user -->
  <form action="index.php" method="POST">
    <label> Are you looking for a skincare product or a routine? <label>
    <input type="radio" name="choice" value="product">Product </input>
    <input type="radio" name="choice" value="routine">Routine</input><br>
    <button type="submit" name="recommend">Recommend me!</button>
  </form>

</body>


</html>
