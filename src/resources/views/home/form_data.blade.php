@extends('layout.main')

@section('content')
@section('title', 'Ariza Formasi')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f5f7fa;
        min-height: 100vh;
        padding: 40px 20px;
    }

    .formbox-container {
        background: white;
        border-radius: 12px;
        padding: 50px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        max-width: 1200px;
        width: 100%;
        margin: 6rem auto;
        animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .formbox-title {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 40px;
        font-size: 2em;
        font-weight: 600;
    }

    .form-section {
        margin-bottom: 35px;
        padding: 25px;
        background: #f8f9fa;
        border-radius: 10px;
        border-left: 4px solid #3498db;
    }

    .section-title {
        color: #2c3e50;
        font-size: 1.3em;
        font-weight: 600;
        margin-bottom: 20px;
        text-transform: capitalize;
    }

    .formbox-group {
        margin-bottom: 20px;
    }

    .formbox-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .formbox-label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
        font-size: 0.95em;
        text-transform: capitalize;
    }

    .formbox-input,
    .formbox-select,
    .formbox-textarea {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 1em;
        transition: all 0.3s ease;
        background: white;
    }

    .formbox-input:focus,
    .formbox-select:focus,
    .formbox-textarea:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    }

    .formbox-input:hover,
    .formbox-select:hover,
    .formbox-textarea:hover {
        border-color: #b3b3b3;
    }

    .formbox-textarea {
        resize: vertical;
        min-height: 100px;
    }

    .formbox-btn {
        width: 100%;
        padding: 15px;
        background: #3498db;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1.05em;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 20px;
        box-shadow: 0 2px 8px rgba(52, 152, 219, 0.3);
    }

    .formbox-btn:hover {
        background: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(52, 152, 219, 0.4);
    }

    .formbox-btn:disabled {
        background: #95a5a6;
        cursor: not-allowed;
        transform: none;
    }

    .formbox-success {
        background: #27ae60;
        color: white;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 25px;
        text-align: center;
        animation: slideDown 0.5s ease-out;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .field-icon {
        margin-right: 5px;
    }

    @media (max-width: 768px) {
        .formbox-container {
            padding: 30px 20px;
        }
        .formbox-title {
            font-size: 1.5em;
        }
        .formbox-row {
            grid-template-columns: 1fr;
        }
        .form-section {
            padding: 15px;
        }
    }
</style>

<div class="formbox-container">
    <h1 class="formbox-title">📋 Shartnoma Formasi</h1>

    @if(session('success'))
        <div class="formbox-success">✅ {{ session('success') }}</div>
    @endif
    <form method="POST" action="{{  route('doc.data') }}" id="mainForm">
        @csrf

        <input type="hidden" name="document_id" value="{{ $document_id ?? '' }}">
        @php
            function renderFields($fields, $parentKey = '') {
                foreach ($fields as $key => $value) {
                    $fieldName = $parentKey ? "{$parentKey}[{$key}]" : $key;
                    $fieldId = $parentKey ? "{$parentKey}_{$key}" : $key;
                    $label = ucfirst(str_replace('_', ' ', $key));
                    
                    if (is_array($value)) {
                        echo '<div class="form-section">';
                        echo '<h3 class="section-title">' . $label . '</h3>';
                        echo '<div class="formbox-row">';
                        
                        renderFields($value, $fieldName);
                        
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<div class="formbox-group">';
                        echo '<label class="formbox-label" for="' . $fieldId . '">';
                        echo '<span class="field-icon">📝</span> ' . $label;
                        echo '</label>';
                        
                        if (str_contains($key, 'sana') && !str_contains($key, 'kun') && !str_contains($key, 'oy') && !str_contains($key, 'yil')) {
                            echo '<input type="date" name="' . $fieldName . '" id="' . $fieldId . '" class="formbox-input">';
                        } elseif (str_contains($key, 'email')) {
                            echo '<input type="email" name="' . $fieldName . '" id="' . $fieldId . '" class="formbox-input" placeholder="' . htmlspecialchars($value) . '">';
                        } elseif (str_contains($key, 'telefon') || str_contains($key, 'phone')) {
                            echo '<input type="tel" name="' . $fieldName . '" id="' . $fieldId . '" class="formbox-input" placeholder="' . htmlspecialchars($value) . '">';
                        } elseif (str_contains($key, 'manzil') || str_contains($key, 'qoshimcha_shartlar')) {
                            echo '<textarea name="' . $fieldName . '" id="' . $fieldId . '" class="formbox-textarea" placeholder="' . htmlspecialchars($value) . '"></textarea>';
                        } else {
                            echo '<input type="text" name="' . $fieldName . '" id="' . $fieldId . '" class="formbox-input" placeholder="' . htmlspecialchars($value) . '">';
                        }
                        
                        echo '</div>';
                    }
                }
            }
        @endphp

        @php
            if (isset($fields) && is_array($fields)) {
                renderFields($fields);
            }
        @endphp

        <button type="submit" class="formbox-btn" id="submitBtn">
            📤 Ma'lumotlarni Yuborish
        </button>
    </form>
</div>

<script>
    document.getElementById('mainForm').addEventListener('submit', function(e) {
        const btn = document.getElementById('submitBtn');
        btn.textContent = '⏳ Yuborilmoqda...';
        btn.disabled = true;
        btn.style.background = '#95a5a6';
    });

    const inputs = document.querySelectorAll('.formbox-input, .formbox-select, .formbox-textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            const label = this.closest('.formbox-group').querySelector('.formbox-label');
            if (label) label.style.color = '#3498db';
        });
        
        input.addEventListener('blur', function() {
            const label = this.closest('.formbox-group').querySelector('.formbox-label');
            if (label) label.style.color = '#333';
        });
    });

    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    phoneInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('998')) {
                value = '+998 ' + value.substring(3, 5) + ' ' + value.substring(5, 8) + '-' + value.substring(8, 10) + '-' + value.substring(10, 12);
            }
            e.target.value = value;
        });
    });
</script>
@endsection