<?php
$state_organ_name = "Toshkent shahar iqtisodiy rivojlanish boshqarmasi";
$leader_position = "bosh direktori";
$leader_name = "S. Tursunov";

$organization_name = "HHDSoft MCHJ";
$date = "15.10.2025";
$department_name = "IT bo‘limi";
$employee_position = "Dasturchi";
$employee_name = "Diyorbek Abdisodiqov";

$violation_type = "ishga kechikish";
$violation_details = "soat 9:25 da ishga keldi, 25 daqiqa kechikdi";

$responsible_position = "Kadrlar bo‘limi boshlig‘i";
$responsible_name = "M. Karimova";
$signature = "__________________";

$pdfFileName = pathinfo(__FILE__, PATHINFO_FILENAME);
?>

<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<title>Bildirishnoma</title>
<style>
body { font-family: 'Times New Roman', Times, serif; max-width: 210mm; margin: 0 auto; padding: 20mm; background-color: #f5f5f5;}
.document { position: relative; background-color: white; padding: 40px; box-shadow: 0 0 10px rgba(0,0,0,0.1); min-height: 297mm;}
.header { text-align: right; line-height: 1.8; max-width: 40%; margin-left: auto; margin-bottom: 60px;}
.header-content { display: inline-block; text-align: left; width: 240px; line-height: 1.8; }
.title { position: absolute; top: 280px; left: 50%; transform: translateX(-50%); text-align: center; font-weight: bold; font-size: 18px; margin: 0; text-transform: uppercase; }
.subtitle { margin-top: 200px; text-align: center; font-size: 14px; line-height: 1.6; margin-bottom: 30px; }
.content { text-align: justify; line-height: 1.8; text-indent: 40px; margin-bottom: 20px; }
.footer { margin-top: 50px; }
.date { margin-bottom: 30px; }
.signature-block { display: flex; justify-content: space-between; align-items: flex-end; }
.buttons { margin-top: 40px; text-align: center; }
.btn { display: inline-block; padding: 10px 25px; font-size: 14px; color: white; background-color: #007bff; border: none; border-radius: 6px; cursor: pointer; margin: 5px; transition: background-color 0.2s; text-decoration: none;}
.btn:hover { background-color: #0056b3; }
.btn-back { background-color: #6c757d; }
.btn-back:hover { background-color: #565e64; }
</style>
</head>
<body>
<div class="document">
    <div class="header">
        <div class="header-content">
            <p><?= htmlspecialchars($state_organ_name) ?>
            <?= htmlspecialchars($leader_position) ?>
            <?= htmlspecialchars($leader_name) ?>ga</p>
        </div>
    </div>

    <div class="title">BILDIRISHNOMA</div>

    <div class="subtitle">(Mehnat intizomining buzilishi sababli aybdor xodimga nisbatan intizomiy jazo qoʻllash toʻgʻrisida)</div>

    <div class="content">
        <?= htmlspecialchars($organization_name) ?> ichki mehnat tartibi qoidalariga muvofiq barcha xodimlar ish haftasi davomida belgilangan ish vaqtiga rioya qilishi, kompaniyaning barcha ichki qoidalariga amal qilishi va mehnat intizomini buzmasligi shart.
    </div>

    <div class="content">
        Biroq, <?= htmlspecialchars($date) ?> kuni <?= htmlspecialchars($department_name) ?> boʻlimining <?= htmlspecialchars($employee_position) ?> <?= htmlspecialchars($employee_name) ?> <?= htmlspecialchars($violation_type) ?>: <?= htmlspecialchars($violation_details) ?>. Natijada, xodim tomonidan mehnat intizomi buzildi.
    </div>

    <div class="content">
        Yuqoridagilarga asosan, Sizdan <?= htmlspecialchars($department_name) ?> boʻlimi <?= htmlspecialchars($employee_position) ?> <?= htmlspecialchars($employee_name) ?>ga nisbatan Oʻzbekiston Respublikasi Mehnat kodeksining 312-moddasiga muvofiq tegishli intizomiy jazo chorasini koʻrib chiqishingizni soʻrayman.
    </div>

    <div class="footer">
        <div class="date"><?= htmlspecialchars($date) ?>-yil.</div>
        <div class="signature-block">
            <div class="signature-left">
                <?= htmlspecialchars($responsible_position) ?><br>
                <?= htmlspecialchars($responsible_name) ?>
            </div>
            <div class="signature-right">
                <?= htmlspecialchars($signature) ?>
            </div>
        </div>
    </div>
</div>

<div class="buttons">
    <select id="fileFormat">
        <option value="pdf">PDF</option>
        <option value="doc">DOC</option>
    </select>
    <button class="btn" id="downloadBtn">📥 Yuklab olish</button>
    <button class="btn btn-back" onclick="history.back()">⬅️ Orqaga</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
const pdfFileName = "<?= $pdfFileName ?>";

document.getElementById('downloadBtn').addEventListener('click', function() {
    const format = document.getElementById('fileFormat').value;
    const element = document.querySelector('.document');

    if(format === "pdf") {
        html2canvas(element, { scale: 2 }).then(canvas => {
            const imgData = canvas.toDataURL('image/png');
            const { jsPDF } = window.jspdf;
            const pdf = new jsPDF('p', 'mm', 'a4');
            const imgProps = pdf.getImageProperties(imgData);
            const pdfWidth = pdf.internal.pageSize.getWidth();
            const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
            pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
            pdf.save(pdfFileName + '.pdf');
        });
    } else if(format === "doc") {
        // DOC yaratish uchun Word-friendly HTML
        const contentClone = element.cloneNode(true);
        contentClone.querySelectorAll('.buttons').forEach(btn=>btn.remove());

        const html = `
<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'>
<head><meta charset="utf-8"><title>${pdfFileName}</title>
<style>
body { font-family: 'Times New Roman', Times, serif; margin: 20mm; }
.header-content { width: 240px; line-height: 1.8; text-align: left; }
.title { text-align: center; font-weight: bold; font-size: 18px; text-transform: uppercase; margin-top: 100px; }
.subtitle { text-align: center; font-size: 14px; line-height: 1.6; margin-top: 20px; margin-bottom: 30px; }
.content { text-align: justify; line-height: 1.8; text-indent: 40px; margin-bottom: 20px; }
.footer { margin-top: 50px; }
.signature-block { display: flex; justify-content: space-between; align-items: flex-end; }
</style>
</head>
<body>
${contentClone.innerHTML}
</body></html>`;

        const blob = new Blob(['\ufeff', html], { type: 'application/msword' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = pdfFileName + '.doc';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
});
</script>
</body>
</html>
