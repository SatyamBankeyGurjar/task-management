<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   
    <title>Task Management</title>
  </head>
    <body>
    <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="logo.jpg" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="index.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="https://www.linkedin.com/in/satyam-bankey/">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="all_tasks.php">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Tasks</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a href="" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Task Management</h1>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-tasks"></i>
          <h3>All</h3>
          <p>Task Mastery: Empowering Productivity, One Task at a Time.</p>
          <a href="all_tasks.php">Get Started</a>
        </div>
        <div class="card">
          <i class="fas fa-tasks"></i>
          <h3>Yearly</h3>
          <p>Yearly Triumph: Conquer Your Goals with Strategic Task Management.</p>
          <a href="yearly.php">Get Started</a>
        </div>
      </div>
        <div class="main-skills">
        <div class="card">
          <i class="fas fa-tasks"></i>
          <h3>Monthly</h3>
          <p>Monthly Mastery: Streamline Your Tasks for Success.</p>
          <a href="monthly.php">Get Started</a>
        </div>
        <div class="card">
          <i class="fas fa-tasks"></i>
          <h3>Daily</h3>
          <p>Efficiency in Every Day: Simplify Your Tasks with Ease.</p>
          <a href="daily.php">Get Details</a>
        </div>
      </div>
    </section>
  </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
