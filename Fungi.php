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

<h1 class="display-3 bg-success text-center text-white"><font style="opacity:0.8;">Fungi</font></h1>

<div class="text-white text-center" style="margin-top:50px; margin-left:70px; margin-right:50px; font-size:20px;">
Fungi are a group of organisms that are different from plants, animals, and bacteria.
</div>

<div class="row" style="margin-bottom:100px;">
<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:125px;">
  <img src="https://img.freepik.com/premium-photo/group-brown-cap-boletus-edulis-isolated-white-background-edible-mushrooms-kitchen-nobody_358642-1755.jpg" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mushrooms</h5>
    <p class="card-text"><i>Water</i> : 2-3 times per day.</p>
    <p class="card-text"><i>Temperature</i> : Between 60-75°F (15-24°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://thumbs.dreamstime.com/b/instant-yeast-white-background-active-dry-yeast-113259286.jpg" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Yeasts</h5>
    <p class="card-text"><i>Water</i> : The amount of water needed for yeast will also depend on the specific application.</p>
    <p class="card-text"><i>Temperature</i> : Bake between 35-45°C (95-115°F). </p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Spinellus_fusiger_51504.jpg/220px-Spinellus_fusiger_51504.jpg" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Molds</h5>
    <p class="card-text"><i>Water</i> : Not need to be watered as they obtain their moisture from their surroundings. </p>
    <p class="card-text"><i>Temperature</i> : Between 60-80°F (15-27°C).</p>
    <p class="card-text"><i>Best For</i> : Indoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px;">
  <img src="https://bowls-central.co.uk/wp-content/uploads/2016/11/bermuda-grass-with-mycorrhizae.jpg" class="card-img-top w-100 h-50" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mycorrhizal fungi</h5>
    <p class="card-text"><i>Water</i> :  Not need direct watering as they are symbiotic fungi that attach themselves to plant roots and help the plant absorb water and nutrients from the soil.</p>
    <p class="card-text"><i>Temperature</i> : Between 20-25°C (68-77°F).</p>
    <p class="card-text"><i>Best For</i> : Outdoors.</p>
    <a href="#" class="btn btn-primary">More information</a>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
