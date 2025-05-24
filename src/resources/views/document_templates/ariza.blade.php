<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ariza Namunasi</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      background-color: #e5e2c5;
      color: #333;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    
    .container {
      width: 210mm;
      height: 297mm;
      margin: 20px;
      padding: 40mm 25mm;
      background-color: white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
    }
    
    .header {
      text-align: center;
      margin-bottom: 50px;
    }
    
    .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 40px;
    }
    
    .address {
      text-align: right;
      margin-bottom: 40px;
      max-width: 50%;
      margin-left: auto;
    }
    
    .application-title {
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 30px;
    }
    
    .application-content {
      text-align: justify;
      margin-bottom: 50px;
    }
    
    .signature {
      display: flex;
      justify-content: space-between;
      margin-top: auto;
    }
    
    .signature-left, .signature-right {
      width: 45%;
    }
    
    .signature-right {
      text-align: right;
    }

    .download-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .download-button:hover {
      background-color: #45a049;
    }
    
    @media print {
      body {
        background-color: white;
      }
      .container {
        margin: 0;
        padding: 25mm;
        box-shadow: none;
      }
      .download-button {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="title">NAMUNA</div>
    </div>
    
    <div class="address">
      <p>Jizzax viloyati Haj va Umra hayrati raisi<br>
      L.Ahmadjonovga</p>
      
      <p>Sh.Rashidov tumani, Qo‘lama mahallasi,<br>
      A.Ikromov ko‘chasi, 20-uyda yashovchi<br>
      Abdullayev Abdulla tomonidan</p>
    </div>
    
    <div class="application-title">Ariza</div>
    
    <div class="application-content">
      <p>Arizamning mazmuni shundan iboratki, men bu yili haj safariga borishga sharoitim yetarli bo‘lmaganligi sababli keyingi yillarga qoldirishingizni so‘rayman.</p>
    </div>
    
    <div class="signature">
      <div class="signature-left">
        <p>A.Abdullayev</p>
      </div>
      <div class="signature-right">
        <p>imzo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08.05.2023 yil</p>
      </div>
    </div>
  </div>
  
  <a class="download-button" href="{{ route('ariza.pdf') }}">Юклаб олиш</a>
</body>
</html>