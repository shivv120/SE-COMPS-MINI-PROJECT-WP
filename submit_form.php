<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Community</title>
  <link rel="stylesheet" href="community.css">

  <style>
    img{
      position: relative;
      left: 10%;
      border-radius: 10%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Share your thoughts</h2>
    <br>
    <form action="" method="post" id="contact-form">
      <div class="form-group">
        <label class="lab" for="name">Name:</label>
        <input type="text" name="name" required>
      </div>
      <div class="form-group">
        <label class="lab" for="email">Email:</label>
        <input type="email" name="email" required>
      </div>
      <div class="form-group">
        <label class="lab" for="message">Message:</label>
        <textarea name="message" rows="6" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
  <!-- Image on the right of the container -->
  <img src="https://img.freepik.com/free-vector/diverse-crowd-people-different-ages-races_74855-5235.jpg" alt="Diverse Crowd">
    
  <h2 style="position:relative  ; bottom: 250px; right: 350px;">Lets build a stronger community!!</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Database connection parameters
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "community"; // Replace with your actual database name

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    $stmt = $conn->prepare("INSERT INTO community1 (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute(); 
    $stmt->close();
    $conn->close();
  }
}
?>
</body>
</html>
