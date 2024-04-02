<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrations</title>
  <style>
    body {
      background-color: #000000;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .right-side {
      flex: 1;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url("https://images4.alphacoders.com/360/36074.jpg");
      background-size: cover;
    }

    .right-side form {
      width: 80%;
      max-width: 300px;
      padding: 100px;
      background: rgba(220, 217, 225, 0.4);
      border-radius: 40px;
    }

    .right-side label {
      display: block;
      margin-bottom: 5px;
    }

    .right-side input[type="text"],
    .right-side input[type="email"],
    .right-side input[type="password"],
    .right-side select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .right-side input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    .right-side input[type="submit"]:hover {
      background-color: #0056b3;
    }
    span{
        color: rgb(254, 6, 6);
    }
  </style>
  <!-- <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script> -->
</head>
<body>
  <div class="container">

    <div class="right-side">

      <form action="" method="post">
        <div class="form">
          <label for="fname">Full Name:</label><br>
          <input type="text" id="fname" name="fname" required oninvalid="this.setCustomValidity('Enter full name')" oninput="this.setCustomValidity('')"><br>
          <!-- <span id="Fname-error"></span> -->
        </div>
        <div class="form">
    <label for="gender">Gender:</label><br>
    <select name="gender" required>
        <option value="" disabled selected>Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">Others</option>
    </select><br>
    <!-- <span id="gender-error"></span> -->
</div>

        <div class="form">
          <label for="phone">Phone:</label><br>
          <input type="text" id="phone" name="phone" required oninvalid="this.setCustomValidity('Enter phone number')" oninput="this.setCustomValidity('')" maxlength="10"><br>
          <!-- <span id="phone-error"></span> -->
        </div>
        <div class="form">
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" required oninvalid="this.setCustomValidity('Enter Email in correct form')" oninput="this.setCustomValidity('')""><br>
          <!-- <span id="email-error"></span> -->
        </div>
        <div class="form">
          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password" required oninvalid="this.setCustomValidity('Enter password')" oninput="this.setCustomValidity('')"><br>
          <!-- <span id="password-error"></span> -->
        </div>
        <div class="form">
          <input type="submit" value="Register" >
          <!-- <span id="submit-error"></span> -->
        </div>
      </form>

    </div>

  </div>
<!-- <script src="reg.js"></script> -->
<?php
session_start(); // Start session to manage user sessions

$host = "localhost";
$user = "root";
$database_name = "sars_wp";
$password = "";

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $name = $_POST['fname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        // Validate full name format (only letters and spaces allowed)
        if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
            throw new Exception("Please enter a valid full name (only letters and spaces allowed)");
        }
        // Validate email format
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Please enter a valid email");
        }
        // Validate password format
        else if (!preg_match("/^[a-zA-Z0-9]{8,}$/", $pass)) {
            throw new Exception("Password should be a combination of letters and numbers and should be minimum 8 characters");
        } else {
            // Hash the password
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            // Connect to MySQL database
            $conn = mysqli_connect($host, $user, $password, $database_name);
            if (!$conn) {
                throw new Exception("Connection failed: " . mysqli_connect_error());
            }

            // Check if the email already exists in the database
            $check_query = "SELECT * FROM registration WHERE email='$email'";
            $result = mysqli_query($conn, $check_query);
            if (mysqli_num_rows($result) > 0) {
                throw new Exception("This email is already registered. Please use a different email.");
            } else {
                // Insert data into the database with hashed password
                $insert_query = "INSERT INTO registration (Full_name, Gender, Phone, email, password) VALUES ('$name', '$gender', '$phone', '$email', '$hashed_password')";
                if (!mysqli_query($conn, $insert_query)) {
                    throw new Exception("Registration failed. Please try again later.");
                } else {
                    $_SESSION['email'] = $email; // Store email in session
                    echo "<script>alert('Successfully signed up! Your email is your username');</script>";
                    // Redirect to dashboard or any other page after successful registration
                    header("Location: login.php");
                    exit(); // Stop executing the current script
                }
            }
        }
    } catch (Exception $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}
?>




</body>
</html>
