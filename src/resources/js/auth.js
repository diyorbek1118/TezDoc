document.addEventListener('DOMContentLoaded', function() {
  // Sign In Form Handling
  const signinForm = document.getElementById('signin-form');
  if (signinForm) {
    signinForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form data
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const remember = document.getElementById('remember') ? document.getElementById('remember').checked : false;
      
      // Validate form data
      if (!validateEmail(email)) {
        showFormError('email', 'Please enter a valid email address');
        return;
      }
      
      if (!password) {
        showFormError('password', 'Please enter your password');
        return;
      }
      
      // This would typically be an API call to authenticate the user
      // For demo purposes, we'll simulate a successful login
      
      // Redirect to home page after successful login
      // window.location.href = 'index.html';
      
      // For demo purposes, just show an alert
      alert('Sign in successful! This would normally redirect to your dashboard.');
    });
  }
  
  // Sign Up Form Handling
  const signupForm = document.getElementById('signup-form');
  if (signupForm) {
    // Password strength meter
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const strengthIndicator = document.querySelector('.strength-indicator');
    const strengthText = document.querySelector('.strength-text');
    
    if (passwordInput && strengthIndicator && strengthText) {
      passwordInput.addEventListener('input', function() {
        const strength = calculatePasswordStrength(this.value);
        updatePasswordStrengthUI(strength, strengthIndicator, strengthText);
      });
    }
    
    // Form submission
    signupForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form data
      const firstName = document.getElementById('first-name').value;
      const lastName = document.getElementById('last-name').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;
      const termsAgreed = document.getElementById('terms').checked;
      
      // Validate form data
      if (!firstName) {
        showFormError('first-name', 'Please enter your first name');
        return;
      }
      
      if (!lastName) {
        showFormError('last-name', 'Please enter your last name');
        return;
      }
      
      if (!validateEmail(email)) {
        showFormError('email', 'Please enter a valid email address');
        return;
      }
      
      if (!password) {
        showFormError('password', 'Please enter a password');
        return;
      }
      
      if (password.length < 8) {
        showFormError('password', 'Password must be at least 8 characters');
        return;
      }
      
      if (password !== confirmPassword) {
        showFormError('confirm-password', 'Passwords do not match');
        return;
      }
      
      if (!termsAgreed) {
        showFormError('terms', 'You must agree to the terms of service');
        return;
      }
      
      // This would typically be an API call to register the user
      // For demo purposes, we'll simulate a successful registration
      
      // Redirect to home page or login page after successful registration
      // window.location.href = 'index.html';
      
      // For demo purposes, just show an alert
      alert('Account created successfully! This would normally redirect to your dashboard or login page.');
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
});

// Helper function to validate email
function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

// Helper function to show form errors
function showFormError(fieldId, message) {
  const field = document.getElementById(fieldId);
  field.classList.add('invalid');
  
  // Create error message if it doesn't exist
  let errorElement = field.parentElement.querySelector('.error-message');
  
  if (!errorElement) {
    errorElement = document.createElement('div');
    errorElement.className = 'error-message';
    field.parentElement.appendChild(errorElement);
  }
  
  errorElement.textContent = message;
  
  // Remove error when field is focused
  field.addEventListener('focus', function() {
    this.classList.remove('invalid');
    errorElement.textContent = '';
  }, { once: true });
}

// Helper function to calculate password strength
function calculatePasswordStrength(password) {
  // Score from 0 to 100
  let score = 0;
  
  // No password
  if (!password) return 0;
  
  // Length check
  score += Math.min(password.length * 5, 30);
  
  // Character variety checks
  if (/[a-z]/.test(password)) score += 10; // lowercase
  if (/[A-Z]/.test(password)) score += 10; // uppercase
  if (/[0-9]/.test(password)) score += 10; // numbers
  if (/[^a-zA-Z0-9]/.test(password)) score += 15; // special characters
  
  // Complexity check
  const varietyCount = (/[a-z]/.test(password) ? 1 : 0) + 
                        (/[A-Z]/.test(password) ? 1 : 0) + 
                        (/[0-9]/.test(password) ? 1 : 0) + 
                        (/[^a-zA-Z0-9]/.test(password) ? 1 : 0);
  
  score += varietyCount * 5;
  
  // Bonus for length over 10
  if (password.length > 10) score += 10;
  
  // Cap at 100
  return Math.min(score, 100);
}

// Helper function to update password strength UI
function updatePasswordStrengthUI(strength, indicator, text) {
  // Update width of strength indicator
  indicator.style.width = strength + '%';
  
  // Update color based on strength
  if (strength < 30) {
    indicator.style.backgroundColor = 'var(--error-color)';
    text.textContent = 'Weak password';
  } else if (strength < 60) {
    indicator.style.backgroundColor = 'var(--warning-color)';
    text.textContent = 'Moderate password';
  } else if (strength < 80) {
    indicator.style.backgroundColor = 'var(--secondary-color)';
    text.textContent = 'Strong password';
  } else {
    indicator.style.backgroundColor = 'var(--success-color)';
    text.textContent = 'Very strong password';
  }
}