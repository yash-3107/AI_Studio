<div class="manage-users-container">
  <div class="header-section">
    <div class="header-icon">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <circle cx="8.5" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" />
        <path d="M20 8V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M23 11H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </div>
    <h1 class="header-title">Manage Users</h1>
  </div>

  <div class="tabs-section">
    <div class="tabs-container">
      <button class="tab-button" data-tab="users">
        Users
      </button>
      <button class="tab-button active" data-tab="roles">
        Roles
      </button>
    </div>
  </div>

  <div class="manage-users-content-section">
    <div class="subscription-lock">
      <div class="lock-icon">
        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="3" y="11" width="18" height="10" rx="2" ry="2" stroke="currentColor" stroke-width="2" />
          <circle cx="12" cy="16" r="1" fill="currentColor" />
          <path
            d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>

      <div class="lock-content">
        <p class="lock-message">
          Please do subscription to get access for this feature
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