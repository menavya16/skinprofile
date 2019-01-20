<?php
session_start();
include "server.php";
?>

<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Routine recommendation</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="../style.css?v={random number/string}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <body id = "page-top">
      <div class="spacing">
        <div id=header>
            <p class="text-center">A skin routine perfect for you</p>
        </div>
      </div>
      <div class="text-center cursive">
          <p id="profile"></p>
          <p id="display"></p>
      </div>
      <div class="text-center">
        <a href="../search/productSearch.php" class="btn btn-outline-secondary btn-lg">Discover More</a>
      </div>

      <script>
        var avoid_list = <?php echo(json_encode($avoid_list)); ?>;
        document.getElementById('profile').innerHTML = "Based on these ingredients you should avoid: " + avoid_list;
        document.getElementById('display').innerHTML = "Cleanser: <br> Toner: <br> Moisturizer: <br> Sunscreen: <br>";
        //main(avoid_list);
      </script>
    </body>
</html>
