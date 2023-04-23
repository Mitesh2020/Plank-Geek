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

<h1 class="display-3 bg-success text-center text-white"><font style="opacity:0.8;">Algae</font></h1>

<div class="text-white text-center" style="margin-top:50px; margin-left:70px; margin-right:50px; font-size:20px;">
Algae are diverse, photosynthetic organisms that can be found in water and on land.
</div>

<div class="row" style="margin-bottom:100px;">
<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:125px;">
  <img src="https://seamboth.files.wordpress.com/2019/12/vaucheria_sp_maasarvi_essi-keskinen_metsc3a4hallitus_2015-11ed.jpg?w=1024" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Diatoms</h5>
    <p class="card-text"><i>Water</i> : Prefer water with a pH between 6.5 and 8.5.</p>
    <p class="card-text"><i>Temperature</i> : 60-80°F (15-27°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://www.reef2reef.com/attachments/fish027-jpg.32721/" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dinoflagellates</h5>
    <p class="card-text"><i>Water</i> : Water with a pH between 7.0 and 8.5.</p>
    <p class="card-text"><i>Temperature</i> : Between 68-77°F (20-25°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://media.istockphoto.com/id/1013425198/photo/freshwater-algae-on-white-background.jpg?s=170667a&w=0&k=20&c=5v324xiYd5HznIjzTmU3P6JXFYIN_lVucUG32Nfj55E=" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Green algae</h5>
    <p class="card-text"><i>Water</i> : pH between 7.0 and 8.5.</p>
    <p class="card-text"><i>Temperature</i> : Between 68-77°F (20-25°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://ediblemarinandwinecountry.ediblecommunities.com/sites/default/files/images/article/red-seaweed-1.jpg" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Red algae</h5>
    <p class="card-text"><i>Water</i> : pH range between 6.5 and 8.0.</p>
    <p class="card-text"><i>Temperature</i> : Between 15°C to 25°C (59°F to 77°F).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
