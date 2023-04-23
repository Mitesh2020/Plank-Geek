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

<h1 class="display-3 bg-success text-center text-white"><font style="opacity:0.8;">Feature Plants</font></h1>

<div class="row" style="margin-bottom:100px;">
<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:125px;">
  <img src="https://thumbs.dreamstime.com/b/red-rose-4590099.jpg" class="card-img-top w-50 h-50 center" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title">Rose</h5>
    <p class="card-text"><i>Water</i> : In every 2-3 days.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-75°F (15-24°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://media.istockphoto.com/id/1168381749/photo/sansevieria-trifasciata-in-a-pot-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=DQuoFFPC3d7tpYs2Pp2wG4HWHEp--JZsSm3eXTTWmto=" class="card-img-top w-50 h-50" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title">Snake Plant</h5>
    <p class="card-text"><i>Water</i> : In every 2-4 weeks.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-85°F (15-29°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://cdn.shopify.com/s/files/1/0418/6131/6759/products/MoneyPlant-EpipremnumAureum_WhiteCeramicPot_100-120cm.jpg?v=1651254993" class="card-img-top w-50 h-50" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title">Money Plant</h5>
    <p class="card-text"><i>Water</i> : Once a week.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-80°F (16-27°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://m.media-amazon.com/images/I/514DWkqwUBL._SY741_.jpg" class="card-img-top w-50 h-50" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title">Cactus</h5>
    <p class="card-text"><i>Water</i> : Less frequently.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-90°F (15-32°C)</p>
    <p class="card-text"><i>Best For</i> : Outdoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
