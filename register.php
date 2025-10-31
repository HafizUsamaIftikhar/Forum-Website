<?php
require_once __DIR__ . '/db.php';

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $role = $_POST['role']; // 👈 now taking role from dropdown

  $query = "INSERT INTO users (username, email, password, role) 
            VALUES ('$username', '$email', '$password', '$role')";
  
  if (mysqli_query($conn, $query)) {
    echo "<script>alert('Registered Successfully!'); window.location='login.php';</script>";
  } else {
    echo "<script>alert('Error: Could not register.');</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register - Forum</title>
  <link rel="stylesheet" href="style.css">
  <style>
    select {
      width: 95%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
      font-size: 15px;
      transition: 0.3s;
      background: #fff;
    }
    select:focus {
      border-color: #4dd0e1;
      box-shadow: 0 0 6px rgba(77,208,225,0.4);
    }
  </style>
</head>
<body>

<nav>
  <a href="index.php">🏠 Home</a>
  <a href="register.php">📝 Register</a>
  <a href="login.php">🔐 Login</a>
</nav>

<div class="container">
  <h2>Create Account</h2>
  <form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <!-- 👇 New Role Dropdown -->
    <select name="role" required>
      <option value="" disabled selected>Select Role</option>
      <option value="user">User</option>
      <option value="admin">Admin</option>
    </select><br>

    <button type="submit" name="register">Register</button>
  </form>
  <p>Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>
