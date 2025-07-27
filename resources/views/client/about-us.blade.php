<x-client-layout>
<x-slot:title>Tentang Kami - Wedding Organizer</x-slot:title>

<main class="main">
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('page.hero') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="hero-content text-center" data-aos="zoom-in" data-aos-delay="200">
              <h2>Premium Real Estate Excellence Since 2008</h2>
              <p class="hero-description">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris viverra veniam ut aliquam lorem dapibus gravida. Sed efficitur mauris vel magna consectetur tempor.</p>
            </div>
            <div class="dual-image-layout" data-aos="fade-up" data-aos-delay="300">
              <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                  <div class="primary-image-wrap">
                    <img src="assets/img/real-estate/property-exterior-4.webp" alt="Luxury Property" class="img-fluid">
                    <div class="floating-badge" data-aos="zoom-in" data-aos-delay="400">
                      <div class="badge-content">
                        <i class="bi bi-award"></i>
                        <span>Top Rated Agency</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="secondary-image-wrap">
                    <img src="assets/img/real-estate/agent-3.webp" alt="Professional Agent" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="features-showcase" data-aos="fade-up" data-aos-delay="350">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="feature-box" data-aos="flip-up" data-aos-delay="400">
                <div class="feature-icon">
                  <i class="bi bi-house-door"></i>
                </div>
                <div class="feature-content">
                  <h4>Residential Sales</h4>
                  <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="feature-box" data-aos="flip-up" data-aos-delay="450">
                <div class="feature-icon">
                  <i class="bi bi-building"></i>
                </div>
                <div class="feature-content">
                  <h4>Commercial Properties</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="feature-box" data-aos="flip-up" data-aos-delay="500">
                <div class="feature-icon">
                  <i class="bi bi-graph-up-arrow"></i>
                </div>
                <div class="feature-content">
                  <h4>Investment Guidance</h4>
                  <p>Totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="feature-box" data-aos="flip-up" data-aos-delay="550">
                <div class="feature-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <div class="feature-content">
                  <h4>Legal Support</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Features Showcase -->

        <div class="cta-section" data-aos="fade-up" data-aos-delay="500">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8">
              <h3>Ready to Find Your Dream Property?</h3>
              <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <div class="action-buttons">
                <a href="contact.html" class="btn btn-primary">Get Started Today</a>
                <a href="properties.html" class="btn btn-secondary">Browse Properties</a>
              </div>
            </div>
          </div>
        </div><!-- End CTA Section -->
      </div>
    </section><!-- /About Section -->
  </main>
</x-client-layout>
