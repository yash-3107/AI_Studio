{{-- resources/views/faq.blade.php --}}
<div class="faq-container">
  <div class="faq-header">
    <h1 class="faq-title">FAQs</h1>
    <div class="search-container">
      <input type="text" class="search-input" placeholder="Search FAQ" id="faqSearch">
      <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
        <circle cx="11" cy="11" r="8"></circle>
        <path d="m21 21-4.35-4.35"></path>
      </svg>
    </div>
  </div>

  <div class="faq-list">
    <div class="faq-item active">
      <button class="faq-question" data-target="faq-1">
        <span>WHAT IS VANIJ?</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-1" style="display: block;">
        <p>Vanij delivers enterprise-grade orchestration for seamless automation through a robust four-layer
          architecture. Our platform empowers organizations to create intelligent agents, fine-tune large language
          models, develop applications without coding requirements, and establish comprehensive infrastructure for
          deployment. Vanij transforms complex workflows into efficient, automated processes.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-2">
        <span>HOW CAN I CONTACT CUSTOMER SUPPORT?</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-2">
        <p>You can contact our customer support team through multiple channels: email us at support@vanij.com, use our
          live chat feature available 24/7 on our website, or submit a support ticket through your dashboard. Our team
          typically responds within 2-4 hours during business hours.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-3">
        <span>HOW DO I RESET MY PASSWORD</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-3">
        <p>To reset your password, click on the "Forgot Password" link on the login page. Enter your registered email
          address, and we'll send you a secure password reset link. Follow the instructions in the email to create a new
          password. If you don't receive the email within 10 minutes, please check your spam folder.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-4">
        <span>CAN I USE VANIJ WITHOUT CREATING AN ACCOUNT</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-4">
        <p>While you can explore our documentation and basic features without an account, creating a free account
          unlocks access to our full platform capabilities, including workflow creation, agent deployment, and
          integration tools. Account creation is quick and only requires basic information.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-5">
        <span>HOW DO I GET STARTED WITH VANIJ</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-5">
        <p>Getting started is easy! Sign up for a free account, complete the onboarding tutorial, and explore our
          pre-built templates. Our Quick Start Guide walks you through creating your first automation workflow in under
          10 minutes. You can also join our weekly webinars for hands-on guidance.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-6">
        <span>HOW DO I REPORT A BUG OR PROVIDE FEEDBACK ON VANIJ?</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-6">
        <p>We welcome your feedback! Report bugs through the "Report Issue" button in your dashboard, email us at
          bugs@vanij.com, or use our GitHub repository for technical issues. For general feedback, visit our feedback
          portal where you can also vote on feature requests from other users.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-7">
        <span>HOW DOES VANIJ WORK?</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-7">
        <p>VANIJ operates through a four-layer architecture: Data Layer for secure information processing, Logic Layer
          for workflow orchestration, AI Layer for intelligent decision-making, and Interface Layer for user
          interaction. This structure enables seamless automation of complex business processes without traditional
          coding requirements.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-8">
        <span>DO I NEED ANY SPECIAL HARDWARE OR SOFTWARE TO USE VANIJ?</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-8">
        <p>VANIJ is entirely cloud-based, so you only need a modern web browser (Chrome, Firefox, Safari, or Edge) and a
          stable internet connection. No special hardware or software installation is required. The platform is
          optimized for both desktop and mobile devices.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-9">
        <span>IS THERE A FREE TRIAL AVAILABLE FOR VANIJ?</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-9">
        <p>Yes! We offer a 14-day free trial with full access to all features. No credit card required to start. After
          the trial, you can choose from our flexible pricing plans based on your needs. Current trial users also
          receive priority support and onboarding assistance.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" data-target="faq-10">
        <span>CAN I INTEGRATE VANIJ WITH OTHER TOOLS AND SOFTWARE?</span>
        <svg class="faq-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="6,9 12,15 18,9"></polyline>
        </svg>
      </button>
      <div class="faq-answer" id="faq-10">
        <p>Absolutely! VANIJ supports integration with 500+ popular tools including Slack, Salesforce, Google Workspace,
          Microsoft 365, Zapier, and many more. We also provide REST APIs and webhooks for custom integrations. Our
          marketplace features pre-built connectors for common business applications.</p>
      </div>
    </div>
  </div>

  <div class="pagination">
    <span class="pagination-info">Per Page:</span>
    <select class="pagination-select">
      <option value="10" selected>10</option>
      <option value="20">20</option>
      <option value="50">50</option>
    </select>
    <span class="pagination-info">1–10 of 12</span>
    <div class="pagination-controls">
      <button class="pagination-btn" disabled>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="15,18 9,12 15,6"></polyline>
        </svg>
      </button>
      <button class="pagination-btn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="9,18 15,12 9,6"></polyline>
        </svg>
      </button>
    </div>
  </div>
</div>

<!-- ✅ jQuery CDN (Add before your script or in <head>) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- ✅ FAQ Accordion & Search with jQuery -->
<script>
  $(document).ready(function() {
    // FAQ accordion functionality
    $('.faq-question').on('click', function() {
      const $item = $(this).closest('.faq-item');
      const targetId = $(this).data('target');
      const $answer = $('#' + targetId);
      const isActive = $item.hasClass('active');

      // Close all items
      $('.faq-item').removeClass('active').find('.faq-answer').hide();

      // Open the clicked one if not already active
      if (!isActive) {
        $item.addClass('active');
        $answer.show();
      }
    });

    // Search functionality
    $('#faqSearch').on('input', function() {
      const searchTerm = $(this).val().toLowerCase();

      $('.faq-item').each(function() {
        const question = $(this).find('.faq-question span').text().toLowerCase();
        const answer = $(this).find('.faq-answer p').text().toLowerCase();

        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
  });
</script>