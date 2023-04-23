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

<h1 class="display-3 bg-success text-center text-white"><font style="opacity:0.8;">Mosses</font></h1>

<div class="text-white text-center" style="margin-top:50px; margin-left:70px; margin-right:50px; font-size:20px;">
Mosses are small, non-flowering plants that don't have roots, stems, or leaves. 
</div>

<div class="row" style="margin-bottom:100px;">
<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:125px;">
  <img src="https://thumbs.dreamstime.com/b/green-sphagnum-moss-circle-shape-isolated-white-background-197620579.jpg" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sphagnum Moss</h5>
    <p class="card-text"><i>Water</i> : Once every 1-2 weeks.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-75°F (15-24°C).</p>
    <p class="card-text"><i>Best For</i> : Outdoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://earthlingnature.files.wordpress.com/2021/11/original.jpg" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Haircap moss</h5>
    <p class="card-text"><i>Water</i> : Every 10-14 days.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-75°F (15-24°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://cdn.shopify.com/s/files/1/0524/2893/1225/products/0081_1024x1024@2x.jpg?v=1649506216" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cushion moss</h5>
    <p class="card-text"><i>Water</i> : Once or twice a week.</p>
    <p class="card-text"><i>Temperature</i> : Between 55-75°F (12-24°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://st3.depositphotos.com/1244546/16854/i/600/depositphotos_168543476-stock-photo-green-moss-on-white-background.jpg" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">sheet moss</h5>
    <p class="card-text"><i>Water</i> : Once or twice a week.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-75°F (15-24°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
