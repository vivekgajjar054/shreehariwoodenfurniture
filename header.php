<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Carpentry Co.</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #fdf8f3;
    }

    .navbar {
      background-color: #4e342e;
    }

    .navbar-brand {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      color: #fff !important;
    }

    .navbar-nav .nav-link {
      color: #e0cfc2 !important;
      font-weight: 500;
      margin-right: 1rem;
      transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: #ffffff !important;
      text-decoration: underline;
    }

    .nav-btn {
      background-color: #a1887f;
      border: none;
      color: white;
      padding: 6px 16px;
      border-radius: 20px;
      transition: background 0.3s ease;
    }

    .nav-btn:hover {
      background-color: #8d6e63;
    }
  </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm" style="background: linear-gradient(to right, #5d4037, #3e2723); font-family: 'Segoe UI', sans-serif;">
  <div class="container">
  <a class="navbar-brand d-flex align-items-center" href="index.php">
  <img src="images/logoplus.png" alt="Shree Hari Furniture"
       style="height: 48px; width: 48px; object-fit: cover; border-radius: 50%; margin-right: 12px;">
  <span class="fw-bold text-warning fs-4" style="letter-spacing: 1px;">
    Shree Hari Wooden Furniture
  </span>
</a>



    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
      aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
    </button>

    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php
          $current = basename($_SERVER['PHP_SELF']);
          $menu = [
            'index.php' => 'Home',
            'about.php' => 'About',
            'services.php' => 'Services',
            'contact.php' => 'Contact',
            'photo.php' => 'photo',

          ];
          foreach ($menu as $file => $name):
        ?>
          <li class="nav-item">
            <a class="nav-link px-3 <?= $current === $file ? 'active' : '' ?>"
              href="<?= $file ?>" 
              style="color: <?= $current === $file ? '#ffcc80' : '#f5f5f5' ?>; font-weight: 500; transition: color 0.3s;">
              <?= $name ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Optional hover effect -->
<style>
  .navbar-nav .nav-link:hover {
    color: #ffcc80 !important;
  }

  .navbar-nav .nav-link.active {
    font-weight: 600;
    border-bottom: 2px solid #ffcc80;
  }
</style>

