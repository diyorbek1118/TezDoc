<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariza - Ro'yxatga Olish</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', serif;
            background: #f5f5f5;
            padding: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 210mm;
            margin: 0 auto;
            background: white;
            padding: 40px 50px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            min-height: 297mm;
            position: relative;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 20px 15px;
                min-height: auto;
            }
        }

        .header {
            text-align: right;
            margin-bottom: 50px;
            line-height: 1.8;
        }

        .header-content {
            display: inline-block;
            text-align: left;
            max-width: 60%;
        }

        @media (max-width: 768px) {
            .header {
                margin-bottom: 30px;
            }

            .header-content {
                max-width: 100%;
            }
        }

        .title {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            margin: 40px 0 30px 0;
            text-transform: uppercase;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 16px;
                margin: 30px 0 20px 0;
            }
        }

        .content {
            text-align: justify;
            line-height: 1.8;
            text-indent: 40px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .content {
                text-indent: 20px;
                font-size: 13px;
            }
        }

        .table-container {
            margin: 30px 0;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 10px;
            text-align: left;
            font-size: 13px;
        }

        th {
            background-color: #f9f9f9;
            font-weight: bold;
            text-align: center;
        }

        @media (max-width: 768px) {
            th, td {
                padding: 8px;
                font-size: 11px;
            }
        }

        .footer {
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .footer {
                margin-top: 30px;
            }
        }

        .signature-line {
            margin: 30px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media (max-width: 768px) {
            .signature-line {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }

        .note {
            margin-top: 30px;
            font-size: 12px;
            font-style: italic;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .note {
                font-size: 11px;
            }
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
                margin: 0;
            }

            .container {
                box-shadow: none;
                padding: 0;
                max-width: 100%;
                min-height: auto;
                margin: 0;
            }

            .action-buttons {
                display: none;
            }

            @page {
                margin: 20mm 25mm;
                size: A4 portrait;
            }

            .header {
                margin-bottom: 40px;
            }

            .title {
                margin: 30px 0 20px 0;
            }

            .content, .table-container {
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <p>{{ $fields['ariza_rekvizit']['tashkilot'] ?? '' }}ga</p>
                <p>{{ $fields['manzil']['viloyat'] ?? '' }}, {{ $fields['manzil']['tuman'] ?? '' }}da</p>
                <p>yashovchi {{ $fields['fio'] ?? '' }}dan</p>
            </div>
        </div>

        <div class="title">ARIZA</div>

        <div class="content">
            Mening egaligimda bo'lgan, 
            {{ $fields['uy_joy_manzil']['viloyat'] ?? '' }}, 
            {{ $fields['uy_joy_manzil']['tuman'] ?? '' }}, 
            {{ $fields['uy_joy_manzil']['kocha'] ?? '' }}, 
            {{ $fields['uy_joy_manzil']['uy_raqam'] ?? '' }}-uy, 
            {{ $fields['uy_joy_manzil']['xonadon_raqam'] ?? '' }}-xonadonda joylashgan 
            umumiy foydalanish maydoni {{ $fields['mazmun']['umumiy_maydon'] ?? '' }} kv/m dan iborat bo'lgan 
            xonadonga fuqaro {{ $fields['mazmun']['royxatga_olinuvchi_fio'] ?? '' }}ni 
            quyidagi oila a'zolari bilan birga doimiy ro'yxatga qo'yishingizni so'rayman.
        </div>

        @if(isset($fields['oila_azolari']) && count($fields['oila_azolari']) > 0)
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Qarindoshlik darajasi</th>
                        <th>F.I.O.</th>
                        <th>Tug'ilgan yili va joyi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fields['oila_azolari'] as $aza)
                    <tr>
                        <td>{{ $aza['qarindoshlik'] ?? '' }}</td>
                        <td>{{ $aza['fio'] ?? '' }}</td>
                        <td>{{ $aza['tugilgan_yil'] ?? '' }} yil, {{ $aza['tugilgan_joy'] ?? '' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

        <div class="footer">
            <div class="signature-line">
                <div>Imzo __________________</div>
                <div>{{ $fields['mazmun']['mulkdor_fio'] ?? '' }}</div>
            </div>
            <div class="signature-line">
                <div>{{ $fields['ariza_rekvizit']['sana'] ?? '' }} yil</div>
            </div>
        </div>

        <div class="note">
            <strong>Izoh.</strong> Mulkdor voyaga yetmagan shaxs bo'lsa, uning nomidan ota-onalar, vasiy (homiy)lar vakil sifatida harakat qiladi.
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
        window.onbeforeprint = function() {
            document.title = 'Ariza';
        };

        window.onafterprint = function() {
            document.title = 'Ariza - Ro\'yxatga Olish';
        };
    </script>
</body>
</html>