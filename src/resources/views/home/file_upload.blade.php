@extends('layout.main')
@section('content')
@section('title', 'File Upload')

<style>
    .upload-wrapper {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        background: #f0f2f5;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-top: 80px;
    }

    .upload-container {
        background: white;
        border-radius: 20px;
        padding: 40px;
        max-width: 800px;
        width: 100%;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    .upload-title {
        font-size: 32px;
        margin-bottom: 30px;
        color: #1a202c;
        font-weight: 600;
    }

    .upload-drop-zone {
        border: 3px dashed #cbd5e0;
        border-radius: 12px;
        padding: 60px 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #f7fafc;
        margin-bottom: 20px;
    }

    .upload-drop-zone:hover {
        border-color: #667eea;
        background: #edf2f7;
    }

    .upload-drop-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 20px;
        background: #cbd5e0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        color: #718096;
    }

    .upload-drop-text {
        font-size: 18px;
        color: #4a5568;
        margin-bottom: 10px;
    }

    .upload-drop-limit {
        font-size: 14px;
        color: #a0aec0;
    }

    .upload-file-input {
        display: none;
    }

    .upload-file-list {
        margin-top: 20px;
        min-height: 50px;
    }

    .upload-file-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        margin-bottom: 15px;
        background: white;
    }

    .upload-file-info {
        display: flex;
        align-items: center;
        gap: 15px;
        flex: 1;
    }

    .upload-file-icon {
        width: 50px;
        height: 50px;
        background: #bee3f8;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .upload-file-name {
        font-size: 16px;
        font-weight: 600;
        color: #1a202c;
        word-break: break-all;
    }

    .upload-action-btn {
        width: 40px;
        height: 40px;
        border: 2px solid #e2e8f0;
        border-radius: 50%;
        background: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .upload-action-btn:hover {
        border-color: #fc8181;
        color: #fc8181;
    }

    .upload-submit-section {
        margin-top: 30px;
        text-align: center;
        padding: 20px;
        border-top: 2px solid #e2e8f0;
    }

    .upload-submit-btn {
        background: #667eea;
        color: white;
        border: none;
        padding: 12px 40px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .upload-submit-btn:hover {
        background: #5568d3;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    }

    .upload-submit-btn:disabled {
        background: #cbd5e0;
        cursor: not-allowed;
        transform: none;
    }

    .upload-no-files {
        text-align: center;
        padding: 40px;
        color: #a0aec0;
        font-size: 16px;
    }

    .upload-error-alert {
        background: #fed7d7;
        border: 2px solid #fc8181;
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 20px;
        color: #c53030;
    }

    .upload-success-alert {
        background: #c6f6d5;
        border: 2px solid #48bb78;
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 20px;
        color: #22543d;
    }
</style>

<div class="upload-wrapper">
    <div class="upload-container">
        <h1 class="upload-title">Upload Files</h1>
        
        @if ($errors->any())
            <div class="upload-error-alert">
                <strong>⚠️ Xatolik:</strong>
                <ul style="margin: 10px 0 0 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="upload-success-alert">
                <strong>✓ {{ session('success') }}</strong>
            </div>
        @endif
        @if (session('error'))
            <div class="upload-error-alert">
                <strong>✓ {{ session('error') }}</strong>
            </div>
        @endif

        <form id="uploadForm" action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="upload-drop-zone" onclick="document.getElementById('uploadFileInput').click();">
                <div class="upload-drop-icon">
                    <span>📄</span>
                </div>
                <div class="upload-drop-text">Click to choose DOC/DOCX files</div>
                <div class="upload-drop-limit">Only .doc and .docx files | Max 10 MB</div>
            </div>

            <input type="file" id="uploadFileInput" name="file" class="upload-file-input" accept=".doc,.docx">

            <div class="upload-file-list" id="uploadFileList">
                <div class="upload-no-files">Hali fayl yuklanmagan</div>
            </div>

            <div class="upload-submit-section">
                <button type="submit" class="upload-submit-btn" id="uploadSubmitBtn" disabled>
                    Upload Files
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const uploadFileInput = document.getElementById('uploadFileInput');
    const uploadFileList = document.getElementById('uploadFileList');
    const uploadSubmitBtn = document.getElementById('uploadSubmitBtn');

    let uploadFiles = [];

    uploadFileInput.addEventListener('change', (e) => {
        uploadFiles = [];
        Array.from(e.target.files).forEach(file => {
            const ext = file.name.split('.').pop().toLowerCase();
            if ((ext === 'doc' || ext === 'docx') && file.size <= 10 * 1024 * 1024) {
                uploadFiles.push(file);
            } else if (ext !== 'doc' && ext !== 'docx') {
                alert(`${file.name} - faqat DOC/DOCX fayllar ruxsat etilgan!`);
            } else {
                alert(`${file.name} - maksimal hajm 10 MB!`);
            }
        });
        renderFiles();
    });

    function renderFiles() {
        if (uploadFiles.length === 0) {
            uploadFileList.innerHTML = '<div class="upload-no-files">Hali fayl yuklanmagan</div>';
            uploadSubmitBtn.disabled = true;
            return;
        }

        uploadSubmitBtn.disabled = false;
        uploadFileList.innerHTML = uploadFiles.map((file, index) => `
            <div class="upload-file-item">
                <div class="upload-file-info">
                    <div class="upload-file-icon">📄</div>
                    <div class="upload-file-name">${file.name}</div>
                </div>
                <button type="button" class="upload-action-btn" onclick="removeFile(${index})">🗑️</button>
            </div>
        `).join('');
    }

    function removeFile(index) {
        uploadFiles.splice(index, 1);
        const dt = new DataTransfer();
        uploadFiles.forEach(file => dt.items.add(file));
        uploadFileInput.files = dt.files;
        renderFiles();
    }

    document.getElementById('uploadForm').addEventListener('submit', () => {
        uploadSubmitBtn.disabled = true;
        uploadSubmitBtn.textContent = 'Yuklanmoqda...';
    });
</script>

@endsection