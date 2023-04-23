<?php include 'googleTranslate.php'; ?>
<html>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe' crossorigin='anonymous'></script>
</head>
<body class="bg-dark">
<?php generateGoogleTranslate(); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Plant Geek</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contribute.php">Contribute</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Plant Types
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Angiosperms.php">Angiosperms</a></li>
            <li><a class="dropdown-item" href="Gymnosperms.php">Gymnosperms</a></li>
            <li><a class="dropdown-item" href="Ferns.php">Ferns</a></li>
            <li><a class="dropdown-item" href="Mosses.php">Mosses</a></li>
            <li><a class="dropdown-item" href="Algae.php">Algae</a></li>
            <li><a class="dropdown-item" href="Fungi.php">Fungi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="result.php" method="POST">
        <input class="form-control me-2" type="search" placeholder="eg. Rose" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit" >Search</button>
      </form>
    </div>
  </div>
</nav>


<?php

// Replace the database connection details with your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if(isset($_POST['search'])) {
    // Get the search term from the form
    $searchTerm = $_POST['search'];
    echo "<h1 class='display-3 bg-success text-center text-white'><font style='opacity:0.8;'>Searched : $searchTerm</font></h1>";
    // Select all data from the 'contribute' table that matches the search term
    $sql = "SELECT * FROM `contribute` WHERE `name` LIKE '%$searchTerm%'";
    $result = $conn->query($sql);
    
    // Check if any data was returned
    if ($result->num_rows > 0) {
        // Output each row of data
        while($row = $result->fetch_assoc()) {
            $image = $row["image"];
            $name = $row["name"];
            $type = $row["type"];
            $water = $row["water"];
            $temperature = $row["temperature"];
            $best = $row["best"];

            
            echo "
            <html>
            <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe' crossorigin='anonymous'></script>
            </head>
            <body>
            <div class='row'>
            <div class='card' style='width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:auto; margin-right:auto; margin-bottom:50px;'>
  <img src='$image' class='card-img-top w-50 h-50 center' alt='...' style='margin-left:auto; margin-right:auto;'>
  <div class='card-body'>
    <h5 class='card-title'>$name</h5>
    <p class='card-text'><i>Type</i> : $type</p>
    <p class='card-text'><i>Water</i> : $water</p>
    <p class='card-text'><i>Temperature</i> : $temperature</p>
    <p class='card-text'><i>Best For</i> : $best</p>
    <a href='#' class='btn btn-primary'>More information</a>
  </div>
</div>
</div>
            </body>
            </html>
            ";
        }
    } else {
        echo "<p class='text-white text-center' style='margin-bottom:600px;'>Data not found!</p>";
    }
}

// Close the database connection
$conn->close();
?>
<?php include 'footer.php'; ?>
</body>
</html>




