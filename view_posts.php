<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Posts - PHP Forum</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f5f7fa;
      color: #333;
    }

    /* ===== NAVBAR ===== */
    nav {
      background: linear-gradient(90deg, #e0f7fa, #ffffff);
      padding: 12px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .nav-left, .nav-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    nav a {
      color: #00695c;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
      font-size: 1rem;
    }

    nav a:hover {
      color: #004d40;
    }

    .logo {
      font-weight: 700;
      font-size: 1.3rem;
      color: #004d40;
    }

    .logout-btn {
      background: #00796b;
      color: white;
      padding: 8px 15px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .logout-btn:hover {
      background: #004d40;
    }

    /* ===== HEADER ===== */
    .header {
      text-align: center;
      padding: 60px 20px;
      background: linear-gradient(to right, #80cbc4, #b2dfdb);
      color: #004d40;
    }

    .header h1 {
      margin: 0;
      font-size: 2rem;
    }

    .header p {
      font-size: 1.1rem;
      margin-top: 10px;
    }

    /* ===== SEARCH & FILTER ===== */
    .filter-bar {
      display: flex;
      justify-content: center;
      gap: 10px;
      padding: 20px;
      flex-wrap: wrap;
      background: #ffffff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .filter-bar input, .filter-bar select {
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      width: 200px;
    }

    .filter-bar button {
      background: #00796b;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
    }

    .filter-bar button:hover {
      background: #004d40;
    }

    /* ===== POSTS GRID ===== */
    .posts-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      padding: 40px;
      max-width: 1200px;
      margin: auto;
    }

    .post-card {
      background: #ffffff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .post-card:hover {
      transform: translateY(-5px);
    }

    .post-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .post-content {
      padding: 20px;
    }

    .post-content h3 {
      color: #00796b;
      margin-top: 0;
    }

    .post-content p {
      color: #555;
      font-size: 0.95rem;
      margin: 10px 0;
    }

    .post-meta {
      font-size: 0.85rem;
      color: #777;
      margin-top: 8px;
    }

    /* ===== FOOTER ===== */
    footer {
      background: #004d40;
      color: #fff;
      text-align: center;
      padding: 40px 20px;
      margin-top: 60px;
    }

    .social-icons a {
      color: #fff;
      margin: 0 8px;
      font-size: 20px;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #b2dfdb;
    }

    footer .copyright {
      margin-top: 25px;
      font-size: 0.9rem;
      color: #a7ffeb;
    }
  </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav>
  <div class="nav-left">
    <a href="index.php" class="logo"><i class="fa-solid fa-code"></i> PHP Forum</a>
    <a href="index.php">Home</a>
    <a href="view_posts.php">Posts</a>
    <a href="create_post.php">Create Post</a>
  </div>
  <div class="nav-right">
    <a href="logout.php" class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>
</nav>

<!-- ===== HEADER ===== -->
<div class="header">
  <h1>All Forum Posts</h1>
  <p>Explore the latest questions, tutorials, and discussions by developers.</p>
</div>

<!-- ===== FILTER BAR ===== -->
<div class="filter-bar">
  <input type="text" placeholder="Search posts...">
  <select>
    <option value="">All Categories</option>
    <option value="php">PHP & MySQL</option>
    <option value="webdev">Web Development</option>
    <option value="frameworks">Frameworks</option>
    <option value="frontend">Frontend</option>
  </select>
  <button>Search</button>
</div>

<!-- ===== POSTS GRID ===== -->
<div class="posts-container">
  <!-- Post 1 -->
  <div class="post-card">
    <img src="images/post1.jpeg" alt="Post 1">
    <div class="post-content">
      <h3>How to Connect PHP with MySQL</h3>
      <p>Learn how to connect your PHP application with a MySQL database using MySQLi or PDO.</p>
      <div class="post-meta">Posted by <strong>Usama</strong> • 2 hrs ago</div>
    </div>
  </div>

  <!-- Post 2 -->
  <div class="post-card">
    <img src="images/post2.jpeg" alt="Post 2">
    <div class="post-content">
      <h3>Understanding PHP Sessions</h3>
      <p>Sessions are used to store user data across multiple pages. Here’s how they work in PHP.</p>
      <div class="post-meta">Posted by <strong>Ali</strong> • 6 hrs ago</div>
    </div>
  </div>

  <!-- Post 3 -->
  <div class="post-card">
    <img src="images/post3.jpeg" alt="Post 3">
    <div class="post-content">
      <h3>Deploying PHP on XAMPP</h3>
      <p>Step-by-step guide to host your PHP project on localhost using XAMPP server.</p>
      <div class="post-meta">Posted by <strong>Sarah</strong> • 1 day ago</div>
    </div>
  </div>

  <!-- Post 4 -->
  <div class="post-card">
    <img src="images/post4.jpeg" alt="Post 4">
    <div class="post-content">
      <h3>Best PHP Frameworks for 2025</h3>
      <p>Explore Laravel, CodeIgniter, and Symfony — the top frameworks for modern web apps.</p>
      <div class="post-meta">Posted by <strong>Ahmed</strong> • 2 days ago</div>
    </div>
  </div>
</div>

<!-- ===== FOOTER ===== -->
<footer>
  <p>Connect • Learn • Share — A community for passionate developers.</p>
  <div class="social-icons">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-github"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
  </div>
  <div class="copyright">
    &copy; <?php echo date('Y'); ?> PHP Forum. All Rights Reserved.
  </div>
</footer>

</body>
</html>
