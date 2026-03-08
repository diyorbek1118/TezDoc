<?php
// Shartnoma uchun ma'lumotlar
$shartnoma = [
    'raqam' => '156/2025',
    'sana' => [
        'kun' => '20',
        'oy' => 'oktyabr',
        'yil' => '2025'
    ],
    'hudud' => 'Toshkent shahri',
    
    'topshiruvchi' => [
        'nomi' => '"Alfa Savdo" MChJ',
        'rahbar_fio' => 'Aliyev Akbar Akramovich',
        'manzil' => 'Toshkent sh., Yunusobod tumani, Amir Temur ko\'chasi, 108-uy',
        'hisob_raqam' => '20208000504567891234',
        'mfo' => '00445',
        'stir' => '123456789',
        'telefon' => '+998 71 234-56-78'
    ],
    
    'qabul_qiluvchi' => [
        'nomi' => '"Beta Trade" AJ',
        'rahbar_fio' => 'Karimov Kamol Karimovich',
        'manzil' => 'Toshkent sh., Mirzo Ulug\'bek tumani, Mustaqillik prospekti, 45-bino',
        'hisob_raqam' => '20208000607891234567',
        'mfo' => '00421',
        'stir' => '987654321',
        'telefon' => '+998 71 345-67-89'
    ],
    
    'qarzdor' => [
        'nomi' => '"Gamma Invest" XK',
        'rahbar_fio' => 'Rahimov Rustam Ravshanovich',
        'manzil' => 'Toshkent sh., Shayxontohur tumani, Bunyodkor ko\'chasi, 67-ofis',
        'hisob_raqam' => '20208000709123456789',
        'mfo' => '00401',
        'stir' => '456789123',
        'telefon' => '+998 71 456-78-90'
    ],
    
    'summa' => '150 000 000',
    'qoshimcha_shartlar' => 'Shartnoma imzolangandan so\'ng 3 ish kuni ichida tomonlar o\'zaro solishtiruv dalolatnomalarini taqdim etishlari shart.'
];
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shartnoma - Haqqdan Voz Kechish</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', serif;
            line-height: 1.6;
            background: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 210mm;
            margin: 0 auto;
            background: white;
            padding: 40px 50px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 20px 15px;
            }
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .header .subtitle {
            font-size: 14px;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 14px;
            }

            .header .subtitle {
                font-size: 12px;
            }
        }

        .contract-info {
            text-align: center;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .parties {
            margin: 20px 0;
            font-size: 13px;
            text-align: justify;
        }

        .section {
            margin: 20px 0;
        }

        .section-title {
            font-weight: bold;
            text-align: center;
            font-size: 14px;
            margin: 15px 0 10px 0;
        }

        .clause {
            margin: 10px 0;
            padding-left: 20px;
            text-align: justify;
            font-size: 13px;
        }

        .clause-number {
            font-weight: bold;
        }

        .signatures {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            font-size: 12px;
        }

        @media (max-width: 1024px) {
            .signatures {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        .signature-block {
            border-top: 2px solid #333;
            padding-top: 10px;
        }

        .signature-block h3 {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .signature-block p {
            margin: 5px 0;
            line-height: 1.4;
        }

        .signature-line {
            margin-top: 30px;
            border-top: 1px solid #000;
            padding-top: 5px;
            text-align: center;
        }

        .action-buttons {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            gap: 15px;
            z-index: 1000;
        }

        .btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0 4px 12px rgba(37,99,235,0.3);
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(37,99,235,0.4);
        }

        .btn-back {
            background: #64748b;
        }

        .btn-back:hover {
            background: #475569;
        }

        @media (max-width: 768px) {
            .action-buttons {
                bottom: 20px;
                right: 20px;
                left: 20px;
                flex-direction: column;
                gap: 10px;
            }

            .btn {
                padding: 12px 20px;
                font-size: 14px;
                justify-content: center;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .action-buttons {
                bottom: 10px;
                right: 10px;
                left: 10px;
            }

            .btn {
                padding: 10px 15px;
                font-size: 13px;
            }
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }

            .container {
                box-shadow: none;
                padding: 20mm;
                max-width: 100%;
            }

            .action-buttons {
                display: none;
            }

            @page {
                margin: 15mm;
                size: A4;
            }
        }

        .highlight {
            background: #fef3c7;
            padding: 2px 4px;
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SHARTNOMA № <?php echo $shartnoma['raqam']; ?></h1>
            <div class="subtitle">(Haqqdan voz kechish va qarzni o'tkazish haqida)</div>
        </div>

        <div class="contract-info">
            <p><?php echo $shartnoma['hudud']; ?>, <?php echo $shartnoma['sana']['kun'] . ' ' . $shartnoma['sana']['oy'] . ' ' . $shartnoma['sana']['yil']; ?> yil</p>
        </div>

        <div class="parties">
            <p><strong><?php echo $shartnoma['topshiruvchi']['nomi']; ?></strong> nomidan <strong><?php echo $shartnoma['topshiruvchi']['rahbar_fio']; ?></strong> kelgusida "Topshiruvchi" deb nomlanuvchi bir tomondan,</p>
            
            <p><strong><?php echo $shartnoma['qabul_qiluvchi']['nomi']; ?></strong> nomidan <strong><?php echo $shartnoma['qabul_qiluvchi']['rahbar_fio']; ?></strong> kelgusida "Qabul qiluvchi" deb nomlanuvchi ikkinchi tomondan va</p>
            
            <p><strong><?php echo $shartnoma['qarzdor']['nomi']; ?></strong> nomidan <strong><?php echo $shartnoma['qarzdor']['rahbar_fio']; ?></strong> kelgusida "Qarzdor" deb nomlanuvchi uchinchi tomondan O'zbekiston Respublikasining Fuqarolik Kodeksining 318-323-moddalari tartibida quyidagi mazmunda shartnoma tuzadilar.</p>
        </div>

        <div class="section">
            <div class="section-title">1. SHARTNOMA MAZMUNI</div>
            <div class="clause">
                <span class="clause-number">1.1.</span> "Topshiruvchi" "Qabul qiluvchi"dan bo'lgan haqqidan "Qarzdor"ning "Qabul qiluvchi"dan bo'lgan qarzi hisobiga voz kechadi.
            </div>
            <div class="clause">
                <span class="clause-number">1.2.</span> "Qabul qiluvchi" esa "Topshiruvchi"dan bo'lgan qarzini "Qarzdor"dan bo'lgan haqqi hisobiga hisob-kitob qiladi.
            </div>
            <div class="clause">
                <span class="clause-number">1.3.</span> "Qarzdor" "Qabul qiluvchi"dan bo'lgan qarzini "Topshiruvchi"ning "Qabul qiluvchi"dan bo'lgan haqqi hisobiga hisob-kitob qiladi.
            </div>
            <div class="clause">
                <span class="clause-number">1.4.</span> Tomonlar shartnoma shartlarini bajarishdan oldin, o'zaro solishtiruv dalolatnomalarini mazkur shartnomaga ilova qilishlari shart.
            </div>
            <div class="clause">
                <span class="clause-number">1.5.</span> Shartnomaning umumiy summasi <span class="highlight"><strong><?php echo $shartnoma['summa']; ?> so'm</strong></span>ni tashkil etadi.
            </div>
        </div>

        <div class="section">
            <div class="section-title">2. TARAFLARNING MAJBURIYATLARI</div>
            <div class="clause">
                <span class="clause-number">2.1.</span> "Topshiruvchi"ning majburiyatlari:
            </div>
            <div class="clause" style="padding-left: 40px;">
                <span class="clause-number">2.1.1.</span> "Topshiruvchi" ushbu shartnoma bilan o'ziga yuklatilgan majburiyatlarni o'z vaqtida bajarishni o'z zimmasiga oladi.
            </div>
            <div class="clause" style="padding-left: 40px;">
                <span class="clause-number">2.1.2.</span> "Topshiruvchi" "Qabul qiluvchi"ga undan bo'lgan haqqini "Qarzdor"ning foydasiga uni "Qabul qiluvchi"dan bo'lgan qarzi hisobiga voz kechadi.
            </div>
            <div class="clause" style="padding-left: 40px;">
                <span class="clause-number">2.1.3.</span> "Topshiruvchi" ushbu shartnoma imzolangandan keyin, tegishli buxgalteriya hujjatlari va ushbu shartnomaga asosan, hisobotlarga o'zgartirishlar kiritadi.
            </div>

            <div class="clause">
                <span class="clause-number">2.2.</span> "Qabul qiluvchi"ning majburiyatlari:
            </div>
            <div class="clause" style="padding-left: 40px;">
                <span class="clause-number">2.2.1.</span> "Topshiruvchi" o'z haqqidan "Qarzdor"ning foydasiga voz kechishi evaziga uning haqqini "Qarzdor"ning qarzi hisobiga qabul qiladi.
            </div>
            <div class="clause" style="padding-left: 40px;">
                <span class="clause-number">2.2.2.</span> Mazkur shartnoma imzolangandan keyin tegishli buxgalteriya hujjatlari va hisobotlarga o'zgartirishlar kiritadi.
            </div>

            <div class="clause">
                <span class="clause-number">2.3.</span> "Qarzdor"ning majburiyatlari:
            </div>
            <div class="clause" style="padding-left: 40px;">
                <span class="clause-number">2.3.1.</span> "Qarzdor" ushbu shartnoma bilan o'ziga yuklatilgan barcha majburiyatlarni bajarishni kafolatlaydi.
            </div>
            <div class="clause" style="padding-left: 40px;">
                <span class="clause-number">2.3.2.</span> Barcha yuridik harakatlari yuzasidan "Qabul qiluvchi" oldida o'zi javobgar bo'ladi.
            </div>
        </div>

        <div class="section">
            <div class="section-title">3. TOMONLARNING JAVOBGARLIGI</div>
            <div class="clause">
                <span class="clause-number">3.1.</span> Tomonlar o'z majburiyatlarini lozim darajada bajarmasalar yoki bajarishni kechiktirib yuborsalar, O'zbekiston Respublikasi Fuqarolik Kodeksi va amaldagi qonun hujjatlari bilan javobgar bo'ladilar.
            </div>
        </div>

        <div class="section">
            <div class="section-title">4. FORS-MAJOR HOLATLARI</div>
            <div class="clause">
                <span class="clause-number">4.1.</span> Shartnoma muddati davomida fors-major holatlari yuz bergan hollarda tomonlar shartnoma bo'yicha o'z majburiyatlarini bajarishdan ozod qilinadilar.
            </div>
        </div>

        <div class="section">
            <div class="section-title">5. NIZOLARNI HAL QILISH TARTIBI</div>
            <div class="clause">
                <span class="clause-number">5.1.</span> Taraflar o'rtasida ushbu shartnoma bo'yicha paydo bo'ladigan barcha nizolar muzokara yo'li bilan hal qilinadi.
            </div>
            <div class="clause">
                <span class="clause-number">5.2.</span> Agar kelishmovchiliklarni muzokara yo'li bilan hal qilib bo'lmasa, ular qonun hujjatlarida belgilangan tartibda iqtisodiy sud orqali hal qilinadi.
            </div>
        </div>

        <div class="section">
            <div class="section-title">6. QO'SHIMCHA SHARTLAR</div>
            <div class="clause">
                <p><?php echo $shartnoma['qoshimcha_shartlar']; ?></p>
            </div>
        </div>

        <div class="signatures">
            <div class="signature-block">
                <h3>TOPSHIRUVCHI</h3>
                <p><strong><?php echo $shartnoma['topshiruvchi']['nomi']; ?></strong></p>
                <p><?php echo $shartnoma['topshiruvchi']['manzil']; ?></p>
                <p>H/r: <?php echo $shartnoma['topshiruvchi']['hisob_raqam']; ?></p>
                <p>MFO: <?php echo $shartnoma['topshiruvchi']['mfo']; ?></p>
                <p>STIR: <?php echo $shartnoma['topshiruvchi']['stir']; ?></p>
                <p>Tel: <?php echo $shartnoma['topshiruvchi']['telefon']; ?></p>
                <div class="signature-line">
                    <?php echo $shartnoma['topshiruvchi']['rahbar_fio']; ?>
                </div>
            </div>

            <div class="signature-block">
                <h3>QABUL QILUVCHI</h3>
                <p><strong><?php echo $shartnoma['qabul_qiluvchi']['nomi']; ?></strong></p>
                <p><?php echo $shartnoma['qabul_qiluvchi']['manzil']; ?></p>
                <p>H/r: <?php echo $shartnoma['qabul_qiluvchi']['hisob_raqam']; ?></p>
                <p>MFO: <?php echo $shartnoma['qabul_qiluvchi']['mfo']; ?></p>
                <p>STIR: <?php echo $shartnoma['qabul_qiluvchi']['stir']; ?></p>
                <p>Tel: <?php echo $shartnoma['qabul_qiluvchi']['telefon']; ?></p>
                <div class="signature-line">
                    <?php echo $shartnoma['qabul_qiluvchi']['rahbar_fio']; ?>
                </div>
            </div>

            <div class="signature-block">
                <h3>QARZDOR</h3>
                <p><strong><?php echo $shartnoma['qarzdor']['nomi']; ?></strong></p>
                <p><?php echo $shartnoma['qarzdor']['manzil']; ?></p>
                <p>H/r: <?php echo $shartnoma['qarzdor']['hisob_raqam']; ?></p>
                <p>MFO: <?php echo $shartnoma['qarzdor']['mfo']; ?></p>
                <p>STIR: <?php echo $shartnoma['qarzdor']['stir']; ?></p>
                <p>Tel: <?php echo $shartnoma['qarzdor']['telefon']; ?></p>
                <div class="signature-line">
                    <?php echo $shartnoma['qarzdor']['rahbar_fio']; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="action-buttons">
        <a href="{{ route('home') }}" class="btn btn-back">
            ← Orqaga
        </a>
        <button class="btn" onclick="window.print()">
            🖨️ Chop etish
        </button>
    </div>

    <script>
        // Chop etish sozlamalari
        window.onbeforeprint = function() {
            document.title = 'Shartnoma';
        };

        window.onafterprint = function() {
            document.title = 'Shartnoma - Haqqdan Voz Kechish';
        };
    </script>
</body>
</html>