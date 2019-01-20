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
