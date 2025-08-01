{{-- Key Vault Container --}}
<div class="key-vault-container">
  {{-- Header Section --}}
  <div class="key-vault-header">
    <div class="breadcrumb">
      <svg class="key-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
        <circle cx="12" cy="12" r="3"></circle>
        <path d="M12 1v6m0 6v6"></path>
        <path d="m15.5 3.5-3 3 3 3"></path>
        <path d="m8.5 14.5 3-3-3-3"></path>
      </svg>
      <span class="breadcrumb-text">Key Vault</span>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-current">All Keys</span>
    </div>
  </div>

  {{-- Tab Navigation --}}
  <div class="tab-navigation">
    <button class="tab-btn active" data-tab="all-keys">All Keys</button>
    <button class="tab-btn" data-tab="limits">Limits</button>
  </div>

  {{-- Content Area --}}
  <div class="content-area">
    @if(isset($keys) && count($keys) > 0)
    {{-- Keys List View --}}
    <div class="keys-list">
      @foreach($keys as $key)
      <div class="key-item">
        <div class="key-info">
          <h3 class="key-name">{{ $key['name'] }}</h3>
          <p class="key-description">{{ $key['description'] ?? 'No description' }}</p>
          <div class="key-meta">
            <span class="key-type">{{ $key['type'] ?? 'API Key' }}</span>
            <span class="key-created">Created: {{ $key['created_at'] ?? 'Unknown' }}</span>
          </div>
        </div>
        <div class="key-actions">
          <button class="action-btn edit" title="Edit Key">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
              <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
            </svg>
          </button>
          <button class="action-btn delete" title="Delete Key">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <polyline points="3 6 5 6 21 6"></polyline>
              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            </svg>
          </button>
        </div>
      </div>
      @endforeach
    </div>
    @else
    {{-- Empty State --}}
    <div class="empty-state">
      <div class="empty-illustration">
        <svg class="illustration-svg" viewBox="0 0 400 300" fill="none">
          {{-- Background Elements --}}
          <circle cx="320" cy="80" r="40" fill="#E0F2FE" opacity="0.6" />
          <circle cx="80" cy="200" r="30" fill="#FEF3C7" opacity="0.6" />
          <circle cx="350" cy="250" r="25" fill="#F3E8FF" opacity="0.6" />
          <circle cx="50" cy="50" r="20" fill="#DCFCE7" opacity="0.6" />

          {{-- WiFi Signal --}}
          <g transform="translate(50, 120)">
            <path d="M0 40 Q0 20 20 20 Q40 20 40 40" stroke="#3B82F6" stroke-width="3" fill="none" />
            <path d="M8 40 Q8 28 20 28 Q32 28 32 40" stroke="#3B82F6" stroke-width="3" fill="none" />
            <path d="M16 40 Q16 36 20 36 Q24 36 24 40" stroke="#3B82F6" stroke-width="3" fill="none" />
            <circle cx="20" cy="42" r="2" fill="#3B82F6" />
          </g>

          {{-- Computer/Monitor --}}
          <g transform="translate(150, 80)">
            <rect x="0" y="0" width="120" height="80" fill="#A855F7" rx="8" />
            <rect x="8" y="8" width="104" height="56" fill="#FFFFFF" rx="4" />
            <rect x="40" y="80" width="40" height="8" fill="#6B7280" rx="4" />
            <rect x="35" y="88" width="50" height="4" fill="#6B7280" rx="2" />

            {{-- Play Button --}}
            <g transform="translate(52, 24)">
              <circle cx="8" cy="8" r="8" fill="#A855F7" />
              <polygon points="5,4 5,12 11,8" fill="white" />
            </g>

            {{-- Window Controls --}}
            <circle cx="16" cy="16" r="2" fill="#EF4444" />
            <circle cx="24" cy="16" r="2" fill="#F59E0B" />
            <circle cx="32" cy="16" r="2" fill="#10B981" />
          </g>

          {{-- Person 1 (Left) --}}
          <g transform="translate(90, 140)">
            <ellipse cx="20" cy="45" rx="15" ry="8" fill="#1E40AF" opacity="0.2" />
            <rect x="12" y="25" width="16" height="20" fill="#F59E0B" rx="8" />
            <circle cx="20" cy="15" r="8" fill="#FED7AA" />
            <rect x="8" y="35" width="8" height="12" fill="#1E40AF" rx="4" />
            <rect x="24" y="35" width="8" height="12" fill="#1E40AF" rx="4" />
            <rect x="16" y="45" width="8" height="8" fill="#1F2937" rx="4" />
            {{-- Hair --}}
            <path d="M12 15 Q12 5 20 5 Q28 5 28 15" fill="#1F2937" />
          </g>

          {{-- Person 2 (Right) --}}
          <g transform="translate(240, 130)">
            <ellipse cx="20" cy="55" rx="15" ry="8" fill="#DC2626" opacity="0.2" />
            <rect x="12" y="30" width="16" height="25" fill="#DC2626" rx="8" />
            <circle cx="20" cy="18" r="8" fill="#FED7AA" />
            <rect x="8" y="40" width="8" height="15" fill="#1F2937" rx="4" />
            <rect x="24" y="40" width="8" height="15" fill="#1F2937" rx="4" />
            <rect x="16" y="55" width="8" height="8" fill="#1F2937" rx="4" />
            {{-- Hair (longer) --}}
            <path d="M10 18 Q10 8 20 8 Q30 8 30 18 Q30 25 20 25 Q10 25 10 18" fill="#1F2937" />
          </g>

          {{-- Security Shield --}}
          <g transform="translate(180, 160)">
            <path d="M20 0 L30 6 L30 20 Q30 28 20 32 Q10 28 10 20 L10 6 Z" fill="#10B981" />
            <path d="M20 4 L26 8 L26 18 Q26 24 20 27 Q14 24 14 18 L14 8 Z" fill="#FFFFFF" />
            <circle cx="20" cy="16" r="3" fill="#10B981" />
            <rect x="18" y="19" width="4" height="6" fill="#10B981" rx="1" />
          </g>

          {{-- Checklist Items --}}
          <g transform="translate(300, 150)">
            <rect x="0" y="0" width="3" height="12" fill="#6B7280" rx="1" />
            <rect x="6" y="0" width="20" height="3" fill="#6B7280" rx="1" />
            <rect x="6" y="5" width="15" height="3" fill="#6B7280" rx="1" />
            <circle cx="1.5" cy="2" r="1.5" fill="#10B981" />
            <path d="M0.5 2 L1 2.5 L2.5 1" stroke="white" stroke-width="0.5" fill="none" />
          </g>

          <g transform="translate(300, 170)">
            <rect x="0" y="0" width="3" height="12" fill="#6B7280" rx="1" />
            <rect x="6" y="0" width="18" height="3" fill="#6B7280" rx="1" />
            <rect x="6" y="5" width="12" height="3" fill="#6B7280" rx="1" />
            <circle cx="1.5" cy="2" r="1.5" fill="#10B981" />
            <path d="M0.5 2 L1 2.5 L2.5 1" stroke="white" stroke-width="0.5" fill="none" />
          </g>

          {{-- Floating Elements --}}
          <circle cx="120" cy="60" r="3" fill="#8B5CF6" opacity="0.7" />
          <circle cx="280" cy="40" r="2" fill="#F59E0B" opacity="0.7" />
          <circle cx="70" cy="90" r="2" fill="#10B981" opacity="0.7" />
          <circle cx="330" cy="120" r="3" fill="#EF4444" opacity="0.7" />
        </svg>
      </div>

      <div class="empty-content">
        <h2 class="empty-title">Start Adding Your Keys</h2>
        <p class="empty-description">
          You currently have no keys. Begin by creating your first key and start managing your work
          efficiently. Get started now and bring your ideas to life!
        </p>
        <button class="create-key-btn" onclick="handleCreateKey()">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="16"></line>
            <line x1="8" y1="12" x2="16" y2="12"></line>
          </svg>
          Create Key Vault
        </button>
      </div>
    </div>
    @endif
  </div>
</div>

<!-- jQuery CDN (Place this in your HTML <head> or before your closing </body> tag) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    window.handleCreateKey = function() {
      console.log('Create key vault clicked');
    }
    $('.tab-btn').on('click', function() {
      $('.tab-btn').removeClass('active');
      $(this).addClass('active');

      const tabName = $(this).data('tab');
      console.log('Switched to tab:', tabName);
    });
  });
</script>