{{-- Subscription Lock Screen Component --}}
<div style="background-color: #f8f9fa; min-height: 100vh;">
    {{-- Navigation Tabs --}}
    <div class="p-4">
        <div class="d-flex" style="width: fit-content;">
            <button id="usersTab" class="tab-btn active" onclick="switchTab('users')" 
                    style="background-color: white; border: 1px solid #e5e7eb; border-radius: 8px 0 0 8px; padding: 12px 24px; font-size: 14px; font-weight: 500; color: #374151; outline: none; cursor: pointer;">
                Users
            </button>
            <button id="rolesTab" class="tab-btn" onclick="switchTab('roles')" 
                    style="background-color: #f9fafb; border: 1px solid #e5e7eb; border-left: none; border-radius: 0 8px 8px 0; padding: 12px 24px; font-size: 14px; font-weight: 500; color: #9ca3af; outline: none; cursor: pointer;">
                Roles
            </button>
        </div>
    </div>

    {{-- Main Content Area with Lock Screen --}}
    <div class="d-flex align-items-center justify-content-center" style="height: 60vh;">
        <div class="text-center">
            {{-- Lock Icon --}}
            <div class="mb-4 d-flex justify-content-center">
                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="10" rx="2" ry="2"/>
                    <circle cx="12" cy="16" r="1"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
            </div>

            {{-- Lock Message --}}
            <p style="color: #9ca3af; font-size: 16px; margin: 0; max-width: 400px;">
                Please do subscription to get access for this feature
            </p>
        </div>
    </div>
</div>

<script>
function switchTab(tab) {
    const usersTab = document.getElementById('usersTab');
    const rolesTab = document.getElementById('rolesTab');
    
    if (tab === 'users') {
        // Active Users tab
        usersTab.style.backgroundColor = 'white';
        usersTab.style.color = '#374151';
        usersTab.classList.add('active');
        
        // Inactive Roles tab
        rolesTab.style.backgroundColor = '#f9fafb';
        rolesTab.style.color = '#9ca3af';
        rolesTab.classList.remove('active');
    } else {
        // Active Roles tab
        rolesTab.style.backgroundColor = 'white';
        rolesTab.style.color = '#374151';
        rolesTab.classList.add('active');
        
        // Inactive Users tab
        usersTab.style.backgroundColor = '#f9fafb';
        usersTab.style.color = '#9ca3af';
        usersTab.classList.remove('active');
    }
}
</script>
