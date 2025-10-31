<?php
require_once __DIR__ . '/db.php';
session_start();

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $row['username'];
      echo "<script>alert('Login Successful!'); window.location='index.php';</script>";
    } else {
      echo "<script>alert('Wrong Password!');</script>";
    }
  } else {
    echo "<script>alert('User not found!');</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login - Forum</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
  <a href="index.php">🏠 Home</a>
  <a href="register.php">📝 Register</a>
  <a href="login.php">🔐 Login</a>
</nav>

<div class="container">
  <h2>Login</h2>
  <form method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login</button>
  </form>
  <p>Don’t have an account? <a href="register.php">Register</a></p>
</div>

</body>
</html>
