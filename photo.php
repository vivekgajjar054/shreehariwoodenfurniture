<?php include 'header.php'; ?>

<div class="container py-5">
    <h2 class="text-center mb-4 text-warning fw-bold">Our Furniture Collection</h2>

    <!-- Category Filter Buttons -->
    <div class="text-center mb-4">
        <button class="btn btn-outline-warning m-1 filter-btn active" data-filter="all">All</button>
        <button class="btn btn-outline-warning m-1 filter-btn" data-filter="living">Living Room</button>
        <button class="btn btn-outline-warning m-1 filter-btn" data-filter="bedroom">Bedroom</button>
        <button class="btn btn-outline-warning m-1 filter-btn" data-filter="kitchen">Kitchen</button>
        <button class="btn btn-outline-warning m-1 filter-btn" data-filter="other">Other</button>
    </div>

    <!-- Image Grid -->
    <div class="row g-4" id="gallery">
        <!-- Living Room -->
        <div class="col-md-4 gallery-item" data-category="living">
            <div class="card shadow border-0 rounded-4 overflow-hidden hover-shadow">
                <img src="images/logo.png" class="card-img-top gallery-img" alt="Living Room"
                     style="object-fit: cover; height: 360px; cursor: zoom-in;"
                     data-bs-toggle="modal" data-bs-target="#imageModal" data-src="images/logo.png">
            </div>
        </div>

        <!-- Bedroom -->
        <div class="col-md-4 gallery-item" data-category="bedroom">
            <div class="card shadow border-0 rounded-4 overflow-hidden hover-shadow">
                <img src="images/your-image.jpg" class="card-img-top gallery-img" alt="Bedroom"
                     style="object-fit: cover; height: 360px; cursor: zoom-in;"
                     data-bs-toggle="modal" data-bs-target="#imageModal" data-src="images/your-image.jpg">
            </div>
        </div>

        <!-- Kitchen -->
        <div class="col-md-4 gallery-item" data-category="kitchen">
            <div class="card shadow border-0 rounded-4 overflow-hidden hover-shadow">
                <img src="images/your-image.jpg" class="card-img-top gallery-img" alt="Kitchen"
                     style="object-fit: cover; height: 360px; cursor: zoom-in;"
                     data-bs-toggle="modal" data-bs-target="#imageModal" data-src="images/your-image.jpg">
            </div>
        </div>

        <!-- Other -->
        <div class="col-md-4 gallery-item" data-category="other">
            <div class="card shadow border-0 rounded-4 overflow-hidden hover-shadow">
                <img src="images/your-image.jpg" class="card-img-top gallery-img" alt="Other"
                     style="object-fit: cover; height: 360px; cursor: zoom-in;"
                     data-bs-toggle="modal" data-bs-target="#imageModal" data-src="images/your-image.jpg">
            </div>
        </div>
    </div>
</div>

<!-- Image Preview Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark border-0">
      <div class="modal-body p-0">
        <img id="modalImage" src="" class="img-fluid w-100 rounded-2" alt="Preview">
      </div>
    </div>
  </div>
</div>

<!-- Gallery Filtering Script -->
<script>
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelector('.filter-btn.active')?.classList.remove('active');
            btn.classList.add('active');
            const filter = btn.getAttribute('data-filter');
            galleryItems.forEach(item => {
                item.style.display = (filter === 'all' || item.getAttribute('data-category') === filter)
                    ? 'block' : 'none';
            });
        });
    });

    // Image Modal Preview
    const imageModal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    imageModal.addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        const imgSrc = trigger.getAttribute('data-src');
        modalImage.src = imgSrc;
    });
</script>

<!-- Optional: CSS for hover highlight -->
<style>
    .hover-shadow:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25) !important;
        transform: scale(1.02);
        transition: all 0.3s ease-in-out;
    }
</style>

<?php include 'footer.php'; ?>
