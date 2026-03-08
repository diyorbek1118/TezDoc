<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fayl yuklash va konvertatsiya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>DOCX dan HTML ga konvertatsiya</h1>

        {{-- ✅ Xatoliklar --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- ✅ Muvaffaqiyatli xabar --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- ✅ 1️⃣ Fayl yuklash formasi --}}
        <div class="card mb-4">
            <div class="card-body">
                <h3>1. Faylni yuklang</h3>
                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">DOCX fayl tanlang:</label>
                        <input type="file" name="file" id="file" class="form-control" accept=".docx" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Yuklash</button>
                </form>
            </div>
        </div>

        {{-- ✅ 2️⃣ Konvertatsiya qilish tugmasi (faqat fayl yuklangandan keyin) --}}
        @if(session('uploaded_filename'))
            <div class="card mb-4">
                <div class="card-body">
                    <h3>2. HTML ga konvertatsiya qilish</h3>
                    <p>Yuklangan fayl: <strong>{{ session('uploaded_filename') }}</strong></p>
                    <form action="{{ route('file.convert') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">HTML ga aylantirish</button>
                    </form>
                </div>
            </div>
        @endif

        {{-- ✅ 3️⃣ Konvertatsiya natijasi --}}
        @if(session('convertedUrl'))
            <div class="card">
                <div class="card-body">
                    <h3>3. Konvertatsiya natijasi</h3>
                    
                    <a href="{{ session('convertedUrl') }}" target="_blank" class="btn btn-primary mb-3">
                        📄 HTML faylni yangi oynada ochish
                    </a>

                    {{-- To'g'ridan-to'g'ri sahifada ko'rsatish --}}
                    @if(session('htmlContent'))
                        <h4 class="mt-4">HTML ko'rinishi:</h4>
                        <div class="border p-3 mt-3" style="max-height: 600px; overflow-y: auto;">
                            {!! session('htmlContent') !!}
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>