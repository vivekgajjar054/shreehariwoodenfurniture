<?php
include 'db.php';
$showPopup = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $message = trim($_POST['message']);

  // Basic PHP-side validation
  if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    if ($stmt->execute()) {
      $showPopup = true;
    }
    $stmt->close();
  }
}
?>

<?php include 'header.php'; ?>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Hero -->
<section class="py-5 text-center text-white" style="background: linear-gradient(to right, #5e3c2e, #3e2723);">
  <div class="container">
    <h1 class="display-5 fw-bold">Contact Us</h1>
    <p class="lead">Let’s talk about your next project</p>
  </div>
</section>

<!-- Contact Form Section -->
<section class="py-5" style="background-color: #fdf8f3;">
  <div class="container">
    <div class="row g-5 align-items-start">

      <div class="col-md-7">
        <div class="bg-white p-5 rounded shadow-sm">
          <h2 class="fw-bold mb-4 text-dark">📬 Send Us a Message</h2>
          <form id="contactForm" method="POST" class="needs-validation" novalidate>
            <div class="mb-4">
              <label for="name" class="form-label">Your Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control rounded-2 shadow-sm" id="name" name="name" required>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <div class="mb-4">
              <label for="email" class="form-label">Your Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control rounded-2 shadow-sm" id="email" name="email" required>
              <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <div class="mb-4">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control rounded-2 shadow-sm" id="phone" name="phone" pattern="^[0-9\-+\s()]*$">
              <div class="invalid-feedback">Enter a valid phone number.</div>
            </div>

            <div class="mb-4">
              <label for="message" class="form-label">Your Message <span class="text-danger">*</span></label>
              <textarea class="form-control rounded-2 shadow-sm" id="message" name="message" rows="5" required></textarea>
              <div class="invalid-feedback">Please enter your message.</div>
            </div>

            <button type="submit" class="btn btn-lg px-4 py-2" style="background-color: #6d4c41; color: #fff; border: none; border-radius: 0.5rem;">Send Message</button>
          </form>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md-5">
        <div class="bg-white p-5 rounded shadow-sm">
          <h2 class="fw-bold mb-4 text-dark">📞 Get in Touch</h2>
          <ul class="list-unstyled fs-5 text-muted">
            <li class="mb-4"><strong>📞 Phone:</strong> +91-9979602467</li>
            <li class="mb-4"><strong>✉️ Email:</strong> panchasaravijay704@gmail.com</li>
            <li class="mb-4"><strong>⏰ Hours:</strong> Mon–Sat, 9:00 AM – 9:00 PM</li>
          </ul>
          <div class="mt-4">
            <a href="tel:+91997602467" class="btn btn-outline-dark btn-lg px-4 py-2">📲 Call Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-white text-center" style="background-color: #4e342e;">
  <div class="container">
    <h3 class="fw-bold mb-3">We’re Just One Message Away</h3>
    <p class="mb-4">Get in touch and let’s bring your carpentry ideas to life.</p>
    <a href="contact.php" class="btn btn-light btn-lg px-4 py-2 rounded">Send a Message</a>
  </div>
</section>

<!-- Client-side Validation Script -->
<script>
  (() => {
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>

<!-- Success Popup -->
<?php if ($showPopup): ?>
<script>
  Swal.fire({
    icon: 'success',
    title: 'Message Sent!',
    text: 'Thank you for contacting us. We will get back to you shortly.',
    confirmButtonColor: '#6d4c41',
    background: '#fff8f0'
  });
</script>
<?php endif; ?>

<?php include 'footer.php'; ?>
