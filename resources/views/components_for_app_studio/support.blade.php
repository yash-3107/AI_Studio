<div class="support-dashboard">
  <!-- Header -->
  <div class="dashboard-header">
    <div class="header-left">
      <div class="support-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
            fill="currentColor" />
        </svg>
      </div>
      <h1 class="page-title">Support</h1>
    </div>
    <button class="feedback-btn">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"
          fill="currentColor" />
      </svg>
      Feedback
    </button>
  </div>

  <!-- Main Content -->
  <div class="dashboard-content">
    <h2 class="section-title">All Tickets</h2>

    <!-- Stats Cards -->
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-label">Total Tickets</span>
          <div class="stat-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6z" fill="currentColor" />
            </svg>
          </div>
        </div>
        <div class="stat-number">{{ $totalTickets ?? 0 }}</div>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-label">Open Tickets</span>
          <div class="stat-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                fill="currentColor" />
            </svg>
          </div>
        </div>
        <div class="stat-number">{{ $openTickets ?? 0 }}</div>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-label">Reopen Tickets</span>
          <div class="stat-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"
                fill="currentColor" />
            </svg>
          </div>
        </div>
        <div class="stat-number">{{ $reopenTickets ?? 0 }}</div>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-label">Closed Tickets</span>
          <div class="stat-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" fill="currentColor" />
            </svg>
          </div>
        </div>
        <div class="stat-number">{{ $closedTickets ?? 0 }}</div>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-label">Resolved Tickets</span>
          <div class="stat-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                fill="currentColor" />
            </svg>
          </div>
        </div>
        <div class="stat-number">{{ $resolvedTickets ?? 0 }}</div>
      </div>
    </div>

    <!-- Tickets Section -->
    <div class="tickets-section">
      <h3 class="tickets-title">All Tickets</h3>

      @if(($totalTickets ?? 0) == 0)
      <div class="empty-state">
        <div class="empty-illustration">
          <div class="illustration-container">
            <div class="person-avatar">
              <div class="person-face">
                <div class="person-hair"></div>
                <div class="person-body"></div>
              </div>
            </div>
            <div class="floating-icons">
              <div class="icon clock-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                  <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2" />
                </svg>
              </div>
              <div class="icon user-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" />
                  <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2" />
                </svg>
              </div>
              <div class="icon message-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor"
                    stroke-width="2" />
                </svg>
              </div>
              <div class="icon settings-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
                  <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"
                    stroke="currentColor" stroke-width="2" />
                </svg>
              </div>
            </div>
            <div class="laptop" style="margin-bottom: 5px;">
              <img src="https://vanij.adya.ai/assets/Support-DePiy9Nk.webp" style="height:300px;width:300px; float:right;" alt="">
            </div>
          </div>
        </div>

        <div class="empty-content" style="margin-top: 5px;">
          <h4 class="empty-title">Start Building Your Space</h4>
          <p class="empty-description">
            You currently have no tickets. Begin by creating your first ticket and start managing your work efficiently.
          </p>
          <button class="create-btn">Create New</button>
        </div>
      </div>
      @else
      <!-- Tickets List would go here -->
      <div class="tickets-list">
        <!-- Ticket items would be rendered here -->
      </div>
      @endif
    </div>
  </div>
</div>
