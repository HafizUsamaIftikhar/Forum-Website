<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - PHP Forum</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f5f7fa;
      color: #333;
    }

    /* ===== NAVIGATION BAR ===== */
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

    /* ===== SLIDER ===== */
    .slider {
      position: relative;
      width: 100%;
      max-height: 450px;
      overflow: hidden;
      border-bottom: 3px solid #00796b;
    }

    .slides img {
      width: 100%;
      height: 450px;
      object-fit: cover;
      display: none;
    }

    .slides img.active {
      display: block;
      animation: fade 1s ease-in-out;
    }

    @keyframes fade {
      from { opacity: 0.4; }
      to { opacity: 1; }
    }

    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      padding: 10px 18px;
      color: white;
      font-size: 25px;
      background: rgba(0, 0, 0, 0.4);
      border-radius: 50%;
      transition: 0.3s;
      user-select: none;
    }

    .prev:hover, .next:hover {
      background: rgba(0, 0, 0, 0.7);
    }

    .prev { left: 20px; }
    .next { right: 20px; }

    /* ===== MAIN SECTIONS ===== */
    section {
      text-align: center;
      padding: 60px 20px;
      background: #fff;
      margin: 40px auto;
      max-width: 1100px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    section h2 {
      color: #004d40;
      font-size: 1.8rem;
      margin-bottom: 15px;
    }

    section p {
      color: #555;
      font-size: 1.05rem;
      margin-bottom: 25px;
    }

    /* ===== ABOUT SECTION ===== */
    .about {
      border-left: 5px solid #00796b;
    }

    /* ===== CATEGORIES ===== */
    .cat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      margin: 40px auto;
      max-width: 1100px;
    }

    .cat-card {
      background: #e0f2f1;
      padding: 25px;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
      text-align: center;
      text-decoration: none;
      color: #004d40;
      box-shadow: 0 1px 5px rgba(0,0,0,0.08);
    }

    .cat-card:hover {
      background: #80cbc4;
      color: white;
      transform: translateY(-5px);
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

    .user-info {
      font-weight: 500;
      color: #004d40;
    }

    /* ===== IMPROVED LOGOUT BUTTON ===== */
    .logout-btn {
      background: #00796b;
      color: white;
      padding: 8px 16px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 2px 8px rgba(233, 30, 99, 0.4);
    }

    .logout-btn:hover {
      background: linear-gradient(45deg, #e91e63, #ff1744);
      box-shadow: 0 4px 15px rgba(233, 30, 99, 0.6);
      transform: translateY(-2px);
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
    <?php if (isset($_SESSION['username'])): ?>
      <span class="user-info">👋 Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
      <a href="logout.php" class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    <?php else: ?>
      <a href="register.php">Register</a>
      <a href="login.php">Login</a>
    <?php endif; ?>
  </div>
</nav>

<!-- ===== SLIDER ===== -->
<div class="slider">
  <div class="slides">
    <img src="images/slide1.jpg" class="active" alt="Slide 1">
    <img src="images/slide2.jpg" alt="Slide 2">
    <img src="images/slide3.jpg" alt="Slide 3">
    <img src="images/slide4.jpg" alt="Slide 4">
    <img src="images/slide5.jpg" alt="Slide 5">
  </div>
  <span class="prev" onclick="changeSlide(-1)">&#10094;</span>
  <span class="next" onclick="changeSlide(1)">&#10095;</span>
</div>

<!-- ===== ABOUT SECTION ===== -->
<section class="about">
  <h2>About PHP Forum</h2>
  <p>PHP Forum is a community-driven platform for developers to connect, share knowledge, and grow together. Whether you’re just starting out or an experienced coder, you’ll find valuable insights and discussions here.</p>
</section>

<!-- ===== CATEGORIES ===== -->
<div class="cat-grid">
  <a href="category_php_mysql.php" class="cat-card">💻 PHP & MySQL</a>
  <a href="category_webdev.php" class="cat-card">🌐 Web Development</a>
  <a href="category_frameworks.php" class="cat-card">⚙️ Frameworks</a>
  <a href="category_frontend.php" class="cat-card">🎨 Frontend (HTML, CSS, JS)</a>
  <a href="category_projects.php" class="cat-card">🧩 Projects & Help</a>
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

<script>
  let slideIndex = 0;
  const slides = document.querySelectorAll(".slides img");
  function showSlide(index) {
    slides.forEach((slide, i) => slide.classList.toggle("active", i === index));
  }
  function changeSlide(direction) {
    slideIndex = (slideIndex + direction + slides.length) % slides.length;
    showSlide(slideIndex);
  }
  setInterval(() => changeSlide(1), 5000);
</script>

</body>
</html>
