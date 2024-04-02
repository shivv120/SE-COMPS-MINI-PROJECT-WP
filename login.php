<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <div action="">
            <h1>Login</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="input-box">
                    <input type="text" name="uemail" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="upass" placeholder="Password" required>
                    <i class='bx bxs-lock'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me </label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            <div class="register-link">
                <p>Don't have an account? <a href="registrationshiv.php">Register!</a></p>
            </div>
            <?php if(isset($error)) { ?>
                <div class="error"><?php echo $error; ?></div>
            <?php } ?>
        </div>
    </div>

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
        $email = $_POST['uemail'];
        $pass = $_POST['upass'];

        // Connect to MySQL database
        $conn = mysqli_connect($host, $user, $password, $database_name);
        if (!$conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }

        // Check if the email exists in the database
        $check_query = "SELECT * FROM registration WHERE email='$email'";
        $result = mysqli_query($conn, $check_query);

        if ($result && mysqli_num_rows($result) > 0) {
            // Email exists, proceed with password verification
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            // Verify password
            if (password_verify($pass, $hashed_password)) {
                // Password is correct, set session and redirect
                $_SESSION['email'] = $email;
                $_SESSION['fname'] = $row['Full_name']; // Store name in session
                echo "<script>alert('Login successful');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
                exit();
            } else {
                // Password is incorrect
                echo "<script>alert('Invalid password: $pass, $hashed_password');</script>";
            }
        } else {
            // Email does not exist
            echo "<script>alert('Invalid username');</script>";
        }
        mysqli_close($conn);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

</body>
</html>

