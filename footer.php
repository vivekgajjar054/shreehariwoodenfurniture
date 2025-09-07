<?php include 'db.php'; ?>

<footer class="footer text-light py-5" style="background-color: #3e2723;">
  <div class="container">
    <div class="row">

      <?php
        $result = $conn->query("SELECT * FROM footer_info WHERE id = 1");
        $footer = $result->fetch_assoc();
      ?>

      <!-- Company Info -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold" style="color: #ffe0b2;"><?php echo htmlspecialchars($footer['company_name']); ?></h5>
        <p style="color: #e0cfc2;"><?php echo htmlspecialchars($footer['description']); ?></p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5 style="color: #ffe0b2;">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.php" class="footer-link">Home</a></li>
          <li><a href="about.php" class="footer-link">About</a></li>
          <li><a href="services.php" class="footer-link">Services</a></li>
          <li><a href="contact.php" class="footer-link">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4 mb-4">
        <h5 style="color: #ffe0b2;">Contact Us</h5>
        <ul class="list-unstyled" style="color: #e0cfc2;">
          <li>📞 <?php echo htmlspecialchars($footer['phone']); ?></li>
          <li>✉️ <?php echo htmlspecialchars($footer['email']); ?></li>
        </ul>
      </div>

    </div>

    <hr style="border-color: rgba(255, 255, 255, 0.1);" />

    <div class="text-center" style="color: #c1a791;">
      &copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($footer['company_name']); ?> All rights reserved.
    </div>
  </div>
</footer>

<!-- Footer Styling -->
<style>
  .footer-link {
    color: #fcebd5;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-link:hover {
    color: #ffffff;
    text-decoration: underline;
  }
</style>
