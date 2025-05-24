@extends('layout.app.main')

@section('title', 'Contact Us')

@section('content')

  <!-- Page Header -->
  <section class="page-header">
    <div class="container">
      <h1>Contact Us</h1>
      <p>Get in touch with our team for any questions or assistance</p>
    </div>
  </section>

  <!-- Contact Content -->
  <section class="contact-content">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-info">
          <h2>Get In Touch</h2>
          <p>We're here to help with any questions about our services or if you need assistance with document preparation.</p>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="info-text">
              <h3>Our Office</h3>
              <p>123 Business Street, City, Country</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="fas fa-phone"></i>
            </div>
            <div class="info-text">
              <h3>Phone</h3>
              <p>+1 (555) 123-4567</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="info-text">
              <h3>Email</h3>
              <p>info@docuprep.com</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="fas fa-clock"></i>
            </div>
            <div class="info-text">
              <h3>Hours</h3>
              <p>Monday - Friday: 9am - 6pm</p>
              <p>Saturday: 10am - 4pm</p>
              <p>Sunday: Closed</p>
            </div>
          </div>
          
          <div class="social-connect">
            <h3>Connect With Us</h3>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <h2>Send Us a Message</h2>
          <form id="contact-form">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone">
            </div>
            
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" required>
            </div>
            
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            
            <div class="form-group checkbox-group">
              <input type="checkbox" id="subscribe" name="subscribe">
              <label for="subscribe">Subscribe to our newsletter for updates and promotions.</label>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="map-section">
    <div class="container">
      <h2>Find Us</h2>
      <div class="map-container">
        <!-- A placeholder for a map, in a real project this would be replaced with an actual map -->
        <div class="map-placeholder">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901291102!2d-74.00425698461597!3d40.7127837793933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2s!4v1645995429547!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header">
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common questions about our services</p>
      </div>
      <div class="faq-grid">
        <div class="faq-item">
          <div class="faq-question">
            <h3>How long does it take to prepare a document?</h3>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Most documents can be prepared in just 5-10 minutes using our guided form system. Once you submit the form, your document is generated instantly.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            <h3>Are the documents legally valid?</h3>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Yes, our document templates are created by legal professionals and are designed to meet standard legal requirements. However, we recommend having important legal documents reviewed by a lawyer in your jurisdiction.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            <h3>Can I edit my document after it's been generated?</h3>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Yes, you can edit your documents after generation. We provide both PDF and editable formats for most document types.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            <h3>Do you offer custom document templates?</h3>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Yes, we offer custom document template services for businesses and organizations. Please contact our team for more information about custom solutions.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            <h3>Is my information secure?</h3>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>We take data security seriously. All information submitted through our platform is encrypted and we never share your personal information with third parties.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">
            <h3>Can I get help with a specific document?</h3>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Absolutely! Our support team is available to assist with specific document requirements. Simply contact us with your questions and we'll be happy to help.</p>
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