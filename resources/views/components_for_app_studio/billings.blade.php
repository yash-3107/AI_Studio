<div class="billing-overview">
  <!-- Header -->
  <div class="billing-header">
    <div class="header-left">
      <div class="billing-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6z" stroke="currentColor"
            stroke-width="2" fill="none" />
          <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2" fill="none" />
          <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2" />
          <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2" />
          <polyline points="10,9 9,9 8,9" stroke="currentColor" stroke-width="2" />
        </svg>
      </div>
      <h1 class="page-title">Billing</h1>
    </div>
  </div>

  <!-- Navigation Tabs -->
  <div class="billing-tabs">
    <button class="tab-btn active" data-tab="overview">Overview</button>
    <button class="tab-btn" data-tab="subscriptions">Subscriptions</button>
    <button class="tab-btn" data-tab="wallet">Wallet</button>
  </div>

  <!-- Overview Content -->
  <div class="billing-content">
    <h2 class="section-title">Overview</h2>

    <!-- Overview Stats -->
    <div class="overview-stats">
      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-label">Paid Tier Platforms</span>
          <div class="stat-tooltip">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
              <path d="M9,9h0a3,3,0,0,1,6,0c0,2-3,3-3,3" stroke="currentColor" stroke-width="2" />
              <path d="m12,17h.01" stroke="currentColor" stroke-width="2" />
            </svg>
          </div>
          <div class="stat-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"
                fill="none" />
              <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2" />
              <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2" />
            </svg>
          </div>
        </div>
        <div class="stat-number">{{ $paidTierPlatforms ?? 0 }}</div>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <span class="stat-label">Total Members Enrolled</span>
          <div class="stat-tooltip">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
              <path d="M9,9h0a3,3,0,0,1,6,0c0,2-3,3-3,3" stroke="currentColor" stroke-width="2" />
              <path d="m12,17h.01" stroke="currentColor" stroke-width="2" />
            </svg>
          </div>
          <div class="stat-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" />
              <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" />
            </svg>
          </div>
        </div>
        <div class="stat-number">{{ $totalMembers ?? '1' }} / {{ $totalMemberLimit ?? '1' }}</div>
      </div>
    </div>

    <!-- Studio Categories -->
    <div class="studio-categories">
      <button class="studio-btn active" data-studio="agent">
        <div class="studio-icon agent-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
            <path
              d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"
              stroke="currentColor" stroke-width="2" />
          </svg>
        </div>
        Agent Studio
      </button>

      <button class="studio-btn" data-studio="cloud">
        <div class="studio-icon cloud-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" stroke="currentColor" stroke-width="2" />
          </svg>
        </div>
        Cloud Studio
      </button>

      <button class="studio-btn" data-studio="app">
        <div class="studio-icon app-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2" />
            <rect x="9" y="9" width="6" height="6" stroke="currentColor" stroke-width="2" />
            <line x1="9" y1="1" x2="9" y2="4" stroke="currentColor" stroke-width="2" />
            <line x1="15" y1="1" x2="15" y2="4" stroke="currentColor" stroke-width="2" />
            <line x1="9" y1="20" x2="9" y2="23" stroke="currentColor" stroke-width="2" />
            <line x1="15" y1="20" x2="15" y2="23" stroke="currentColor" stroke-width="2" />
            <line x1="20" y1="9" x2="23" y2="9" stroke="currentColor" stroke-width="2" />
            <line x1="20" y1="14" x2="23" y2="14" stroke="currentColor" stroke-width="2" />
            <line x1="1" y1="9" x2="4" y2="9" stroke="currentColor" stroke-width="2" />
            <line x1="1" y1="14" x2="4" y2="14" stroke="currentColor" stroke-width="2" />
          </svg>
        </div>
        App Studio
      </button>

      <button class="studio-btn" data-studio="model">
        <div class="studio-icon model-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <polygon points="12,2 2,7 12,12 22,7 12,2" stroke="currentColor" stroke-width="2" />
            <polyline points="2,17 12,22 22,17" stroke="currentColor" stroke-width="2" />
            <polyline points="2,12 12,17 22,12" stroke="currentColor" stroke-width="2" />
          </svg>
        </div>
        Model Studio
      </button>
    </div>

    <!-- Studio Details -->
    <div class="studio-details">
      <h3 class="studio-title">Agent Studio</h3>

      <div class="studio-stats">
        <div class="studio-stat-card">
          <div class="stat-header">
            <span class="stat-label">Subscribed For</span>
            <div class="stat-tooltip">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                <path d="M9,9h0a3,3,0,0,1,6,0c0,2-3,3-3,3" stroke="currentColor" stroke-width="2" />
                <path d="m12,17h.01" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
            <div class="stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 6h13" stroke="currentColor" stroke-width="2" />
                <path d="M6 12h13" stroke="currentColor" stroke-width="2" />
                <path d="M3 18h13" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
          </div>
          <div class="stat-value empty">-</div>
        </div>

        <div class="studio-stat-card">
          <div class="stat-header">
            <span class="stat-label">Subscription Type</span>
            <div class="stat-tooltip">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                <path d="M9,9h0a3,3,0,0,1,6,0c0,2-3,3-3,3" stroke="currentColor" stroke-width="2" />
                <path d="m12,17h.01" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
            <div class="stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2" />
                <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2" />
                <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2" />
                <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
          </div>
          <div class="stat-value empty">-</div>
        </div>

        <div class="studio-stat-card">
          <div class="stat-header">
            <span class="stat-label">Total Members</span>
            <div class="stat-tooltip">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                <path d="M9,9h0a3,3,0,0,1,6,0c0,2-3,3-3,3" stroke="currentColor" stroke-width="2" />
                <path d="m12,17h.01" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
            <div class="stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" />
                <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
          </div>
          <div class="stat-value">{{ $agentStudioMembers ?? '1' }} / {{ $agentStudioMemberLimit ?? '1' }}</div>
        </div>

        <div class="studio-stat-card">
          <div class="stat-header">
            <span class="stat-label">Billing Total</span>
            <div class="stat-tooltip">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                <path d="M9,9h0a3,3,0,0,1,6,0c0,2-3,3-3,3" stroke="currentColor" stroke-width="2" />
                <path d="m12,17h.01" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
            <div class="stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="12" y1="1" x2="12" y2="23" stroke="currentColor" stroke-width="2" />
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
          </div>
          <div class="stat-value price">${{ number_format($agentStudioBillingTotal ?? 0, 2) }}</div>
        </div>
      </div>

      <div class="tenure-info">
        <div class="tenure-card">
          <div class="stat-header">
            <span class="stat-label">Tenure Ends on</span>
            <div class="stat-tooltip">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                <path d="M9,9h0a3,3,0,0,1,6,0c0,2-3,3-3,3" stroke="currentColor" stroke-width="2" />
                <path d="m12,17h.01" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
            <div class="stat-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2" />
              </svg>
            </div>
          </div>
          <div class="stat-value empty">-</div>
        </div>
      </div>
    </div>
  </div>
</div>
