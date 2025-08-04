<div class="wallet-usage-container">
  <div class="breadcrumb-section">
    <nav class="breadcrumb">
      <div class="breadcrumb-item">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 13C6.6 5 17.4 5 21 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          <path d="M12 17L12 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          <path d="M10 15L14 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
        <span>Observability</span>
      </div>
      <span class="breadcrumb-separator">/</span>
      <div class="breadcrumb-item current">
        <span>Wallet Usage</span>
      </div>
    </nav>
  </div>

  <div class="tabs-section">
    <div class="tabs-container">
      <button class="tab-button active" data-tab="wallet-usage">
        Wallet Usage
      </button>
      <button class="tab-button" data-tab="projects">
        Projects
      </button>
      <button class="tab-button" data-tab="keys-credentials">
        Keys & credentials
      </button>
      <button class="tab-button" data-tab="comp-dep">
        Comp & Dep
      </button>
    </div>
  </div>

  <div class="observability-content-section">
    <div class="empty-state">
      <div class="empty-state-illustration">
        <div class="illustration-container">
          <!-- Background circle -->
          <div class="bg-circle"></div>

          <!-- Person sitting -->
          <div class="person-sitting">
            <div class="person-body"></div>
            <div class="person-head"></div>
            <div class="person-hair"></div>
            <div class="person-arm"></div>
            <div class="chair"></div>
          </div>

          <!-- Phone/Device -->
          <div class="phone-device">
            <div class="phone-body">
              <div class="phone-screen">
                <div class="phone-content">
                  <div class="phone-line"></div>
                  <div class="phone-line short"></div>
                </div>
              </div>
            </div>
            <div class="phone-connection"></div>
          </div>

          <!-- Credit Card -->
          <div class="credit-card">
            <div class="card-body">
              <div class="card-chip"></div>
              <div class="card-number">
                <div class="card-digit-group"></div>
                <div class="card-digit-group"></div>
                <div class="card-digit-group"></div>
                <div class="card-digit-group"></div>
              </div>
            </div>
          </div>

          <!-- Dollar Signs -->
          <div class="dollar-sign dollar-1">
            <span>$</span>
          </div>
          <div class="dollar-sign dollar-2">
            <span>$</span>
          </div>
          <div class="dollar-sign dollar-3">
            <span>$</span>
          </div>

          <!-- Hourglass -->
          <div class="hourglass">
            <div class="hourglass-top"></div>
            <div class="hourglass-middle"></div>
            <div class="hourglass-bottom"></div>
            <div class="hourglass-sand"></div>
          </div>

          <!-- Calendar -->
          <div class="calendar">
            <div class="calendar-header"></div>
            <div class="calendar-body">
              <div class="calendar-grid">
                <div class="calendar-cell"></div>
                <div class="calendar-cell"></div>
                <div class="calendar-cell"></div>
                <div class="calendar-cell active"></div>
              </div>
            </div>
          </div>

          <!-- Plant -->
          <div class="plant">
            <div class="plant-pot"></div>
            <div class="plant-stem"></div>
            <div class="plant-leaf leaf-1"></div>
            <div class="plant-leaf leaf-2"></div>
          </div>

          <!-- Chat Bubble -->
          <div class="chat-bubble">
            <div class="chat-lines">
              <div class="chat-line"></div>
              <div class="chat-line short"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="empty-state-content">
        <h2 class="empty-state-title">Let's Start by Making Your First Transaction</h2>
        <p class="empty-state-description">
          You currently have no transactions in your application.
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