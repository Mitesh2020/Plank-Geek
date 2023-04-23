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

<h1 class="display-3 bg-success text-center text-white"><font style="opacity:0.8;">Team Members</font></h1>


<div class="row">
<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:250px;">
  <img src="https://media.istockphoto.com/id/1371904269/vector/young-smiling-woman-ann-avatar-3d-vector-people-character-illustration-cartoon-minimal-style.jpg?s=612x612&w=0&k=20&c=fvlScoAc321lyXuhu4EdcLaTmUuNaUW5Qv6Mx2Lo4Y0=" class="card-img-top w-100 h-100" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title text-center">Mahima Solanki</h5>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:50px;">
  <img src="https://img.freepik.com/premium-vector/young-smiling-african-man-avatar-3d-vector-people-character-illustration-cartoon-minimal-style_365941-883.jpg?w=2000" class="card-img-top w-100 h-100" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title text-center">Sagar Koradiya</h5>
  </div>
</div>

<div class="card " style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:50px;">
  <img src="https://img.freepik.com/premium-vector/young-smiling-man-avatar-man-with-brown-beard-mustache-hair-wearing-yellow-sweater-sweatshirt-3d-vector-people-character-illustration-cartoon-minimal-style_365941-860.jpg" class="card-img-top w-100 h-100" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title text-center">Mitesh Rathod</h5>
  </div>
</div>
</div>


<div class="row" style="margin-bottom:50px;">
<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:250px;">
  <img src="https://img.freepik.com/premium-vector/young-smiling-man-adam-avatar-3d-vector-people-character-illustration-cartoon-minimal-style_365941-687.jpg?w=2000" class="card-img-top w-100 h-100" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title text-center">Harsh Uchadiya</h5>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:50px;">
  <img src="https://media.istockphoto.com/id/1389823037/vector/young-smiling-woman-mia-avatar-3d-vector-people-character-illustration-cartoon-minimal-style.jpg?s=612x612&w=0&k=20&c=ciwsDqBIy3mcTxhWN4I1S-kKSTvjoN1einMrQawNZDQ=" class="card-img-top w-100 h-100" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title text-center">Mitsu Patel</h5>
  </div>
</div>

<div class="card" style="width: 18rem; padding: 10px 10px; margin:10px; margin-top:100px; margin-left:50px;">
  <img src="https://img.freepik.com/premium-vector/young-smiling-man-3d-avatar-happy-guy_165429-1393.jpg" class="card-img-top w-100 h-100" alt="..." style="margin-left:auto; margin-right:auto;">
  <div class="card-body">
    <h5 class="card-title text-center">Darsh Vankawala</h5>
  </div>
</div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
