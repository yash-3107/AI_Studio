<div class="flow-deployment-page">
  <div class="flow_deployemnt-container">
    <!-- Header Section -->
    <div class=" header-section">
      <div class="header-content">
        <div class="header-left">
          <svg class="header-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
            </path>
          </svg>
          <h1 class="header-title">Flow Deployment</h1>
        </div>
      </div>

      <p class="header-description">
        Deploy and monitor your flows. Bring your agents/ copilots to the end user with scalable microservice
        architecture
      </p>

      <!-- Environment Selector -->
      <div class="environment-selector">
        <select class="environment-dropdown">
          <option value="both">Both UAT and Production</option>
          <option value="uat">UAT Only</option>
          <option value="production">Production Only</option>
        </select>
        <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-section">
      <div class="stats-grid">
        <!-- Total Projects -->
        <div class="stat-card">
          <div class="stat-header">
            <svg class="stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
              </path>
            </svg>
            <h3 class="stat-title">Total Projects</h3>
          </div>
          <div class="stat-value">0</div>
        </div>

        <!-- Total Flows -->
        <div class="stat-card">
          <div class="stat-header">
            <svg class="stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
              </path>
            </svg>
            <h3 class="stat-title">Total Flows</h3>
          </div>
          <div class="stat-value">0</div>
        </div>

        <!-- Total Flows Deployed -->
        <div class="stat-card">
          <div class="stat-header">
            <svg class="stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 16V4m0 0L3 8l4 4m0-8l4 4-4 4m6 0v12m0 0l4-4-4-4m0 8l-4-4 4-4"></path>
            </svg>
            <h3 class="stat-title">Total Flows Deployed</h3>
          </div>
          <div class="stat-value">0</div>
        </div>
      </div>
    </div>

    <!-- Tab Navigation -->
    <div class="tab-section">
      <div class="tab-nav">
        <button class="tab-button active">Deployed</button>
        <button class="tab-button">All Projects</button>
      </div>
    </div>

    <!-- Content Section -->
    <div class="content-deployment-content-section">
      <h2 class="content-title">Deployed projects</h2>

      <!-- Empty State -->
      <div class="flow-deployment-empty-state">
        <div class="flow-deployment-empty-state-content">
          <!-- Illustration -->
          <div class="illustration">
            <svg class="illustration-svg" viewBox="0 0 500 400" fill="none">
              <!-- Background elements -->
              <ellipse cx="250" cy="350" rx="200" ry="30" fill="#E0E7FF" opacity="0.3" />

              <!-- Main device/laptop -->
              <rect x="150" y="200" width="280" height="180" rx="12" fill="#8B5CF6" />
              <rect x="160" y="210" width="260" height="150" rx="8" fill="#A78BFA" />
              <rect x="170" y="220" width="240" height="110" rx="4" fill="#FFFFFF" />

              <!-- Screen content - flowchart elements -->
              <circle cx="250" cy="240" r="8" fill="#8B5CF6" />
              <rect x="180" y="270" width="30" height="15" rx="7.5" fill="#EF4444" />
              <rect x="230" y="270" width="30" height="15" rx="7.5" fill="#EF4444" />
              <rect x="280" y="270" width="30" height="15" rx="7.5" fill="#EF4444" />
              <rect x="330" y="270" width="30" height="15" rx="7.5" fill="#EF4444" />

              <rect x="180" y="300" width="30" height="15" rx="7.5" fill="#EF4444" />
              <rect x="230" y="300" width="30" height="15" rx="7.5" fill="#EF4444" />
              <rect x="280" y="300" width="30" height="15" rx="7.5" fill="#EF4444" />
              <rect x="330" y="300" width="30" height="15" rx="7.5" fill="#EF4444" />

              <!-- Connection lines -->
              <line x1="250" y1="248" x2="195" y2="270" stroke="#A78BFA" stroke-width="2" />
              <line x1="250" y1="248" x2="245" y2="270" stroke="#A78BFA" stroke-width="2" />
              <line x1="250" y1="248" x2="295" y2="270" stroke="#A78BFA" stroke-width="2" />
              <line x1="250" y1="248" x2="345" y2="270" stroke="#A78BFA" stroke-width="2" />

              <line x1="195" y1="285" x2="195" y2="300" stroke="#A78BFA" stroke-width="2" />
              <line x1="245" y1="285" x2="245" y2="300" stroke="#A78BFA" stroke-width="2" />
              <line x1="295" y1="285" x2="295" y2="300" stroke="#A78BFA" stroke-width="2" />
              <line x1="345" y1="285" x2="345" y2="300" stroke="#A78BFA" stroke-width="2" />

              <!-- Person figure -->
              <circle cx="100" cy="280" r="15" fill="#1F2937" />
              <rect x="85" y="295" width="30" height="40" rx="15" fill="#3B82F6" />
              <rect x="90" y="305" width="8" height="25" fill="#1D4ED8" />
              <rect x="102" y="305" width="8" height="25" fill="#EF4444" />

              <!-- Laptop stand/base -->
              <rect x="200" y="380" width="100" height="8" rx="4" fill="#4C1D95" />

              <!-- Additional decorative elements -->
              <rect x="80" y="150" width="40" height="30" rx="6" fill="#F59E0B" opacity="0.8" />
              <rect x="380" y="180" width="35" height="25" rx="5" fill="#10B981" opacity="0.8" />

              <!-- Floating UI elements -->
              <circle cx="80" cy="200" r="4" fill="#F472B6" />
              <circle cx="420" cy="220" r="4" fill="#8B5CF6" />
              <rect x="60" y="320" width="8" height="8" rx="4" fill="#14B8A6" />
              <rect x="440" y="300" width="8" height="8" rx="4" fill="#F59E0B" />
            </svg>
          </div>

          <div class="empty-state-text">
            <h3 class="empty-state-title">Let's Start by Deploying Your First Project</h3>
            <p class="empty-state-description">
              You currently have no deployed flows. Begin by deploying your first flow to make it available in this
              environment.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>