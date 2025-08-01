{{-- All Spaces Page --}}
<div class="bg-light min-vh-100 position-relative">
    {{-- Page Title --}}
    <div class="position-absolute top-0 start-0 p-4">
        <h1 class="fs-4 fw-semibold text-dark mb-0">All Spaces</h1>
    </div>

    {{-- Main Content --}}
    <div class="d-flex align-items-center justify-content-center min-vh-100 px-4">
        <div class="d-flex align-items-center gap-5">
            {{-- Illustration --}}
            <div class="flex-shrink-0">
                <img src="https://vanij.adya.ai/assets/file-manager-Ciw0F9pP.webp" style="height:400px; width:400px;" alt="">
            </div>

            {{-- Text Content --}}
            <div style="max-width: 500px;">
                <h2 class="fs-1 fw-semibold text-dark mb-3">Start Building Your Space</h2>
                <p class="text-muted fs-6 lh-base mb-4">
                    You currently have no spaces. Begin by creating your first space and start managing your work
                    efficiently. Get started now and bring your ideas to life!
                </p>
                <button class="btn px-4 py-2 fw-medium"
                    style="background-color: #b3d9ff; color: #212529; border-radius: 8px;" onclick="openModal()">Create
                    Space</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Overlay --}}
<div class="modal" id="modalOverlay" tabindex="-1" style="display: none;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            {{-- Modal Header --}}
            <div class="modal-header border-bottom">
                <h5 class="modal-title fw-semibold">Create new space</h5>
                <button type="button" class="btn-close" onclick="closeModal()"></button>
            </div>

            {{-- Progress Steps --}}
            <div class="d-flex align-items-center p-4 gap-3">
                <div class="d-flex align-items-center gap-2">
                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-semibold"
                        style="width: 32px; height: 32px; font-size: 0.875rem;">01</div>
                    <span class="fw-medium">File Basics</span>
                </div>
                <div class="flex-grow-1 bg-primary" style="height: 2px;"></div>
                <div class="d-flex align-items-center gap-2">
                    <div class="rounded-circle bg-light border d-flex align-items-center justify-content-center fw-semibold text-muted"
                        style="width: 32px; height: 32px; font-size: 0.875rem;">02</div>
                    <span class="fw-medium text-muted">File Permissions</span>
                </div>
            </div>

            {{-- Modal Body --}}
            <div class="modal-body">
                <div class="mb-4">
                    <label class="form-label fw-semibold">Space Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter your Space Name">
                    <div class="text-end text-muted small mt-1">0/ 50</div>
                    <div class="text-danger small mt-2 d-flex align-items-center gap-1">
                        <span>⚠</span> Folder name must not be blank.
                    </div>
                </div>

                <div>
                    <label class="form-label fw-semibold">Choose Icon</label>
                    <div class="bg-light p-4 rounded">
                        <div class="row g-3">
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">📁</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">💻</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">▶️</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">🖨️</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">✏️</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">☁️</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">⚙️</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">🔧</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">🛡️</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">🎯</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">💾</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">📊</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">💡</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">📄</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">🌐</div>
                            </div>
                            <div class="col-2">
                                <div class="text-center p-2 rounded" style="cursor: pointer;">🧩</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Footer --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" onclick="closeModal()">Cancel</button>
                <button type="button" class="btn" style="background-color: #e5e7eb; color: #9ca3af;"
                    disabled>Next</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('modalOverlay').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('modalOverlay').style.display = 'none';
    }
</script>