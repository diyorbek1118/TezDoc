<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamonaviy Forma</title>
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

        .container {
            background: white;
            border-radius: 12px;
            padding: 50px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
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

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
            font-size: 2em;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
            animation: fadeIn 0.4s ease-out backwards;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group:nth-child(1) { animation-delay: 0.05s; }
        .form-group:nth-child(2) { animation-delay: 0.1s; }
        .form-group:nth-child(3) { animation-delay: 0.15s; }
        .form-group:nth-child(4) { animation-delay: 0.2s; }
        .form-group:nth-child(5) { animation-delay: 0.25s; }
        .form-group:nth-child(6) { animation-delay: 0.3s; }
        .form-group:nth-child(7) { animation-delay: 0.35s; }
        .form-group:nth-child(8) { animation-delay: 0.4s; }
        .form-group:nth-child(9) { animation-delay: 0.45s; }
        .form-group:nth-child(10) { animation-delay: 0.5s; }

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

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 0.95em;
            transition: color 0.3s ease;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1em;
            transition: all 0.3s ease;
            background: white;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
            transform: translateY(-1px);
        }

        input:hover, select:hover, textarea:hover {
            border-color: #b3b3b3;
        }

        .input-icon {
            position: relative;
        }

        .input-icon::before {
            content: '✓';
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #4caf50;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .input-icon input:valid::after {
            opacity: 1;
        }

        button {
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

        button:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.4);
        }#

        button:active {
            transform: translateY(-1px);
        }

        .success-message {
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

        .char-counter {
            text-align: right;
            font-size: 0.85em;
            color: #999;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 1.5em;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Ro'yxatdan O'tish Formasi</h1>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<div class="success-message">✅ Ma\'lumotlar muvaffaqiyatli yuborildi!</div>';
            
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
                ['name' => 'shahar', 'label' => 'Shahar', 'type' => 'select', 'options' => ['Toshkent', 'Samarqand', 'Buxoro', 'Xiva', 'Farg\'ona', 'Andijon', 'Namangan', 'Qo\'qon'], 'icon' => '🏙️'],
                ['name' => 'kasb', 'label' => 'Kasb', 'type' => 'text', 'placeholder' => 'Kasbingizni kiriting', 'icon' => '💼'],
                 ['name' => 'telefon', 'label' => 'Telefon', 'type' => 'tel', 'placeholder' => '+998 90 123 45 67', 'icon' => '📱'],
                ['name' => 'tugilgan_sana', 'label' => 'Tug\'ilgan sana', 'type' => 'date', 'placeholder' => '', 'icon' => '📅'],
                ['name' => 'jinsi', 'label' => 'Jinsi', 'type' => 'select', 'options' => ['Erkak', 'Ayol'], 'icon' => '👥'],
                ['name' => 'shahar', 'label' => 'Shahar', 'type' => 'select', 'options' => ['Toshkent', 'Samarqand', 'Buxoro', 'Xiva', 'Farg\'ona', 'Andijon', 'Namangan', 'Qo\'qon'], 'icon' => '🏙️'],
                ['name' => 'kasb', 'label' => 'Kasb', 'type' => 'text', 'placeholder' => 'Kasbingizni kiriting', 'icon' => '💼'],
                ['name' => 'tajriba', 'label' => 'Ish tajribasi (yil)', 'type' => 'number', 'placeholder' => '0', 'icon' => '⏱️'],
                ['name' => 'til', 'label' => 'Tillar', 'type' => 'select', 'options' => ['O\'zbek', 'Rus', 'Ingliz', 'Bir nechta til'], 'icon' => '🌐'],
                ['name' => 'manzil', 'label' => 'Manzil', 'type' => 'text', 'placeholder' => 'To\'liq manzilingiz', 'icon' => '📍'],
                ['name' => 'izoh', 'label' => 'Qo\'shimcha ma\'lumot', 'type' => 'textarea', 'placeholder' => 'O\'zingiz haqingizda qisqacha ma\'lumot...', 'icon' => '💬'],
                ['name' => 'til', 'label' => 'Tillar', 'type' => 'select', 'options' => ['O\'zbek', 'Rus', 'Ingliz', 'Bir nechta til'], 'icon' => '🌐'],
                ['name' => 'manzil', 'label' => 'Manzil', 'type' => 'text', 'placeholder' => 'To\'liq manzilingiz', 'icon' => '📍'],
                ['name' => 'izoh', 'label' => 'Qo\'shimcha ma\'lumot', 'type' => 'textarea', 'placeholder' => 'O\'zingiz haqingizda qisqacha ma\'lumot...', 'icon' => '💬']
                
            ];

            // Inputlarni 2 ustunli grid ga joylashtirish
            $half = ceil(count($fields) / 2);
            echo '<div class="form-row">';
            echo '<div>';
            
            for ($i = 0; $i < count($fields); $i++) {
                $field = $fields[$i];
                
                // Har ikki ustun uchun yangi row
                if ($i == $half) {
                    echo '</div><div>';
                }
                
                // Textarea uchun to'liq kenglik
                if ($field['type'] === 'textarea' && $i >= $half - 1) {
                    echo '</div></div>';
                    echo '<div class="form-group" style="grid-column: 1 / -1;">';
                } else {
                    echo '<div class="form-group">';
                }
                
                echo '<label>' . $field['icon'] . ' ' . $field['label'] . '</label>';
                
                if ($field['type'] === 'select') {
                    echo '<select name="' . $field['name'] . '" required>';
                    echo '<option value="">Tanlang...</option>';
                    foreach ($field['options'] as $option) {
                        echo '<option value="' . $option . '">' . $option . '</option>';
                    }
                    echo '</select>';
                } elseif ($field['type'] === 'textarea') {
                    echo '<textarea name="' . $field['name'] . '" placeholder="' . $field['placeholder'] . '" id="textarea-' . $field['name'] . '" maxlength="500"></textarea>';
                    echo '<div class="char-counter" id="counter-' . $field['name'] . '">0 / 500</div>';
                } else {
                    echo '<div class="input-icon">';
                    echo '<input type="' . $field['type'] . '" name="' . $field['name'] . '" placeholder="' . $field['placeholder'] . '" required>';
                    echo '</div>';
                }
                
                echo '</div>';
                
                // Textarea dan keyin row yopish
                if ($field['type'] === 'textarea' && $i < count($fields) - 1) {
                    echo '<div class="form-row"><div>';
                }
            }
            
            echo '</div></div>';
            ?>

            <button type="submit">📤 Ma'lumotlarni Yuborish</button>
        </form>
    </div>

    <script>
        // Textarea uchun belgilar sonini hisoblash
        const textarea = document.getElementById('textarea-izoh');
        const counter = document.getElementById('counter-izoh');
        
        if (textarea) {
            textarea.addEventListener('input', function() {
                const count = this.value.length;
                counter.textContent = count + ' / 500';
                
                if (count > 450) {
                    counter.style.color = '#f44336';
                } else if (count > 400) {
                    counter.style.color = '#ff9800';
                } else {
                    counter.style.color = '#999';
                }
            });
        }

        // Forma yuborilganda animatsiya
        document.getElementById('mainForm').addEventListener('submit', function(e) {
            const btn = this.querySelector('button');
            btn.textContent = '⏳ Yuborilmoqda...';
            btn.style.background = '#27ae60';
        });

        // Input maydonlarga focus bo'lganda label rangini o'zgartirish
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                const label = this.closest('.form-group').querySelector('label');
                if (label) label.style.color = '#3498db';
            });
            
            input.addEventListener('blur', function() {
                const label = this.closest('.form-group').querySelector('label');
                if (label) label.style.color = '#333';
            });
        });
    </script>
</body>
</html>