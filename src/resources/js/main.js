// Mobile Navigation Toggle
document.addEventListener('DOMContentLoaded', function() {
  // Mobile Menu Toggle
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');
  
  if (hamburger) {
    hamburger.addEventListener('click', function() {
      navLinks.classList.toggle('active');
      hamburger.classList.toggle('active');
    });
  }

  // Close mobile menu when clicking outside
  document.addEventListener('click', function(event) {
    if (navLinks && navLinks.classList.contains('active') && !event.target.closest('nav')) {
      navLinks.classList.remove('active');
      hamburger.classList.remove('active');
    }
  });

  // FAQ Toggle
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    
    question.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      
      // Close all items
      faqItems.forEach(faqItem => {
        faqItem.classList.remove('active');
      });
      
      // If the clicked item wasn't active, make it active
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });

  // Filter buttons for document types
  const filterButtons = document.querySelectorAll('.filter-btn');
  const documentCards = document.querySelectorAll('.document-card');
  
  if (filterButtons.length > 0) {
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked button
        button.classList.add('active');
        
        const filter = button.dataset.filter;
        
        // Show all cards if "all" is selected, otherwise filter
        documentCards.forEach(card => {
          if (filter === 'all' || card.dataset.category === filter) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // Password visibility toggle
  const togglePasswordButtons = document.querySelectorAll('.toggle-password');
  
  togglePasswordButtons.forEach(button => {
    button.addEventListener('click', function() {
      const passwordInput = this.previousElementSibling;
      const icon = this.querySelector('i');
      
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      if (this.getAttribute('href') !== '#') {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        document.querySelector(targetId).scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });

  // Modal functionality
  const modal = document.getElementById('confirmation-modal');
  const closeModal = document.querySelector('.close-modal');
  
  if (modal && closeModal) {
    closeModal.addEventListener('click', () => {
      modal.classList.remove('show');
    });
    
    // Close modal when clicking outside of it
    window.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.classList.remove('show');
      }
    });
  }
});