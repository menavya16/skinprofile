<?php
session_start();
print_r($_SESSION);
?>


<html>
<head>
<title> User homepage </title>
</head>

<body>
  <!-- Form to recommend products to the user -->
  <form action="index.php" method="POST">
    <label> Are you looking for a skincare product or a routine? <label>
    <input type="radio" name="choice" value="product">Product </input>
    <input type="radio" name="choice" value="routine">Routine</input><br>
    <label> What is your budget? </label>
    <select name="budget">
      <option value="Low">Low ($0-$40 per product)</option>
      <option value="Med">Medium ($40-$100 per product)</option>
      <option value="High">High ($100-$200 per product)</option>
      <option value="Very">Very high ($200+ per product)</option>
    </select><br>
    <button type="submit" name="recommend">Recommend me!</button>
  </form>

</body>


</html>
