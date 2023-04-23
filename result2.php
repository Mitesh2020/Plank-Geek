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

    // Select all data from the 'contribute' table that matches the search term
    $sql = "SELECT * FROM `contribute` WHERE `name` LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    // Check if any data was returned
    if ($result->num_rows > 0) {
        // Output each row of data
        while($row = $result->fetch_assoc()) {
            echo "<div class='card' style='width: 18rem;'>";
            echo "<img src='" . $row["image"] . "' class='card-img-top' alt='...'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row["name"] . "</h5>";
            echo "<p class='card-text'>" . $row["type"] . "</p>";
            echo "<p class='card-text'>" . $row["water"] . "</p>";
            echo "<p class='card-text'>" . $row["temperature"] . "</p>";
            echo "<p class='card-text'>" . $row["best"] . "</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No data found.";
    }
}

// Close the database connection
$conn->close();
?>
