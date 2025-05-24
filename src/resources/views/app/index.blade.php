  @extends('layout.app.main')

  @section('title', 'Bosh sahifa')

@section('content')

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Professional Document Preparation Made Simple</h1>
        <p>Create flawless documents for any occasion with our intuitive platform. Save time and eliminate errors with guided document preparation.</p>
        <div class="hero-buttons">
          <a href="document-types.html" class="btn btn-primary btn-lg">Get Started</a>
          <a href="#services" class="btn btn-secondary btn-lg">Learn More</a>
        </div>
      </div>
      <div class="hero-image">
        <img src="https://images.pexels.com/photos/6476262/pexels-photo-6476262.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Document Preparation">
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-header">
        <h2>Our Services</h2>
        <p>We offer a wide range of document preparation services tailored to your needs</p>
      </div>
      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <h3>Applications</h3>
          <p>Create professional applications for jobs, schools, or programs with our guided templates.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-pencil-alt"></i>
          </div>
          <h3>Recommendation Letters</h3>
          <p>Generate impressive recommendation letters with our structured formats and expert guidance.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-file-contract"></i>
          </div>
          <h3>Explanatory Notes</h3>
          <p>Craft clear and compelling explanatory notes for any situation or requirement.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-file-signature"></i>
          </div>
          <h3>Legal Documents</h3>
          <p>Create legally sound documents with our expert templates and guidance system.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="how-it-works">
    <div class="container">
      <div class="section-header">
        <h2>How It Works</h2>
        <p>Create perfect documents in just three simple steps</p>
      </div>
      <div class="steps">
        <div class="step">
          <div class="step-number">1</div>
          <h3>Choose Document Type</h3>
          <p>Browse our catalog and select the document type you need to prepare.</p>
        </div>
        <div class="step">
          <div class="step-number">2</div>
          <h3>Fill in Details</h3>
          <p>Our guided form will ask you all the necessary questions to complete your document.</p>
        </div>
        <div class="step">
          <div class="step-number">3</div>
          <h3>Generate & Download</h3>
          <p>Receive your perfectly formatted document ready for use or submission.</p>
        </div>
      </div>
      <div class="cta-center">
        <a href="document-types.html" class="btn btn-primary btn-lg">Get Started Now</a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials">
    <div class="container">
      <div class="section-header">
        <h2>What Our Clients Say</h2>
        <p>Real experiences from satisfied customers</p>
      </div>
      <div class="testimonial-grid">
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"DocuPrep saved me hours of work on my job applications. The templates are professional and the guidance was invaluable."</p>
          </div>
          <div class="testimonial-author">
            <div class="author-image">
              <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
            </div>
            <div class="author-info">
              <h4>Sophia Johnson</h4>
              <p>Marketing Executive</p>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"I needed several legal documents prepared quickly. DocuPrep made the process simple and stress-free with great results."</p>
          </div>
          <div class="testimonial-author">
            <div class="author-image">
              <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
            </div>
            <div class="author-info">
              <h4>Michael Ramirez</h4>
              <p>Small Business Owner</p>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"As a student applying to multiple programs, DocuPrep helped me create consistent, high-quality application documents."</p>
          </div>
          <div class="testimonial-author">
            <div class="author-image">
              <img src="https://images.pexels.com/photos/3777946/pexels-photo-3777946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client">
            </div>
            <div class="author-info">
              <h4>Emily Chen</h4>
              <p>Graduate Student</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection