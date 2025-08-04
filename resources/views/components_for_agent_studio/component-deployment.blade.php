<div class="component-deployment-container">
  <div class="header-section">
    <div class="header-icon">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
      </svg>
    </div>
    <h1 class="header-title">Component Deployment</h1>
    <p class="header-description">
      Deploy and monitor your components. Build scalable applications with reusable components and microservice
      architecture
    </p>
  </div>

  <div class="tabs-section">
    <div class="tabs-container">
      <button class="tab-button active" data-tab="deployed">
        Deployed
      </button>
      <button class="tab-button" data-tab="ready-to-deploy">
        Ready to Deploy
      </button>
    </div>
  </div>

  <div class="component-deployment-content-section ">
    <h2 class="section-title">Deployed Components</h2>

    <div class="empty-state">
      <div class="empty-state-illustration">
        <div class="illustration-container">
          <!-- Developer sitting with laptop -->
          <div class="developer-sitting">
            <div class="developer-body"></div>
            <div class="developer-head"></div>
            <div class="laptop"></div>
          </div>

          <!-- Developer standing with magnifying glass -->
          <div class="developer-standing">
            <div class="developer-body-standing"></div>
            <div class="developer-head-standing"></div>
            <div class="magnifying-glass"></div>
          </div>

          <!-- Code screen -->
          <div class="code-screen">
            <div class="screen-header">
              <div class="screen-controls">
                <span class="control-dot red"></span>
                <span class="control-dot yellow"></span>
                <span class="control-dot green"></span>
              </div>
            </div>
            <div class="screen-content">
              <div class="code-line long"></div>
              <div class="code-line medium"></div>
              <div class="code-line short"></div>
              <div class="code-line long"></div>
              <div class="code-line medium"></div>
            </div>
            <!-- Gear icons -->
            <div class="gear gear-1"></div>
            <div class="gear gear-2"></div>
            <div class="gear gear-3"></div>
          </div>
        </div>
      </div>

      <div class="empty-state-content">
        <h3 class="empty-state-title">Let's Start by Deploying Your First Component</h3>
        <p class="empty-state-description">
          You currently have no deployed components. Begin by deploying your first component to make it available in
          this environment.
        </p>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.tab-button').on('click', function() {
      $('.tab-button').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>