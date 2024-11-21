<?php
    include("header.php");

?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Find Your Perfect Rental Unit</h1>
            <p>Browse for premium rental units designed for your comfort.</p>
        </div>
    </section>
    
    <!-- Carousel -->
    <section id="units" class="units-section">
        <div class="carousel">
            <div class="carousel-images">
                <div class="carousel-item">
                <img src="images1/photo1.jpg" alt="Deluxe Room">
                </div>
                <div class="carousel-item">
                <img src="images1/photo2.jpg" alt="Suite">
                </div>
                <div class="carousel-item">
                <img src="images1/photo3.jpg" alt="Standard Room">
                </div>
                <div class="carousel-item">
                <img src="images1/photo4.jpg" alt="Suite">
                </div>
                <div class="carousel-item">
                <img src="images1/photo5.jpg" alt="Suite">
                </div>
                <div class="carousel-item">
                <img src="images1/photo6.jpg" alt="Suite">
                </div>
                <div class="carousel-item">
                <img src="images1/photo7.jpg" alt="Suite">
                </div>
                <div class="carousel-item">
                <img src="images1/photo8.jpg" alt="Suite">
                </div>
            </div>
            <button class="carousel-btn prev" onclick="prevSlide()">❮</button>
            <button class="carousel-btn next" onclick="nextSlide()">❯</button>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <span class="indicator" onclick="goToSlide(0)"></span>
                <span class="indicator" onclick="goToSlide(1)"></span>
                <span class="indicator" onclick="goToSlide(2)"></span>
            </div>
        </div>
    </section>

   
     
    
    <!-- Amenities and Inclusions Section -->
    <section id="amenities" class="amenities-section">
        <div class="container">
            <h2>Amenities and Inclusions</h2>
            <div class="amenities-grid">
                <div class="amenity-item">
                    <i class="fas fa-bed"></i>
                    <h4>2 Bedrooms</h4>
                    <p>The bedroom offers a spacious and relaxing area perfect for restful nights..</p>
                </div>
                <div class="amenity-item">
                    <i class="fas fa-shower"></i>
                    <h4>Comfort Room</h4>
                    <p>The bathroom is fully equipped, ensuring convenience and comfort..</p>
                </div>
                <div class="amenity-item">
                    <i class="fas fa-chair"></i>
                    <h4>Living/Kitchen area</h4>
                    <p>A combined living and kitchen area with a built-in cabinet.</p>
                </div>
                <div class="amenity-item">
                    <i class="fas fa-soap"></i>
                    <h4>Laundry area</h4>
                    <p>EThe apartment includes a laundry area for added convenience.</p>
                </div>
                <div class="amenity-item">
                    <i class="fas fa-parking"></i>
                    <h4>With Parking</h4>
                    <p>Parking is available for residents.(1 car per unit)</p>
                </div>
                <div class="amenity-item">
                    <i class="fas fa-dog"></i>
                    <h4>Pet not allowed</h4>
                    <p>Pets are not allowed in this unit.</p>
                </div>
                <div class="amenity-item">
                    <i class="fas fa-person"></i>
                    <h4>Good for 4-5 persons</h4>
                    <p>This apartment is ideal for 4-5 people.</p>
                </div>
                <div class="amenity-item">
                    <i class="fas fa-wallet"></i>
                    <h4>7,000 Pesos</h4>
                    <p>The monthly rent is set at 7,000 monthly</p>
                </div>
            </div>
        </div>
    </section>

<?php
include("footer.php");
?>