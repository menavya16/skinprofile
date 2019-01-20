<?php
$servername = "localhost";
$username = "iw3htp";
$password = "password";
$avoid_list = array();
//carry over username from login to know which user is logged in
$uname = $_SESSION['uname'];
$choice = "";


// create and connect to mysql server
if ( !( $database = mysqli_connect($servername, $username, $password)))
  die ("Could not connect to server");
// connecting to skincare database
if ( !(mysqli_select_db( $database, "skinprofiledb")) )
  die ("Error connecting to the skinprofile database");


$query = "select distinct ing from avoid_ing where concern in (select distinct user_concerns.concern from avoid_ing right join user_concerns on avoid_ing.concern=user_concerns.concern where uname='$uname');";
$result = mysqli_query($database, $query);

while ($row = $result->fetch_array()) {
  array_push($avoid_list , $row['ing']);
}

//$data = ['avoid_list' => $avoid_list ];
//$_POST['avoid_list'] = $avoid_list;

$json["avoid_list"] = $avoid_list;
$_SESSION['avoid_list'] = $avoid_list;
//echo json_encode($json);

if (isset($_POST['recommend'])) {

  $choice = $_POST['choice'];
  if ($choice == "product") {
    header("Location: ../recommendations.php");
  } else {
    header("Location: routine.php");
  }



}

?>
