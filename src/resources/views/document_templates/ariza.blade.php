<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Ariza - Hajj</title>
  <style>
    @page {
      size: A4;
      margin: 2cm;
    }

    body {
      font-family: "Times New Roman", serif;
      background-color: #ffffff;
      color: #000000;
      margin: 0;
      padding: 20px;
    }

    .container {
      width: 210mm;
      min-height: 297mm;
      padding: 2cm;
      box-sizing: border-box;
      background-color: #ffffff;
    }

    .center {
      text-align: center;
    }

    .right {
      text-align: right;
    }

    .bold {
      font-weight: bold;
    }

    .space {
      margin-top: 20px;
    }

    .signature {
      display: flex;
      justify-content: space-between;
      margin-top: 60px;
    }

    p {
      font-size: 16px;
      line-height: 1.8;
    }

    .download-btn {
      display: inline-block;
      margin-bottom: 20px;
      padding: 10px 20px;
      background-color: #007BFF;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    .download-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <button class="download-btn" onclick="downloadPDF()">📄 PDF yuklab olish</button>

  <div class="container" id="pdf-content">
    <p class="center bold">НАМУНА</p>

    <div class="right">
      <p>Жиззах вилояти Ҳаж ва Умра ҳайъати раиси<br>
      Л.Аҳмаджоновага</p>

      <p>Ш.Рашидов тумани, Қулама маҳалласи,<br>
      А.Икромов кўчаси, 20 уйда яшовчи<br>
      Абдуллаев Абдулла томонидан</p>
    </div>

    <p class="center bold space">Ариза</p>

    <p class="space">
      Аризамнинг мазмуни шундан иборатки, мен бу йили ҳаж сафарига
      боришга шароитим етарли бўлмаганлиги сабабли кейинги йилларга
      қолдиришингизни сўрайман.
    </p>

    <div class="signature">
      <div>A.Абдуллаев</div>
      <div>имзо</div>
      <div>08.05.2023 йил</div>
    </div>
  </div>

  <!-- JS kutubxonalar -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

  <script>
    async function downloadPDF() {
      const { jsPDF } = window.jspdf;
      const content = document.getElementById("pdf-content");

      const canvas = await html2canvas(content, { scale: 2 });
      const imgData = canvas.toDataURL("image/png");

      const pdf = new jsPDF("p", "mm", "a4");
      const imgProps = pdf.getImageProperties(imgData);
      const pdfWidth = pdf.internal.pageSize.getWidth();
      const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;

      pdf.addImage(imgData, "PNG", 0, 0, pdfWidth, pdfHeight);
      pdf.save("haj-ariza.pdf");
    }
  </script>
</body>
</html>
