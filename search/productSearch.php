<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="theme-color" content="#000000" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/instantsearch.css@7/themes/algolia-min.css"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="./src/productSearch.css?v={random number/string}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="./src/app.css" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <title>skinprofile</title>
  </head>

  <body>
    <div class="ais-InstantSearch">
      <p class="header text-center">Discover Your Palette</p>

      <div class="center-panel">
        <div id="searchbox" class="ais-SearchBox"></div>
        <div id="hits"></div>
        <div id="pagination"></div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3.32.0/dist/algoliasearchLite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@3.0.0"></script>
    <script src="./src/app.js"></script>
  </body>
</html>
