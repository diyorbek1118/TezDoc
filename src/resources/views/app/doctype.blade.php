@extends('layout.app.main')

@section('title', 'Document Types')

@section('content')
  <!-- Page Header -->
  <section class="page-header">
    <div class="container">
      <h1>Document Types</h1>
      <p>Browse our comprehensive collection of document templates</p>
    </div>
  </section>

  <!-- Document Types Grid -->
  <section class="document-types">
    <div class="container">
      <div class="filter-categories">
        <button class="filter-btn active" data-filter="all">All Documents</button>
        <button class="filter-btn" data-filter="application">Applications</button>
        <button class="filter-btn" data-filter="letter">Letters</button>
        <button class="filter-btn" data-filter="legal">Legal</button>
        <button class="filter-btn" data-filter="business">Business</button>
      </div>

      <div class="documents-grid">
        <!-- Applications -->
        <div class="document-card" data-category="application">
          <div class="document-icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <div class="document-info">
            <h3>Job Application</h3>
            <p>Create a professional job application with our guided form.</p>
            <a href="document-preparation.html?type=job-application" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <div class="document-card" data-category="application">
          <div class="document-icon">
            <i class="fas fa-university"></i>
          </div>
          <div class="document-info">
            <h3>School Application</h3>
            <p>Apply to educational institutions with our structured application template.</p>
            <a href="document-preparation.html?type=school-application" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <div class="document-card" data-category="application">
          <div class="document-icon">
            <i class="fas fa-home"></i>
          </div>
          <div class="document-info">
            <h3>Housing Application</h3>
            <p>Apply for housing or rental properties with our detailed form.</p>
            <a href="document-preparation.html?type=housing-application" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <!-- Letters -->
        <div class="document-card" data-category="letter">
          <div class="document-icon">
            <i class="fas fa-pencil-alt"></i>
          </div>
          <div class="document-info">
            <h3>Recommendation Letter</h3>
            <p>Generate a powerful recommendation letter for academic or professional purposes.</p>
            <a href="document-preparation.html?type=recommendation-letter" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <div class="document-card" data-category="letter">
          <div class="document-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="document-info">
            <h3>Cover Letter</h3>
            <p>Create a compelling cover letter to accompany your job application.</p>
            <a href="document-preparation.html?type=cover-letter" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <div class="document-card" data-category="letter">
          <div class="document-icon">
            <i class="fas fa-comment-dots"></i>
          </div>
          <div class="document-info">
            <h3>Explanatory Letter</h3>
            <p>Craft a clear explanatory letter for various situations and requirements.</p>
            <a href="document-preparation.html?type=explanatory-letter" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <!-- Legal -->
        <div class="document-card" data-category="legal">
          <div class="document-icon">
            <i class="fas fa-file-contract"></i>
          </div>
          <div class="document-info">
            <h3>Simple Contract</h3>
            <p>Create a basic contract for services or agreements.</p>
            <a href="document-preparation.html?type=simple-contract" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <div class="document-card" data-category="legal">
          <div class="document-icon">
            <i class="fas fa-gavel"></i>
          </div>
          <div class="document-info">
            <h3>Affidavit</h3>
            <p>Generate a legal affidavit with our guided preparation tool.</p>
            <a href="document-preparation.html?type=affidavit" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <!-- Business -->
        <div class="document-card" data-category="business">
          <div class="document-icon">
            <i class="fas fa-handshake"></i>
          </div>
          <div class="document-info">
            <h3>Business Proposal</h3>
            <p>Create a professional business proposal with our structured template.</p>
            <a href="document-preparation.html?type=business-proposal" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <div class="document-card" data-category="business">
          <div class="document-icon">
            <i class="fas fa-file-invoice"></i>
          </div>
          <div class="document-info">
            <h3>Invoice Template</h3>
            <p>Generate professional invoices for your business or services.</p>
            <a href="document-preparation.html?type=invoice" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>

        <div class="document-card" data-category="business">
          <div class="document-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <div class="document-info">
            <h3>Business Plan</h3>
            <p>Create a comprehensive business plan with our guided template.</p>
            <a href="document-preparation.html?type=business-plan" class="btn btn-primary btn-sm">Create Document</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <a href="index.html">Docu<span>Prep</span></a>
          <p>Professional document preparation services for all your needs.</p>
        </div>
        <div class="footer-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="document-types.html">Document Types</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="footer-contact">
          <h3>Contact Us</h3>
          <p><i class="fas fa-map-marker-alt"></i> 123 Business Street, City, Country</p>
          <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
          <p><i class="fas fa-envelope"></i> info@docuprep.com</p>
        </div>
        <div class="footer-social">
          <h3>Follow Us</h3>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 DocuPrep. All rights reserved.</p>
      </div>
    </div>
  </footer>

@endsection