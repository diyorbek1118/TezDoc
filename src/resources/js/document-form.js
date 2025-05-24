document.addEventListener('DOMContentLoaded', function() {
  // Get document type from URL
  const urlParams = new URLSearchParams(window.location.search);
  const documentType = urlParams.get('type');
  
  // Update page title based on document type
  updateDocumentTitle(documentType);
  
  // Load document-specific form fields
  loadDocumentFields(documentType);
  
  // Navigation between form steps
  setupFormNavigation();
  
  // Form submission
  setupFormSubmission();
  
  // Review step population
  setupReviewStep();
});

function updateDocumentTitle(documentType) {
  const titleElement = document.getElementById('document-title');
  
  if (titleElement && documentType) {
    const formattedType = documentType
      .split('-')
      .map(word => word.charAt(0).toUpperCase() + word.slice(1))
      .join(' ');
    
    titleElement.textContent = `Prepare Your ${formattedType}`;
    document.title = `${formattedType} Preparation - DocuPrep`;
  }
}

function loadDocumentFields(documentType) {
  const fieldsContainer = document.getElementById('document-specific-fields');
  
  if (!fieldsContainer || !documentType) return;
  
  // Clear existing fields
  fieldsContainer.innerHTML = '';
  
  // Generate fields based on document type
  let fields = [];
  
  switch (documentType) {
    case 'job-application':
      fields = [
        { type: 'text', id: 'position', label: 'Position Applied For', required: true },
        { type: 'text', id: 'company', label: 'Company Name', required: true },
        { type: 'date', id: 'availability', label: 'Date Available to Start', required: true },
        { type: 'select', id: 'employment-type', label: 'Employment Type', 
          options: ['Full-time', 'Part-time', 'Contract', 'Temporary', 'Internship'], required: true },
        { type: 'textarea', id: 'experience', label: 'Relevant Experience', rows: 4 },
        { type: 'textarea', id: 'education', label: 'Education', rows: 4 },
        { type: 'textarea', id: 'skills', label: 'Skills', rows: 4 },
        { type: 'textarea', id: 'references', label: 'References', rows: 4 }
      ];
      break;
      
    case 'recommendation-letter':
      fields = [
        { type: 'text', id: 'recipient-name', label: 'Recipient Name', required: true },
        { type: 'text', id: 'recipient-title', label: 'Recipient Title' },
        { type: 'text', id: 'recipient-company', label: 'Recipient Company/Organization' },
        { type: 'text', id: 'recommended-person', label: 'Person Being Recommended', required: true },
        { type: 'text', id: 'relationship', label: 'Your Relationship to the Person', required: true },
        { type: 'select', id: 'recommendation-type', label: 'Recommendation Type', 
          options: ['Academic', 'Professional', 'Character'], required: true },
        { type: 'textarea', id: 'qualities', label: 'Key Qualities and Strengths', rows: 4, required: true },
        { type: 'textarea', id: 'examples', label: 'Specific Examples of Excellence', rows: 4, required: true },
        { type: 'textarea', id: 'closing', label: 'Closing Statement', rows: 4 }
      ];
      break;
      
    case 'explanatory-letter':
      fields = [
        { type: 'text', id: 'recipient-name', label: 'Recipient Name', required: true },
        { type: 'text', id: 'recipient-title', label: 'Recipient Title' },
        { type: 'text', id: 'recipient-organization', label: 'Recipient Organization' },
        { type: 'select', id: 'explanation-type', label: 'Explanation Type', 
          options: ['Absence', 'Late Payment', 'Gap in Employment', 'Academic Performance', 'Other'], required: true },
        { type: 'textarea', id: 'situation', label: 'Situation Description', rows: 4, required: true },
        { type: 'textarea', id: 'reasoning', label: 'Reasoning and Context', rows: 4, required: true },
        { type: 'textarea', id: 'resolution', label: 'Proposed Resolution', rows: 4 },
        { type: 'textarea', id: 'additional-info', label: 'Additional Information', rows: 4 }
      ];
      break;
      
    // Add more cases for other document types
    
    default:
      // Generic fields if document type is not recognized
      fields = [
        { type: 'text', id: 'document-title', label: 'Document Title', required: true },
        { type: 'textarea', id: 'document-content', label: 'Document Content', rows: 6, required: true }
      ];
  }
  
  // Create and append form fields
  fields.forEach(field => {
    const fieldElement = createFormField(field);
    fieldsContainer.appendChild(fieldElement);
  });
}

function createFormField(field) {
  const formGroup = document.createElement('div');
  formGroup.className = field.fullWidth ? 'form-group full-width' : 'form-group';
  
  const label = document.createElement('label');
  label.setAttribute('for', field.id);
  label.textContent = field.label;
  
  formGroup.appendChild(label);
  
  let input;
  
  switch (field.type) {
    case 'textarea':
      input = document.createElement('textarea');
      input.rows = field.rows || 3;
      break;
      
    case 'select':
      input = document.createElement('select');
      
      // Add a default empty option
      const defaultOption = document.createElement('option');
      defaultOption.value = '';
      defaultOption.textContent = `Select ${field.label}`;
      input.appendChild(defaultOption);
      
      // Add options
      field.options.forEach(optionText => {
        const option = document.createElement('option');
        option.value = optionText.toLowerCase().replace(/\s+/g, '-');
        option.textContent = optionText;
        input.appendChild(option);
      });
      break;
      
    default:
      input = document.createElement('input');
      input.type = field.type;
  }
  
  input.id = field.id;
  input.name = field.id;
  
  if (field.required) {
    input.required = true;
  }
  
  formGroup.appendChild(input);
  
  return formGroup;
}

function setupFormNavigation() {
  const nextButtons = document.querySelectorAll('.next-step');
  const prevButtons = document.querySelectorAll('.prev-step');
  const editButtons = document.querySelectorAll('.edit-section');
  const progressSteps = document.querySelectorAll('.progress-step');
  const formSteps = document.querySelectorAll('.form-step');
  
  // Next button functionality
  nextButtons.forEach(button => {
    button.addEventListener('click', () => {
      const currentStep = parseInt(button.closest('.form-step').dataset.step);
      const nextStep = currentStep + 1;
      
      // Validate fields in current step before proceeding
      const currentFormStep = document.querySelector(`.form-step[data-step="${currentStep}"]`);
      const requiredFields = currentFormStep.querySelectorAll('input[required], select[required], textarea[required]');
      let isValid = true;
      
      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          isValid = false;
          field.classList.add('invalid');
          
          // Add event listener to remove invalid class when user starts typing
          field.addEventListener('input', function() {
            this.classList.remove('invalid');
          }, { once: true });
        }
      });
      
      if (!isValid) {
        return;
      }
      
      // If validation passes, proceed to next step
      formSteps.forEach(step => step.classList.remove('active'));
      progressSteps.forEach(step => step.classList.remove('active'));
      
      document.querySelector(`.form-step[data-step="${nextStep}"]`).classList.add('active');
      document.querySelector(`.progress-step[data-step="${nextStep}"]`).classList.add('active');
      
      // Mark previous steps as completed
      for (let i = 1; i <= currentStep; i++) {
        document.querySelector(`.progress-step[data-step="${i}"]`).classList.add('completed');
      }
      
      // If going to review step, populate review sections
      if (nextStep === 3) {
        populateReviewSections();
      }
      
      // Scroll to top of form
      window.scrollTo({
        top: document.querySelector('.preparation-form').offsetTop - 100,
        behavior: 'smooth'
      });
    });
  });
  
  // Previous button functionality
  prevButtons.forEach(button => {
    button.addEventListener('click', () => {
      const currentStep = parseInt(button.closest('.form-step').dataset.step);
      const prevStep = currentStep - 1;
      
      formSteps.forEach(step => step.classList.remove('active'));
      progressSteps.forEach(step => step.classList.remove('active'));
      
      document.querySelector(`.form-step[data-step="${prevStep}"]`).classList.add('active');
      document.querySelector(`.progress-step[data-step="${prevStep}"]`).classList.add('active');
      
      // Mark current step as not completed
      document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.remove('completed');
      
      // Scroll to top of form
      window.scrollTo({
        top: document.querySelector('.preparation-form').offsetTop - 100,
        behavior: 'smooth'
      });
    });
  });
  
  // Edit button functionality
  editButtons.forEach(button => {
    button.addEventListener('click', () => {
      const stepToEdit = parseInt(button.dataset.step);
      
      formSteps.forEach(step => step.classList.remove('active'));
      progressSteps.forEach(step => step.classList.remove('active'));
      
      document.querySelector(`.form-step[data-step="${stepToEdit}"]`).classList.add('active');
      document.querySelector(`.progress-step[data-step="${stepToEdit}"]`).classList.add('active');
      
      // Scroll to top of form
      window.scrollTo({
        top: document.querySelector('.preparation-form').offsetTop - 100,
        behavior: 'smooth'
      });
    });
  });
}

function populateReviewSections() {
  const personalInfoReview = document.getElementById('personal-info-review');
  const documentDetailsReview = document.getElementById('document-details-review');
  
  if (!personalInfoReview || !documentDetailsReview) return;
  
  // Clear previous review content
  personalInfoReview.innerHTML = '';
  documentDetailsReview.innerHTML = '';
  
  // Populate personal information review
  const personalFields = [
    { id: 'first-name', label: 'First Name' },
    { id: 'last-name', label: 'Last Name' },
    { id: 'email', label: 'Email Address' },
    { id: 'phone', label: 'Phone Number' },
    { id: 'address', label: 'Address' },
    { id: 'city', label: 'City' },
    { id: 'state', label: 'State/Province' },
    { id: 'zip', label: 'Postal/Zip Code' },
    { id: 'country', label: 'Country' }
  ];
  
  personalFields.forEach(field => {
    const value = document.getElementById(field.id).value.trim();
    if (value) {
      const reviewItem = createReviewItem(field.label, value);
      personalInfoReview.appendChild(reviewItem);
    }
  });
  
  // Populate document details review
  const documentFieldsContainer = document.getElementById('document-specific-fields');
  const documentFields = documentFieldsContainer.querySelectorAll('input, select, textarea');
  
  documentFields.forEach(field => {
    const label = document.querySelector(`label[for="${field.id}"]`).textContent;
    let value = field.value.trim();
    
    if (field.tagName.toLowerCase() === 'select' && value) {
      value = field.options[field.selectedIndex].text;
    }
    
    if (value) {
      const reviewItem = createReviewItem(label, value);
      documentDetailsReview.appendChild(reviewItem);
    }
  });
}

function createReviewItem(label, value) {
  const item = document.createElement('div');
  item.className = 'review-item';
  
  const labelElement = document.createElement('strong');
  labelElement.textContent = label;
  
  const valueElement = document.createElement('p');
  valueElement.textContent = value;
  
  item.appendChild(labelElement);
  item.appendChild(valueElement);
  
  return item;
}

function setupFormSubmission() {
  const form = document.getElementById('document-form');
  const modal = document.getElementById('confirmation-modal');
  
  if (form && modal) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Show success modal
      modal.classList.add('show');
      
      // Reset form
      // form.reset();
      
      // This would be where you'd actually submit the form data to a server
      // For demo purposes, we're just showing the success modal
    });
  }
}

function setupReviewStep() {
  // This function would handle any additional review step functionality
  // For example, dynamically generating review content based on form input
}