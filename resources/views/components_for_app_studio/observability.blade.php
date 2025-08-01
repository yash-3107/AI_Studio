<div class="observability-container" id="keys-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <span class="breadcrumb-icon">📊</span>
            <span>Observability</span>
            <span class="breadcrumb-separator">/</span>
            <span id="breadcrumb-current">Keys Credentials</span>
        </div>

        <!-- Page Tabs -->
        <div class="page-tabs">
            <button class="page-tab" data-page="apps">Applications</button>
            <button class="page-tab active" data-page="keys">Keys & credentials</button>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid-4">
            <!-- Total Vanij Keys -->
            <div class="obs-stat-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Total Vanij Keys
                        <span class="info-icon" title="Total number of Vanij API keys">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-key"></span>
                </div>
                <div class="obs-stat-value">0</div>
            </div>

            <!-- Total Own Keys -->
            <div class="obs-stat-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Total Own Keys
                        <span class="info-icon" title="Total number of your own API keys">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-link"></span>
                </div>
                <div class="obs-stat-value">0</div>
            </div>

            <!-- Total Amount Utilized -->
            <div class="obs-stat-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Total Amount Utilized
                        <span class="info-icon" title="Total cost of API usage">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-dollar"></span>
                </div>
                <div class="obs-stat-value currency">$ 0.000000</div>
            </div>

            <!-- Total Paid Api Calls -->
            <div class="obs-stat-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Total Paid Api Calls
                        <span class="info-icon" title="Total number of paid API calls">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-api"></span>
                </div>
                <div class="obs-stat-value">0</div>
            </div>
        </div>

        <!-- Usage Report Section -->
        <div class="usage-report-section">
            <h2 class="usage-report-title">Keys & Credentials Usage Report</h2>
            
            <div class="usage-controls">
                <div class="usage-tabs">
                    <button class="usage-tab active">Root & Users</button>
                    <button class="usage-tab">Company Summary</button>
                </div>
                
                <div class="usage-right-controls">
                    <div class="keys-dropdown">
                        Vanij Keys
                    </div>
                    
                    <div class="search-container-obs">
                        <span class="search-icon-obs">🔍</span>
                        <input type="text" class="search-input-obs" placeholder="Search ...">
                    </div>
                </div>
            </div>
            
            <div class="usage-content-area">
                <div class="no-data-message">No root & users have been found</div>
            </div>
        </div>
    </div>

    <!-- Applications Usage Page -->
    <div class="observability-container hidden" id="apps-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <span class="breadcrumb-icon">📊</span>
            <span>Observability</span>
            <span class="breadcrumb-separator">/</span>
            <span id="breadcrumb-current-apps">Applications Usage</span>
        </div>

        <!-- Page Tabs -->
        <div class="page-tabs">
            <button class="page-tab active" data-page="apps">Applications</button>
            <button class="page-tab" data-page="keys">Keys & credentials</button>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid-5">
            <!-- Total Apps -->
            <div class="obs-stat-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Total Apps
                        <span class="info-icon" title="Total number of applications">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-grid-apps"></span>
                </div>
                <div class="obs-stat-value">0</div>
            </div>

            <!-- Deployment-Ready Apps -->
            <div class="obs-stat-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Deployment-Ready Apps
                        <span class="info-icon" title="Apps ready for deployment">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-deploy"></span>
                </div>
                <div class="obs-stat-value">0</div>
            </div>

            <!-- Total Deployed Apps -->
            <div class="obs-stat-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Total Deployed Apps
                        <span class="info-icon" title="Currently deployed applications">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-rocket-apps"></span>
                </div>
                <div class="obs-stat-value">0</div>
            </div>

            <!-- Total Published Apps -->
            <div class="obs-stat-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Total Published Apps
                        <span class="info-icon" title="Published applications">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-publish"></span>
                </div>
                <div class="obs-stat-value">0</div>
            </div>

            <!-- Total Cost Utilized -->
            <div class="obs-stat-card cost-card">
                <div class="obs-stat-header">
                    <div class="obs-stat-title">
                        Total Cost Utilized
                        <span class="info-icon" title="Total cost for applications">ⓘ</span>
                    </div>
                    <span class="obs-stat-icon icon-dollar"></span>
                </div>
                <div class="obs-stat-value currency">$ 0.00</div>
            </div>
        </div>

        <!-- Usage Report Section -->
        <div class="usage-report-section">
            <h2 class="usage-report-title">Applications Usage Report</h2>
            
            <div class="usage-controls">
                <div class="search-container-obs" style="margin-left: 0;">
                    <span class="search-icon-obs">🔍</span>
                    <input type="text" class="search-input-obs" placeholder="Search ...">
                </div>
            </div>
            
            <div class="usage-content-area">
                <div class="no-data-message">No Applications usage have been found</div>
            </div>
        </div>
    </div>
<script>
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("page-tab")) {
                const tabs = document.querySelectorAll(".page-tab");
                const pages = {
                    keys: document.getElementById("keys-page"),
                    apps: document.getElementById("apps-page")
                };

                tabs.forEach(t => t.classList.remove("active"));
                e.target.classList.add("active");

                Object.values(pages).forEach(p => p.classList.add("hidden"));
                const selected = e.target.dataset.page;
                pages[selected].classList.remove("hidden");
            }
        });

    </script>

