<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects & Helps - PHP Forum</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f4f9f9;
      color: #333;
    }

    /* ===== NAVBAR ===== */
    nav {
      background: #00796b;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      gap: 20px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover {
      color: #b2dfdb;
    }

    /* ===== CONTAINER ===== */
    .container {
      max-width: 1000px;
      margin: 50px auto;
      background: #ffffff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    h1 {
      color: #004d40;
      text-align: center;
      margin-bottom: 20px;
      font-size: 2rem;
    }

    p {
      color: #555;
      font-size: 1.05rem;
      line-height: 1.7;
      text-align: justify;
    }

    /* ===== EXAMPLES ===== */
    .example-card {
      background: #e0f2f1;
      padding: 25px;
      margin-top: 30px;
      border-left: 6px solid #00796b;
      border-radius: 10px;
    }

    .example-card h3 {
      color: #004d40;
      margin-bottom: 10px;
    }

    pre {
      background: #f0f0f0;
      padding: 15px;
      border-radius: 8px;
      overflow-x: auto;
      font-size: 0.95rem;
      margin-top: 10px;
    }

    /* ===== VIDEO SECTION ===== */
    .video-section {
      margin-top: 40px;
      text-align: center;
    }

    .video-section h3 {
      color: #00796b;
      margin-bottom: 15px;
    }

    iframe {
      width: 100%;
      max-width: 720px;
      height: 400px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    /* ===== BACK LINK ===== */
    .back-link {
      display: inline-block;
      margin-top: 40px;
      color: #00796b;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
    }

    .back-link:hover {
      color: #004d40;
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
     footer p {
      margin-top: 25px;
      text-align: center;
      font-size: 0.9rem;
      color: #f8f8f8ff;
    }
  </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav>
  <a href="index.php">🏠 Home</a>
</nav>

<!-- ===== MAIN CONTENT ===== -->
<div class="container">
  <h1>💻 Projects & Helps</h1>
  <p>
    This section provides you with beginner-friendly project ideas and examples to help you practice coding. 
    Projects are the best way to understand how different technologies work together. 
    Below are some examples and tutorials to get started easily.
  </p>

  <!-- ===== PROJECT EXAMPLES ===== -->
  <div class="example-card">
    <h3>📝 Example 1: To-Do List App (HTML, CSS, JS)</h3>
    <p>A basic project to manage daily tasks using JavaScript.</p>
    <pre><code>
&lt;input id="task" placeholder="Add Task"&gt;
&lt;button onclick="addTask()"&gt;Add&lt;/button&gt;
&lt;ul id="list"&gt;&lt;/ul&gt;

&lt;script&gt;
function addTask() {
  const task = document.getElementById('task').value;
  if(task){
    let li = document.createElement('li');
    li.textContent = task;
    document.getElementById('list').appendChild(li);
  }
}
&lt;/script&gt;
    </code></pre>
  </div>

  <div class="example-card">
    <h3>📁 Example 2: Contact Form (HTML & PHP)</h3>
    <p>Learn how to collect user input and display it using PHP.</p>
    <pre><code>
&lt;form method="post"&gt;
  Name: &lt;input type="text" name="name"&gt;&lt;br&gt;
  Message: &lt;textarea name="msg"&gt;&lt;/textarea&gt;&lt;br&gt;
  &lt;button type="submit"&gt;Send&lt;/button&gt;
&lt;/form&gt;

&lt;?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo "Hello " . htmlspecialchars($_POST['name']);
  echo "&lt;br&gt;Your message: " . htmlspecialchars($_POST['msg']);
}
?&gt;
    </code></pre>
  </div>

  <div class="example-card">
    <h3>💡 Example 3: Login Form (HTML & PHP)</h3>
    <p>A simple PHP login system for beginners.</p>
    <pre><code>
&lt;form method="post"&gt;
  Username: &lt;input type="text" name="user"&gt;&lt;br&gt;
  Password: &lt;input type="password" name="pass"&gt;&lt;br&gt;
  &lt;button type="submit"&gt;Login&lt;/button&gt;
&lt;/form&gt;

&lt;?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST['user'] == 'admin' && $_POST['pass'] == '123'){
    echo "Welcome, Admin!";
  } else {
    echo "Invalid Login!";
  }
}
?&gt;
    </code></pre>
  </div>

  <!-- ===== VIDEO SECTION ===== -->
  <div class="video-section">
    <h3>🎥 Learn Mini Projects Step by Step</h3>
    <iframe src="https://www.youtube.com/embed/3PHXvlpOkf4" 
            title="Mini Projects for Beginners"></iframe>
  </div>

  <a href="index.php" class="back-link">← Back to Home</a>
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
