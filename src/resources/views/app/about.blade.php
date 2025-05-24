@extends('layout.app.main')

@section('title', 'About Us')

@section('content')
  <!-- Page Header -->
  <section class="page-header">
    <div class="container">
      <h1>About Us</h1>
      <p>Learn about our mission, team, and expert document services</p>
    </div>
  </section>

  <!-- About Content -->
  <section class="about-content">
    <div class="container">
      <div class="about-grid">
        <div class="about-image">
          <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Our Team">
        </div>
        <div class="about-text">
          <h2>Our Story</h2>
          <p>DocuPrep was founded in 2020 with a simple mission: to make professional document creation accessible to everyone. We recognized that many people struggle with creating formal documents and often spend hours trying to format and word their applications, letters, and legal papers correctly.</p>
          <p>Our team of legal experts, professional writers, and software developers came together to build a platform that guides users through the document creation process with ease and confidence. Today, we've helped thousands of people create flawless documents for their personal and professional needs.</p>
          <div class="about-stats">
            <div class="stat-item">
              <div class="stat-number">5,000+</div>
              <div class="stat-label">Documents Created</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">15+</div>
              <div class="stat-label">Document Types</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">98%</div>
              <div class="stat-label">Client Satisfaction</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section class="mission-section">
    <div class="container">
      <div class="mission-content">
        <h2>Our Mission</h2>
        <p>We strive to empower individuals and businesses by providing them with the tools to create professional documents without the need for expensive consultants or complex software. Our mission is to make document preparation simple, affordable, and accessible to everyone.</p>
        <div class="mission-values">
          <div class="value-item">
            <div class="value-icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <h3>Quality</h3>
            <p>We ensure that all templates meet professional standards and are regularly updated to comply with current practices.</p>
          </div>
          <div class="value-item">
            <div class="value-icon">
              <i class="fas fa-lock"></i>
            </div>
            <h3>Security</h3>
            <p>Your information is kept secure and confidential. We never share your data with third parties.</p>
          </div>
          <div class="value-item">
            <div class="value-icon">
              <i class="fas fa-handshake"></i>
            </div>
            <h3>Accessibility</h3>
            <p>We believe everyone deserves access to professional document creation tools at an affordable price.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team-section">
    <div class="container">
      <div class="section-header">
        <h2>Meet Our Team</h2>
        <p>The experts behind DocuPrep's success</p>
      </div>
      <div class="team-grid">
        <div class="team-member">
          <div class="member-image">
            <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Team Member">
          </div>
          <div class="member-info">
            <h3>Sarah Johnson</h3>
            <p class="member-title">Founder & CEO</p>
            <p class="member-bio">With over 15 years in legal document preparation, Sarah leads our vision to make professional documents accessible to everyone.</p>
            <div class="member-social">
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
        <div class="team-member">
          <div class="member-image">
            <img src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Team Member">
          </div>
          <div class="member-info">
            <h3>Michael Chen</h3>
            <p class="member-title">Legal Document Expert</p>
            <p class="member-bio">Michael brings his extensive experience as a paralegal to ensure our legal documents meet professional standards.</p>
            <div class="member-social">
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
        <div class="team-member">
          <div class="member-image">
            <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Team Member">
          </div>
          <div class="member-info">
            <h3>David Rodriguez</h3>
            <p class="member-title">Lead Developer</p>
            <p class="member-bio">David oversees our platform development, ensuring a seamless user experience and robust functionality.</p>
            <div class="member-social">
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
        <div class="team-member">
          <div class="member-image">
            <img src="https://images.pexels.com/photos/3777946/pexels-photo-3777946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Team Member">
          </div>
          <div class="member-info">
            <h3>Emily Patel</h3>
            <p class="member-title">Content Specialist</p>
            <p class="member-bio">Emily crafts the templates and guidance text that help our users create perfect documents every time.</p>
            <div class="member-social">
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <div class="cta-content">
        <h2>Ready to Create Your Document?</h2>
        <p>Join thousands of satisfied customers who have used DocuPrep for their document needs.</p>
        <div class="cta-buttons">
          <a href="document-types.html" class="btn btn-primary btn-lg">Get Started</a>
          <a href="contact.html" class="btn btn-outline btn-lg">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

@endsection