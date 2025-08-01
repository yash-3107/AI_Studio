{{-- Audit Trail Container --}}
<div class="audit-trail-container">
  {{-- Header Section --}}
  <div class="audit-header">
    <h2 class="audit-title">
      <svg class="audit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
        <path d="M9 12l2 2 4-4"></path>
        <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"></path>
        <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"></path>
        <path d="M12 3v6m0 6v6"></path>
      </svg>
      Audit Trail
    </h2>
  </div>

  {{-- Platform Tabs --}}
  <div class="platform-tabs">
    <button class="tab-btn active" data-platform="core">
      <span class="tab-icon core-icon">C</span>
      Core
    </button>
    <button class="tab-btn" data-platform="agent">
      <span class="tab-icon agent-icon">A</span>
      Agent Studio
    </button>
    <button class="tab-btn" data-platform="cloud">
      <span class="tab-icon cloud-icon">CS</span>
      Cloud Studio
    </button>
    <button class="tab-btn" data-platform="app">
      <span class="tab-icon app-icon">AS</span>
      App Studio
    </button>
    <button class="tab-btn" data-platform="model">
      <span class="tab-icon model-icon">MS</span>
      Model Studio
    </button>
    <button class="tab-btn" data-platform="marketplace">
      <span class="tab-icon marketplace-icon">AI</span>
      AI Marketplace
    </button>
  </div>

  {{-- Users Section --}}
  <div class="users-section">
    <h3 class="section-title">All Users</h3>

    {{-- Filter Controls --}}
    <div class="filter-controls">
      <button class="advance-search-btn">Advance Search</button>

      <div class="search-input-wrapper">
        <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <circle cx="11" cy="11" r="8"></circle>
          <path d="m21 21-4.35-4.35"></path>
        </svg>
        <input type="text" class="search-input" placeholder="Search...">
      </div>

      <div class="filter-dropdown">
        <select class="filter-select">
          <option>Action Filter CRUD</option>
          <option>Create</option>
          <option>Read</option>
          <option>Update</option>
          <option>Delete</option>
        </select>
      </div>

      <div class="date-picker">
        <input type="date" class="date-input" placeholder="Pick a date">
      </div>

      <button class="refresh-btn" title="Refresh">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <polyline points="23 4 23 10 17 10"></polyline>
          <polyline points="1 20 1 14 7 14"></polyline>
          <path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path>
        </svg>
      </button>
    </div>

    {{-- Audit Table --}}
    <div class="audit-table-wrapper">
      <table class="audit-table">
        <thead>
          <tr>
            <th>PLATFORM</th>
            <th>ACTIVITY DATE AND TIME</th>
            <th>ACCOUNT USER</th>
            <th>MODULE NAME</th>
            <th>ACTIVITY BRIEF</th>
            <th>STATUS</th>
          </tr>
        </thead>
        <tbody>
          @forelse($auditLogs ?? [] as $log)
          <tr class="audit-row">
            <td class="platform-cell">
              <div class="platform-icon {{ $log['platform'] ?? 'core' }}">
                @switch($log['platform'] ?? 'core')
                @case('agent')
                A
                @break
                @case('cloud')
                CS
                @break
                @case('app')
                AS
                @break
                @case('model')
                MS
                @break
                @case('marketplace')
                AI
                @break
                @default
                C
                @endswitch
              </div>
            </td>
            <td class="datetime-cell">{{ $log['datetime'] ?? 'Jul 30, 2025 - 03:42 PM' }}</td>
            <td class="user-cell">
              <div class="user-info">
                <div class="user-avatar">{{ strtoupper(substr($log['user_name'] ?? 'VG', 0, 2)) }}</div>
                <div class="user-details">
                  <div class="user-name">{{ $log['user_name'] ?? 'Vikash Gupta' }}</div>
                  <div class="user-email">{{ $log['user_email'] ?? 'mrvikash700@gmail.com' }}</div>
                </div>
              </div>
            </td>
            <td class="module-cell">{{ $log['module'] ?? 'User Management' }}</td>
            <td class="activity-cell">{{ $log['activity'] ?? 'User Details updated' }}</td>
            <td class="status-cell">
              <span class="status-badge {{ strtolower($log['status'] ?? 'success') }}">
                {{ $log['status'] ?? 'Success' }}
              </span>
            </td>
          </tr>
          @empty
          {{-- Sample data when no logs available --}}
          <tr class="audit-row">
            <td class="platform-cell">
              <div class="platform-icon core">C</div>
            </td>
            <td class="datetime-cell">Jul 30, 2025 - 03:42 PM</td>
            <td class="user-cell">
              <div class="user-info">
                <div class="user-avatar">VG</div>
                <div class="user-details">
                  <div class="user-name">Vikash Gupta</div>
                  <div class="user-email">mrvikash700@gmail.com</div>
                </div>
              </div>
            </td>
            <td class="module-cell">User Management</td>
            <td class="activity-cell">User Details updated</td>
            <td class="status-cell">
              <span class="status-badge success">Success</span>
            </td>
          </tr>
          <tr class="audit-row">
            <td class="platform-cell">
              <div class="platform-icon core">C</div>
            </td>
            <td class="datetime-cell">Jul 30, 2025 - 03:42 PM</td>
            <td class="user-cell">
              <div class="user-info">
                <div class="user-avatar">VG</div>
                <div class="user-details">
                  <div class="user-name">Vikash Gupta</div>
                  <div class="user-email">mrvikash700@gmail.com</div>
                </div>
              </div>
            </td>
            <td class="module-cell">User Management</td>
            <td class="activity-cell">User Details updated</td>
            <td class="status-cell">
              <span class="status-badge success">Success</span>
            </td>
          </tr>
          <tr class="audit-row">
            <td class="platform-cell">
              <div class="platform-icon core">C</div>
            </td>
            <td class="datetime-cell">Jul 30, 2025 - 03:42 PM</td>
            <td class="user-cell">
              <div class="user-info">
                <div class="user-avatar">VG</div>
                <div class="user-details">
                  <div class="user-name">Vikash Gupta</div>
                  <div class="user-email">mrvikash700@gmail.com</div>
                </div>
              </div>
            </td>
            <td class="module-cell">User Management</td>
            <td class="activity-cell">Organization Details are updated</td>
            <td class="status-cell">
              <span class="status-badge success">Success</span>
            </td>
          </tr>
          <tr class="audit-row">
            <td class="platform-cell">
              <div class="platform-icon core">C</div>
            </td>
            <td class="datetime-cell">Jul 30, 2025 - 03:40 PM</td>
            <td class="user-cell">
              <div class="user-info">
                <div class="user-avatar">VG</div>
                <div class="user-details">
                  <div class="user-name">Vikash Gupta</div>
                  <div class="user-email">mrvikash700@gmail.com</div>
                </div>
              </div>
            </td>
            <td class="module-cell">User Management</td>
            <td class="activity-cell">User Details updated</td>
            <td class="status-cell">
              <span class="status-badge success">Success</span>
            </td>
          </tr>
          <tr class="audit-row">
            <td class="platform-cell">
              <div class="platform-icon core">C</div>
            </td>
            <td class="datetime-cell">Jul 30, 2025 - 03:36 PM</td>
            <td class="user-cell">
              <div class="user-info">
                <div class="user-avatar">VG</div>
                <div class="user-details">
                  <div class="user-name">Vikash Gupta</div>
                  <div class="user-email">mrvikash700@gmail.com</div>
                </div>
              </div>
            </td>
            <td class="module-cell">User Management</td>
            <td class="activity-cell">User Details updated</td>
            <td class="status-cell">
              <span class="status-badge failed">Failed</span>
            </td>
          </tr>
          <tr class="audit-row">
            <td class="platform-cell">
              <div class="platform-icon core">C</div>
            </td>
            <td class="datetime-cell">Jul 30, 2025 - 03:36 PM</td>
            <td class="user-cell">
              <div class="user-info">
                <div class="user-avatar">VG</div>
                <div class="user-details">
                  <div class="user-name">Vikash Gupta</div>
                  <div class="user-email">mrvikash700@gmail.com</div>
                </div>
              </div>
            </td>
            <td class="module-cell">User Management</td>
            <td class="activity-cell">User Details updated</td>
            <td class="status-cell">
              <span class="status-badge failed">Failed</span>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    {{-- Pagination --}}
    <div class="pagination-wrapper">
      <div class="pagination-info">
        <span>Per Page:</span>
        <select class="per-page-select">
          <option value="10" selected>10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
        <span class="pagination-text">1–6 of 6</span>
      </div>

      <div class="pagination-controls">
        <button class="pagination-btn prev" disabled>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <button class="pagination-btn next">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>