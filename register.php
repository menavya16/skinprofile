<?php
include "db/formhandler.php";
global $database;

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link href="style.css?v={random number/string}" type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

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
  <form action="register.php" method="POST" class="reg">
    <div class="text text-center">
    <label class="question animated fadeInUp">Username (*)</label> <input type="text" name="uname_reg" required class="animated fadeInUp"/><br><br>
    <label class="question animated fadeInUp delay-1s">Password (*)</label> <input type="password" name="pswd_reg" required class="animated fadeInUp delay-1s"/><br><br>
    <label class="question animated fadeInUp delay-2s">Confirm password (*)</label> <input type="password" name="pswd2_reg" required class="animated fadeInUp delay-2s"/><br><br>
    <label class="question animated fadeInUp delay-3s">Phone (*)</label> <input type="text" name="phone" required class="animated fadeInUp delay-3s"/><br><br>
    <label class="question animated fadeInUp delay-4s">Budget (*)</label>
			<select name="budget" class="animated fadeInUp delay-4s">
	      <option value="Low">Low ($0-$40 per product)</option>
	      <option value="Med">Medium ($40-$100 per product)</option>
	      <option value="High">High ($100-$200 per product)</option>
	      <option value="Very">Very high ($200+ per product)</option>
	    </select><br><br>
    <label class="question animated fadeInUp delay-5s">What is your skin type? </label>
      <select name="skintype" class="animated fadeInUp delay-5s">
        <option value="sensitive">Sensitive</option>
        <option value="dry">Dry</option>
        <option value="oily">Oily</option>
        <option value="combination">Combination</option>
        <option value="normal">Normal</option>
      </select><br><br>
    <label class="question animated fadeInUp delay-5s"> Do you have any known skin disease(s)? </label><br>
      <input type="checkbox" name="skindisease[]" value="eczema" class="animated fadeInUp delay-5s">Eczema &nbsp;
      <input type="checkbox" name="skindisease[]" value="psoriasis" class="animated fadeInUp delay-5s">Psoriasis &nbsp;
      <input type="checkbox" name="skindisease[]" value="rosea" class="animated fadeInUp delay-5s">Rosea<br><br>
    <label class="question animated fadeInUp delay-5s"> Do you have any skin concerns? </label><br>
      <input type="checkbox" name="skinconcerns[]" value="acne" class="animated fadeInUp delay-5s">Acne, breakouts &nbsp;
      <input type="checkbox" name="skinconcerns[]" value="wrinkles" class="animated fadeInUp delay-5s">Wrinkles &nbsp;
      <input type="checkbox" name="skinconcerns[]" value="blackhead" class="animated fadeInUp delay-5s">Blackheads<br><br><br>
    <button type="submit" name="registration" class="btn btn-outline-secondary btn-lg">Register! </button>
		Click <a href="index.php">here</a> to return.
		</div>

  </form>


</body>

</html>
