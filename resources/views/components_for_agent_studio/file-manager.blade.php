{{-- resources/views/file-manager.blade.php --}}
<div class="file-manager-container">
  <div class="sidebar">
    <div class="sidebar-header">
      <svg class="folder-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
      </svg>
      <h2 class="sidebar-title">File Manager</h2>
    </div>
    <nav class="sidebar-nav">
      <a href="#" class="nav-item active">
        <span class="nav-text">All Spaces</span>
      </a>
    </nav>
  </div>

  <div class="main-content">
    <div class="empty-state">
      <div class="illustration-container">
        <svg class="file-box-illustration" viewBox="0 0 400 300" fill="none">
          <!-- File box base -->
          <rect x="120" y="180" width="160" height="80" fill="#4A90E2" stroke="#3A7BD5" stroke-width="2" rx="4" />
          <rect x="120" y="180" width="160" height="12" fill="#3A7BD5" />

          <!-- Box label -->
          <rect x="140" y="235" width="50" height="8" fill="white" rx="2" />
          <text x="165" y="242" text-anchor="middle" fill="#4A90E2" font-size="6" font-weight="bold">MY FILES</text>

          <!-- Hand -->
          <ellipse cx="200" cy="280" rx="25" ry="8" fill="#F5C6A0" opacity="0.8" />
          <rect x="190" y="270" width="20" height="15" fill="#F5C6A0" rx="8" />

          <!-- Files in box -->
          <rect x="135" y="160" width="12" height="16" fill="white" stroke="#E0E0E0" />
          <rect x="150" y="155" width="12" height="16" fill="white" stroke="#E0E0E0" />
          <rect x="165" y="150" width="12" height="16" fill="white" stroke="#E0E0E0" />
          <rect x="180" y="145" width="12" height="16" fill="white" stroke="#E0E0E0" />
          <rect x="195" y="140" width="12" height="16" fill="#4A90E2" stroke="#3A7BD5" />
          <rect x="210" y="145" width="12" height="16" fill="white" stroke="#E0E0E0" />
          <rect x="225" y="150" width="12" height="16" fill="white" stroke="#E0E0E0" />
          <rect x="240" y="155" width="12" height="16" fill="white" stroke="#E0E0E0" />
          <rect x="255" y="160" width="12" height="16" fill="white" stroke="#E0E0E0" />

          <!-- Floating documents around the box -->
          <!-- Top left document -->
          <g transform="rotate(-15 80 120)">
            <rect x="70" y="110" width="20" height="26" fill="white" stroke="#E0E0E0" stroke-width="1" rx="2" />
            <rect x="72" y="114" width="16" height="2" fill="#E0E0E0" rx="1" />
            <rect x="72" y="118" width="12" height="1" fill="#E0E0E0" rx="0.5" />
            <rect x="72" y="121" width="14" height="1" fill="#E0E0E0" rx="0.5" />
            <rect x="72" y="124" width="10" height="1" fill="#E0E0E0" rx="0.5" />
          </g>

          <!-- Top right document -->
          <g transform="rotate(12 320 110)">
            <rect x="310" y="100" width="20" height="26" fill="white" stroke="#E0E0E0" stroke-width="1" rx="2" />
            <rect x="312" y="104" width="16" height="2" fill="#E0E0E0" rx="1" />
            <rect x="312" y="108" width="12" height="1" fill="#E0E0E0" rx="0.5" />
            <rect x="312" y="111" width="14" height="1" fill="#E0E0E0" rx="0.5" />
            <rect x="312" y="114" width="10" height="1" fill="#E0E0E0" rx="0.5" />
          </g>

          <!-- Left document -->
          <g transform="rotate(-8 60 200)">
            <rect x="50" y="190" width="20" height="26" fill="white" stroke="#E0E0E0" stroke-width="1" rx="2" />
            <rect x="52" y="194" width="16" height="2" fill="#E0E0E0" rx="1" />
            <rect x="52" y="198" width="12" height="1" fill="#E0E0E0" rx="0.5" />
            <rect x="52" y="201" width="14" height="1" fill="#E0E0E0" rx="0.5" />
          </g>

          <!-- Right document -->
          <g transform="rotate(10 340 190)">
            <rect x="330" y="180" width="20" height="26" fill="white" stroke="#E0E0E0" stroke-width="1" rx="2" />
            <rect x="332" y="184" width="16" height="2" fill="#E0E0E0" rx="1" />
            <rect x="332" y="188" width="12" height="1" fill="#E0E0E0" rx="0.5" />
            <rect x="332" y="191" width="14" height="1" fill="#E0E0E0" rx="0.5" />
          </g>

          <!-- Bottom left document -->
          <g transform="rotate(-20 100 270)">
            <rect x="90" y="260" width="20" height="26" fill="white" stroke="#E0E0E0" stroke-width="1" rx="2" />
            <rect x="92" y="264" width="16" height="2" fill="#E0E0E0" rx="1" />
            <rect x="92" y="268" width="12" height="1" fill="#E0E0E0" rx="0.5" />
          </g>

          <!-- Bottom right document -->
          <g transform="rotate(18 300 280)">
            <rect x="290" y="270" width="20" height="26" fill="white" stroke="#E0E0E0" stroke-width="1" rx="2" />
            <rect x="292" y="274" width="16" height="2" fill="#E0E0E0" rx="1" />
            <rect x="292" y="278" width="12" height="1" fill="#E0E0E0" rx="0.5" />
          </g>

          <!-- Background circles for depth -->
          <circle cx="200" cy="200" r="120" fill="#E8F4FD" opacity="0.3" />
          <circle cx="200" cy="200" r="80" fill="#E8F4FD" opacity="0.2" />
        </svg>
      </div>

      <div class="empty-state-content">
        <h1 class="empty-state-title">Start Building Your Space</h1>
        <p class="empty-state-description">
          You currently have no spaces. Begin by creating your first space and start managing your work efficiently. Get
          started now and bring your ideas to life!
        </p>
        <button class="create-space-btn" type="button">
          Create Space
        </button>
      </div>
    </div>
  </div>
</div>