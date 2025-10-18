@extends('layout.main')

@section('content')
@section('title', 'Form Page')

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
        max-width: 900px;
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

    .formbox-group {
        margin-bottom: 20px;
        animation: fadeIn 0.4s ease-out backwards;
    }

    .formbox-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .formbox-label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
        font-size: 0.95em;
        transition: color 0.3s ease;
    }

    .formbox-input,
    .formbox-select,
    .formbox-textarea {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
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
        transform: translateY(-1px);
    }

    .formbox-input:hover,
    .formbox-select:hover,
    .formbox-textarea:hover {
        border-color: #b3b3b3;
    }

    .formbox-icon {
        position: relative;
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

    .formbox-counter {
        text-align: right;
        font-size: 0.85em;
        color: #999;
        margin-top: 5px;
    }

    .formbox-textarea {
        resize: vertical;
        min-height: 100px;
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
    }
</style>

<div class="formbox-container">
    <h1 class="formbox-title">📋 Ro'yxatdan O'tish Formasi</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<div class="formbox-success">✅ Ma\'lumotlar muvaffaqiyatli yuborildi!</div>';

        foreach ($_POST as $key => $value) {
            if (!empty($value)) {
                echo "<p><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</p>";
            }
        }
    }
    ?>

    <form method="POST" action="" id="mainForm">
        <?php
        $fields = [
            ['name' => 'ism', 'label' => 'Ism', 'type' => 'text', 'placeholder' => 'Ismingizni kiriting', 'icon' => '👤'],
            ['name' => 'familiya', 'label' => 'Familiya', 'type' => 'text', 'placeholder' => 'Familiyangizni kiriting', 'icon' => '👤'],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'placeholder' => 'example@email.com', 'icon' => '📧'],
            ['name' => 'telefon', 'label' => 'Telefon', 'type' => 'tel', 'placeholder' => '+998 90 123 45 67', 'icon' => '📱'],
            ['name' => 'tugilgan_sana', 'label' => 'Tug\'ilgan sana', 'type' => 'date', 'placeholder' => '', 'icon' => '📅'],
            ['name' => 'jinsi', 'label' => 'Jinsi', 'type' => 'select', 'options' => ['Erkak', 'Ayol'], 'icon' => '👥'],
            ['name' => 'shahar', 'label' => 'Shahar', 'type' => 'select', 'options' => ['Toshkent', 'Samarqand', 'Buxoro', 'Xiva'], 'icon' => '🏙️'],
            ['name' => 'kasb', 'label' => 'Kasb', 'type' => 'text', 'placeholder' => 'Kasbingizni kiriting', 'icon' => '💼'],
            ['name' => 'tajriba', 'label' => 'Ish tajribasi (yil)', 'type' => 'number', 'placeholder' => '0', 'icon' => '⏱️'],
            ['name' => 'izoh', 'label' => 'Qo\'shimcha ma\'lumot', 'type' => 'textarea', 'placeholder' => 'O\'zingiz haqingizda qisqacha...', 'icon' => '💬'],
        ];

        $half = ceil(count($fields) / 2);
        echo '<div class="formbox-row"><div>';
        for ($i = 0; $i < count($fields); $i++) {
            $field = $fields[$i];
            if ($i == $half) echo '</div><div>';

            echo '<div class="formbox-group">';
            echo '<label class="formbox-label">' . $field['icon'] . ' ' . $field['label'] . '</label>';

            if ($field['type'] === 'select') {
                echo '<select name="' . $field['name'] . '" class="formbox-select" required>';
                echo '<option value="">Tanlang...</option>';
                foreach ($field['options'] as $option) {
                    echo '<option value="' . $option . '">' . $option . '</option>';
                }
                echo '</select>';
            } elseif ($field['type'] === 'textarea') {
                echo '<textarea name="' . $field['name'] . '" class="formbox-textarea" id="textarea-' . $field['name'] . '" maxlength="500"></textarea>';
                echo '<div class="formbox-counter" id="counter-' . $field['name'] . '">0 / 500</div>';
            } else {
                echo '<input type="' . $field['type'] . '" name="' . $field['name'] . '" class="formbox-input" placeholder="' . $field['placeholder'] . '" required>';
            }

            echo '</div>';
        }
        echo '</div></div>';
        ?>

        <button type="submit" class="formbox-btn">📤 Ma'lumotlarni Yuborish</button>
    </form>
</div>

<script>
    const textarea = document.getElementById('textarea-izoh');
    const counter = document.getElementById('counter-izoh');
    if (textarea) {
        textarea.addEventListener('input', function() {
            const count = this.value.length;
            counter.textContent = count + ' / 500';
            counter.style.color = count > 450 ? '#f44336' : count > 400 ? '#ff9800' : '#999';
        });
    }

    document.getElementById('mainForm').addEventListener('submit', function() {
        const btn = this.querySelector('button');
        btn.textContent = '⏳ Yuborilmoqda...';
        btn.style.background = '#27ae60';
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
</script>
@endsection
