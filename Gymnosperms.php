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
          <a class="nav-link active" aria-current="page" href="home.php">Contribute</a>
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

<h1 class="display-3 bg-success text-center text-white"><font style="opacity:0.8;">Gymnosperms</font></h1>

<div class="text-white text-center" style="margin-top:50px; margin-left:70px; margin-right:50px; font-size:20px;">
Gymnosperms are a group of plants that produce seeds but do not produce flowers or fruits. They include conifers, cycads, and ginkgoes and are often found in cold or dry environments.
</div>

<div class="row" style="margin-bottom:100px;">
<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:125px;">
  <img src="https://i.pinimg.com/736x/e2/4a/eb/e24aebfe1a0ad81cf936f2872ef59b00.jpg" class="card-img-top w-50 h-50" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title">Conifers</h5>
    <p class="card-text"><i>Water</i> : In every 7-10 days.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-80°F (15-27°C).</p>
    <p class="card-text"><i>Best For</i> : Outdoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://thumbs.dreamstime.com/b/cycas-palm-tree-isolated-white-background-33705671.jpg" class="card-img-top w-50 h-50" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title">Cycads</h5>
    <p class="card-text"><i>Water</i> : In every 2-3 weeks.</p>
    <p class="card-text"><i>Temperature</i> : Between 50°F(10°C) to 90°F(32°C).</p>
    <p class="card-text"><i>Best For</i> : Outdoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://www.arboquebecium.com/assets/documents/cart/product/pictures/ginkgo_biloba.jpg" class="card-img-top w-50 h-50" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title">Ginkgoes</h5>
    <p class="card-text"><i>Water</i> : Once a week.</p>
    <p class="card-text"><i>Temperature</i> : Between 60 to 75 degrees Fahrenheit (15 to 24 degrees Celsius).</p>
    <p class="card-text"><i>Best For</i> : Outdoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://cdn.britannica.com/82/171282-050-B03ADB33/Welwitschia-mirabilis-Namibia.jpg" class="card-img-top w-100 h-50" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title">Gnetophytes</h5>
    <p class="card-text"><i>Water</i> : Once a week.</p>
    <p class="card-text"><i>Temperature</i> : Between 50 to 80 degrees Fahrenheit (10 to 27 degrees Celsius).</p>
    <p class="card-text"><i>Best For</i> : Outdoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
