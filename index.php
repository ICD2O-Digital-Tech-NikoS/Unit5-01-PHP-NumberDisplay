<!DOCTYPE html>
<html>

  <head>
    <!-- Meta data section -->
    <meta charset="utf-8">
    <meta name="description" content="Number Display, Using Javascript">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Niko Shivkumar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_index/favicon-16x16.png">
    <link rel="manifest" href="./favicon_index/site.webmanifest">
  
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Number Display</title>
  </head>

  <body>
    <h1>Number Display</h1>
    <h3>Enter a minimum and a maximum, then the program will display all numbers from your minimum to maximum numbers.</h3>
    <!-- form for user input for min and max -->
    <form action="results.php" method="post" target="results">  
      <label for="userMin">Enter a number</label>
      <input type="number" id="usermin" name="usermin" step="1" placeholder="Enter a Minimum"><br><br>
      <label for="userMax">Enter a number</label>
      <input type="number" id="usermax" name="usermax" step="1" placeholder="Enter a Maximum"><br><br>
      <input type="submit" value="submit">
    </form>
    <iframe id="results" name="results">
      
    </iframe>
  </body>

</html>
