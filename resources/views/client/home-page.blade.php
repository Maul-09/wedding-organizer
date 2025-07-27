<x-client-layout>
<x-slot:title>Wedding Organizer - Home page</x-slot:title>
<main class="main">

    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="hero-wrapper">
          <div class="row g-4">
            <div class="col-lg-7">
              <div class="hero-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="content-header">
                  <span class="hero-label">
                    <i class="bi bi-house-heart field-icon"></i>
                    Nikah Gak Harus Ribet
                  </span>
                  <h1>Buat Momen Sakralmu Lebih Istimewa</h1>
                  <p>Dari konsep sampai hari H, biar kami yang atur. Kamu tinggal bilang ‘SAH’</p>
                </div>

                <div class="search-container" data-aos="fade-up" data-aos-delay="300">
                  <div class="search-header">
                    <h3>Start Your Property Search</h3>
                    <p>Discover thousands of verified listings</p>
                  </div>

                  <form action="" class="property-search-form">
                    <div class="search-grid">
                    <div class="search-field">
                        <label for="search-location" class="field-label">Nama Lengkap</label>
                        <input type="text" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-person field-icon"></i>
                    </div>
                    <div class="search-field">
                        <label for="search-location" class="field-label">Nomor Whats App/Text</label>
                        <input type="number" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-telephone field-icon"></i>
                      </div>
                      <div class="search-field">
                        <label for="search-location" class="field-label">Lokasi Acara</label>
                        <input type="text" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-geo-alt field-icon"></i>
                      </div>
                      <div class="search-field">
                        <label for="search-location" class="field-label">Tanggal Acara</label>
                        <input type="date" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-geo-alt field-icon"></i>
                      </div>

                      <div class="search-field">
                        <label for="search-type" class="field-label">Pilih</label>
                        <select id="search-type" name="property_type" required="">
                          <option value="">All Types</option>
                          <option value="house">Single House</option>
                          <option value="apartment">Apartment</option>
                          <option value="condo">Condominium</option>
                          <option value="villa">Villa</option>
                          <option value="commercial">Commercial</option>
                        </select>
                        <i class="bi bi-building field-icon"></i>
                      </div>

                      <div class="search-field">
                        <label for="search-location" class="field-label">Upload Konsep</label>
                        <input type="file" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-geo-alt field-icon"></i>
                      </div>
                    </div>

                    <button type="submit" class="search-btn">
                      <i class="bi bi-bookmark"></i>
                      <span>Booking Sekarang</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <!-- End Hero Content -->

            <div class="col-lg-5">
              <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                <div class="visual-container">
                  <div class="featured-property">
                    <img src="{{ asset('aset/image/wedding-3.jpg') }}" alt="Featured Property" class="img-fluid">
                    <div class="property-info">
                      <div class="property-details">
                        <span><i class="bi bi-geo-alt"></i> Padang Birau Rt.12 jl lubuk linggau km 3 kabupaten kelurahan gunung kembang kabupaten sarolangun provinsi jambi</span>
                      </div>
                    </div>
                  </div>

                  <div class="overlay-images">
                    <div class="overlay-img overlay-1">
                      <img src="{{ asset('aset/image/wedding-2.jpg') }}" alt="Interior View" class="img-fluid">
                    </div>
                    <div class="overlay-img overlay-2">
                      <img src="{{ asset('aset/image/wedding-1.jpg') }}" alt="Exterior View" class="img-fluid">
                    </div>
                  </div>

                  <div class="agent-card">
                    <div class="agent-profile">
                      <img src="assets/img/real-estate/agent-7.webp" alt="Agent Profile" class="agent-photo">
                      <div class="agent-info">
                        <h4>Michael Chen</h4>
                        <p>Senior Property Advisor</p>
                        <div class="agent-rating">
                          <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                          </div>
                          <span class="rating-text">5.0 (94 reviews)</span>
                        </div>
                      </div>
                    </div>
                    <button class="contact-agent-btn">
                      <i class="bi bi-whatsapp"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div><!-- End Hero Visual -->

          </div>
        </div>

      </div>

    </section>

    <section id="featured-properties" class="featured-properties section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Properties</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-8">

            <div class="featured-property-main" data-aos="zoom-in" data-aos-delay="200">
              <div class="property-hero">
                <img src="assets/img/real-estate/property-exterior-4.webp" alt="Luxury Estate" class="img-fluid">
                <div class="property-overlay">
                  <div class="property-badge-main premium">Premium</div>
                  <div class="property-stats">
                    <div class="stat-item">
                      <i class="bi bi-house-door"></i>
                      <span>6 Bedrooms</span>
                    </div>
                    <div class="stat-item">
                      <i class="bi bi-droplet-fill"></i>
                      <span>5 Bathrooms</span>
                    </div>
                    <div class="stat-item">
                      <i class="bi bi-arrows-move"></i>
                      <span>5,500 sq ft</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="property-hero-content">
                <div class="property-header">
                  <div class="property-info">
                    <h2><a href="property-details.html">Magnificent Estate with Garden Views</a></h2>
                    <div class="property-address">
                      <i class="bi bi-geo-alt-fill"></i>
                      <span>Malibu, CA 90265</span>
                    </div>
                  </div>
                  <div class="property-price-main">$4,850,000</div>
                </div>
                <p class="property-description">Luxurious estate nestled in exclusive Malibu hills featuring panoramic ocean views, infinity pool, wine cellar, and private tennis court. Architectural masterpiece with premium finishes throughout.</p>
                <div class="property-actions-main">
                  <a href="property-details.html" class="btn-primary-custom">Schedule Tour</a>
                  <a href="property-details.html" class="btn-outline-custom">View Gallery</a>
                  <div class="property-listing-info">
                    <span class="listing-status for-sale">For Sale</span>
                    <span class="listing-date">Listed today</span>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-4">

            <div class="properties-sidebar">

              <div class="sidebar-property-card" data-aos="fade-left" data-aos-delay="300">
                <div class="sidebar-property-image">
                  <img src="assets/img/real-estate/property-exterior-1.webp" alt="Modern Condo" class="img-fluid">
                  <div class="sidebar-property-badge hot">Hot Deal</div>
                </div>
                <div class="sidebar-property-content">
                  <h4><a href="property-details.html">Contemporary Downtown Condo</a></h4>
                  <div class="sidebar-location">
                    <i class="bi bi-pin-map"></i>
                    <span>Seattle, WA 98101</span>
                  </div>
                  <div class="sidebar-specs">
                    <span><i class="bi bi-house"></i> 3 BR</span>
                    <span><i class="bi bi-droplet"></i> 2 BA</span>
                    <span><i class="bi bi-rulers"></i> 2,100 sq ft</span>
                  </div>
                  <div class="sidebar-price-row">
                    <div class="sidebar-price">$1,595,000</div>
                    <a href="property-details.html" class="sidebar-btn">View</a>
                  </div>
                </div>
              </div>

              <div class="sidebar-property-card" data-aos="fade-left" data-aos-delay="400">
                <div class="sidebar-property-image">
                  <img src="assets/img/real-estate/property-exterior-9.webp" alt="Family Home" class="img-fluid">
                  <div class="sidebar-property-badge new">New Listing</div>
                </div>
                <div class="sidebar-property-content">
                  <h4><a href="property-details.html">Elegant Family Residence</a></h4>
                  <div class="sidebar-location">
                    <i class="bi bi-pin-map"></i>
                    <span>Portland, OR 97201</span>
                  </div>
                  <div class="sidebar-specs">
                    <span><i class="bi bi-house"></i> 4 BR</span>
                    <span><i class="bi bi-droplet"></i> 3 BA</span>
                    <span><i class="bi bi-rulers"></i> 3,100 sq ft</span>
                  </div>
                  <div class="sidebar-price-row">
                    <div class="sidebar-price">$925,000</div>
                    <a href="property-details.html" class="sidebar-btn">View</a>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>

        <div class="row gy-4 mt-4">

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="600">
            <div class="property-card-horizontal">
              <div class="property-image-horizontal">
                <img src="assets/img/real-estate/property-interior-5.webp" alt="Penthouse" class="img-fluid">
                <div class="property-badge-horizontal exclusive">Exclusive</div>
              </div>
              <div class="property-content-horizontal">
                <h3><a href="property-details.html">Luxury Penthouse Suite</a></h3>
                <div class="property-location-horizontal">
                  <i class="bi bi-geo-alt"></i>
                  <span>Las Vegas, NV 89102</span>
                </div>
                <div class="property-features">
                  <span class="feature"><i class="bi bi-house"></i> 3 Bedrooms</span>
                  <span class="feature"><i class="bi bi-droplet"></i> 3 Bathrooms</span>
                  <span class="feature"><i class="bi bi-rulers"></i> 2,850 sq ft</span>
                </div>
                <p>Spectacular penthouse with floor-to-ceiling windows and private rooftop terrace overlooking the city skyline.</p>
                <div class="property-footer-horizontal">
                  <div class="property-price-horizontal">$2,195,000</div>
                  <a href="property-details.html" class="btn-view-horizontal">View Details</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="700">
            <div class="property-card-horizontal">
              <div class="property-image-horizontal">
                <img src="assets/img/real-estate/property-interior-8.webp" alt="Modern Home" class="img-fluid">
                <div class="property-badge-horizontal new">New</div>
              </div>
              <div class="property-content-horizontal">
                <h3><a href="property-details.html">Modern Architectural Gem</a></h3>
                <div class="property-location-horizontal">
                  <i class="bi bi-geo-alt"></i>
                  <span>Phoenix, AZ 85001</span>
                </div>
                <div class="property-features">
                  <span class="feature"><i class="bi bi-house"></i> 4 Bedrooms</span>
                  <span class="feature"><i class="bi bi-droplet"></i> 3 Bathrooms</span>
                  <span class="feature"><i class="bi bi-rulers"></i> 3,450 sq ft</span>
                </div>
                <p>Award-winning contemporary design with sustainable features, smart home technology, and resort-style backyard.</p>
                <div class="property-footer-horizontal">
                  <div class="property-price-horizontal">$1,375,000</div>
                  <a href="property-details.html" class="btn-view-horizontal">View Details</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonial-grid">

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="100">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="assets/img/person/person-f-5.webp" class="img-fluid" alt="Testimonial 1">
                </div>
                <div class="testimonial-meta">
                  <h3>Sophia Martinez</h3>
                  <h4>Creative Director</h4>
                  <div class="company-logo">
                    <i class="bi bi-building"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Leveraging cutting-edge design principles to create immersive brand experiences that resonate with modern audiences.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item featured" data-aos="zoom-in" data-aos-delay="200">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="assets/img/person/person-m-5.webp" class="img-fluid" alt="Testimonial 2">
                </div>
                <div class="testimonial-meta">
                  <h3>Alexander Wright</h3>
                  <h4>CEO &amp; Founder</h4>
                  <div class="company-logo">
                    <i class="bi bi-buildings"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Revolutionary solutions have transformed our business landscape, driving unprecedented growth and market leadership position.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="assets/img/person/person-f-6.webp" class="img-fluid" alt="Testimonial 3">
                </div>
                <div class="testimonial-meta">
                  <h3>Isabella Kim</h3>
                  <h4>Product Strategist</h4>
                  <div class="company-logo">
                    <i class="bi bi-building-check"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Strategic implementation of innovative technologies has elevated our product development and market penetration.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="assets/img/person/person-m-6.webp" class="img-fluid" alt="Testimonial 4">
                </div>
                <div class="testimonial-meta">
                  <h3>James Cooper</h3>
                  <h4>Tech Lead</h4>
                  <div class="company-logo">
                    <i class="bi bi-building-gear"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Exceptional technical expertise and innovative solutions have streamlined our development processes significantly.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    <section id="why-us" class="why-us section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Why Us</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h3>Why Choose Premier Real Estate Partners?</h3>
              <p>With over two decades of experience in the real estate market, we've built our reputation on trust, expertise, and exceptional results. Our dedicated team of local experts understands the nuances of every neighborhood and market trend.</p>

              <div class="features-list">
                <div class="feature-item d-flex align-items-center mb-3">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-check-circle-fill"></i>
                  </div>
                  <div>
                    <h5>Local Market Expertise</h5>
                    <p>Deep knowledge of neighborhoods, pricing trends, and market conditions in your area.</p>
                  </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <div>
                    <h5>Verified Listings Only</h5>
                    <p>Every property is thoroughly vetted and verified before listing to ensure accuracy and quality.</p>
                  </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-headset"></i>
                  </div>
                  <div>
                    <h5>24/7 Client Support</h5>
                    <p>Our dedicated support team is available around the clock to assist with your real estate needs.</p>
                  </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-graph-up-arrow"></i>
                  </div>
                  <div>
                    <h5>Proven Track Record</h5>
                    <p>Consistently delivering results with over 2,500 successful transactions and 98% client satisfaction.</p>
                  </div>
                </div>
              </div>

              <div class="cta-buttons mt-4">
                <a href="#" class="btn btn-primary me-3">Learn More About Us</a>
                <a href="#" class="btn btn-outline-primary">Contact Our Team</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="stats-section">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                      <i class="bi bi-house-door"></i>
                    </div>
                    <div class="stat-number">
                      <span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Homes Sold</div>
                    <p>Successfully closed transactions across all property types and price ranges.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="stat-number">
                      <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2" class="purecounter"></span>%
                    </div>
                    <div class="stat-label">Client Satisfaction</div>
                    <p>Exceptional service quality rated by our satisfied homeowners and investors.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                      <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="stat-number">
                      <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Years Experience</div>
                    <p>Two decades of expertise navigating changing market conditions successfully.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                      <i class="bi bi-award"></i>
                    </div>
                    <div class="stat-number">
                      <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Industry Awards</div>
                    <p>Recognition for excellence in real estate service and client satisfaction.</p>
                  </div>
                </div>
              </div>

              <div class="testimonial-preview mt-5">
                <div class="testimonial-card">
                  <div class="quote-icon mb-2">
                    <i class="bi bi-quote"></i>
                  </div>
                  <p>"Working with this team made buying our first home a seamless experience. Their knowledge of the local market and dedication to finding the perfect property exceeded our expectations."</p>
                  <div class="testimonial-author d-flex align-items-center mt-3">
                    <img src="assets/img/person/person-f-3.webp" alt="Client" class="author-image me-3">
                    <div>
                      <h6>Sarah Martinez</h6>
                      <span>First-time Homebuyer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    <section class="call-to-action-1 call-to-action section" id="call-to-action">
      <div class="cta-bg" style="background-image: url('assets/img/real-estate/showcase-3.webp');"></div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8">

            <div class="cta-content text-center">
              <h2>Need Help Finding Your Dream Property?</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

              <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Contact Us Today</a>
                <a href="#" class="btn btn-outline">Schedule a Call</a>
              </div>

              <div class="cta-features">
                <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-telephone-fill"></i>
                  <span>Free Consultation</span>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="250">
                  <i class="bi bi-clock-fill"></i>
                  <span>24/7 Support</span>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-shield-check-fill"></i>
                  <span>Trusted Experts</span>
                </div>
              </div>

            </div><!-- End CTA Content -->

          </div>
        </div>

      </div>
    </section>

  </main>

  <div id="preloader"></div>

</x-client-layout>
