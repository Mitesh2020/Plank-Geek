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

<h1 class="display-3 bg-success text-center text-white"><font style="opacity:0.8;">Contribute</font></h1>

<form class="text-white" style="margin-bottom:100px;" action="upload.php" method="POST" enctype="multipart/form-data">
    <h1 class="text-center opacity-50" style="margin-top:50px; margin-bottom:50px;">Plant Details</h1>
    <label style="margin-left:500px;">Image :</label>
    <input type="file" name="image"  required/><br><br>
    <label style="margin-left:500px;">Name :</label>
    <input type="text" placeholder="eg. Rose, Snake Plant etc." name="name" size="50" required/><br><br>
    <label style="margin-left:508px;">Type :</label>
    <select id="options" name="options" required>
  <option value="Angiosperms">Angiosperms</option>
  <option value="Gymnosperms">Gymnosperms</option>
  <option value="Ferns">Ferns</option>
  <option value="Mosses">Mosses</option>
  <option value="Algae">Algae</option>
  <option value="Fungi">Fungi</option>
</select><br><br>
    <label style="margin-left:500px;">Water :</label>
    <input type="text" placeholder="eg. In every 2-4 weeks." name="water" size="50" required/><br><br>
    <label style="margin-left:453px;">Temperature :</label>
    <input type="text" placeholder="eg. Between 60-85°F (15-29°C)." name="temperature" size="50" required/><br><br>
    <label style="margin-left:488px;">Best for :</label>
    <input type="text" placeholder="eg. Indoor/Outdoor." name="best" size="50" required/><br><br>
    <input type="submit" style="margin-left:553px;" class="btn btn-outline-success" name="submit"/><br><br>
</form>



<?php include 'footer.php'; ?>
</body>
</html>


