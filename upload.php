<?php include 'googleTranslate.php'; ?>
<?php generateGoogleTranslate(); ?>
<?php
// Check if the form is submitted
if(isset($_POST["submit"])) {
  
  // Get form data
  $name = $_POST["name"];
  $type = $_POST["options"];
  $water = $_POST["water"];
  $temperature = $_POST["temperature"];
  $best = $_POST["best"];
  
  // Get the image data
  $image = $_FILES['image']['name'];
  $image_tmp = $_FILES['image']['tmp_name'];
  
  // Create a unique name for the image
  $image_name = time().'_'.$image;
  
  // Move the uploaded image to the images folder
  move_uploaded_file($image_tmp,$image_name);
  
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "plant";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Insert form data into the database
  $sql = "INSERT INTO contribute (image, name, type, water, temperature, best) VALUES ('$image_name', '$name', '$type', '$water', '$temperature', '$best')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
}
?>
