<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      color: #333;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }
    
    .container {
  width: 160mm;        
  padding: 5mm 15mm; 
  margin-left: auto;
  margin-right: auto;
  background-color: white;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}


.address {
  text-align: right;
  margin-bottom: 40px;
  max-width: 50%;
  margin-left: auto;
}

.application-content {
  text-align: justify;
  margin-bottom: 50px;
}
.application-title {
  text-align: center;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 15px;
}
.signature {
  display: flex;
  justify-content: space-between;
  margin-top: auto;
}
  </style>
</head>
<body>
  <div class="container">
    
    <div class="address">
      <p>Jizzax viloyati Haj va Umra hayrati raisi<br>
      L.Ahmadjonovga</p>
      
      <p>Sh.Rashidov tumani, Qo‘lama mahallasi,<br>
      A.Ikromov ko‘chasi,  yashovchi<br>
      Abdullayev Abdulla tomonidan</p>
    </div>
    
    <div class="application-title">Ariza</div>
    
    <div class="application-content">
      <p>Arizamning mazmuni shundan iboratki, {{$text}}</p>
    </div>
    
    <div class="signature">
      <div class="signature-left">
        <p>{{ $name }} {{ $surname }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       _________ &nbsp;&nbsp;&nbsp;&nbsp; {{ date('d.m.Y') }} yil</p>
      </div>
      
    </div>
  </div>
</body>
</html>
