<?php include 'header.php'; include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $phone, $message);
  $stmt->execute();
  $stmt->close();

  echo "<script>alert('Thank you! We will contact you shortly.');</script>";
}
?>


<!-- Services Hero Section -->
<section class="py-5 text-center text-white" style="background: linear-gradient(to right, #5e3c2e, #3e2723);">
  <div class="container">
    <h1 class="display-5 fw-bold">Our Services</h1>
    <p class="lead">Tailored woodwork built with craftsmanship and care</p>
  </div>
</section>

<!-- Service Cards Section -->
<section class="py-5" style="background-color: #fdf8f3;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">What We Offer</h2>
      <p class="text-muted">Our carpentry services are designed to fit your lifestyle, space, and budget.</p>
    </div>

    <div class="row g-4">
      <!-- Custom Furniture -->
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
          <div class="mb-3" style="font-size: 2rem;">🪑</div>
          <h5>Custom Furniture</h5>
          <p class="text-muted">Hand-built tables, chairs, beds, wardrobes, and more — fully customized to your preferences and space.</p>
        </div>
      </div>

      <!-- Interior Woodwork -->
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
          <div class="mb-3" style="font-size: 2rem;">🪚</div>
          <h5>Interior Woodwork</h5>
          <p class="text-muted">Elegant wood paneling, trims, beams, ceilings, and moldings to elevate every room in your home.</p>
        </div>
      </div>

      <!-- Renovation Services -->
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
          <div class="mb-3" style="font-size: 2rem;">🏠</div>
          <h5>Wood-Focused Renovation</h5>
          <p class="text-muted">Full-scale renovations that incorporate premium custom woodwork into every detail — kitchen, bedroom, or office.</p>
        </div>
      </div>

      <!-- Modular Kitchens -->
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
          <div class="mb-3" style="font-size: 2rem;">🍽️</div>
          <h5>Modular Kitchens</h5>
          <p class="text-muted">Well-organized, stylish kitchen designs with high-quality wood cabinets, drawers, and panels.</p>
        </div>
      </div>

      <!-- Office Furniture -->
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
          <div class="mb-3" style="font-size: 2rem;">💼</div>
          <h5>Office Carpentry</h5>
          <p class="text-muted">Desks, partitions, and storage solutions tailored to workspace efficiency and aesthetics.</p>
        </div>
      </div>

      <!-- Outdoor Structures -->
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
          <div class="mb-3" style="font-size: 2rem;">🌳</div>
          <h5>Outdoor Woodwork</h5>
          <p class="text-muted">Gazebos, pergolas, decks, and outdoor seating — crafted to withstand the elements and impress guests.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-white text-center" style="background-color: #4e342e;">
  <div class="container">
    <h3 class="fw-bold mb-3">Need a Custom Solution?</h3>
    <p class="mb-4">We’re ready to plan, build, and deliver a perfect woodwork solution just for you.</p>
    <a href="contact.php" class="btn btn-light btn-lg px-4 py-2">Contact Us</a>
  </div>
</section>

<?php include 'footer.php'; ?>
