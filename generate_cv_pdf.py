from pathlib import Path
from reportlab.pdfgen import canvas

out = Path(r"c:\xampp\htdocs\portofolio2\assets\cv\CV Daffa Rifqi Al Faiz.pdf")
out.parent.mkdir(parents=True, exist_ok=True)

pdf = canvas.Canvas(str(out))
pdf.setTitle("CV Daffa Rifqi Al Faiz")
pdf.setFont("Helvetica-Bold", 18)
pdf.drawString(80, 760, "CV Daffa Rifqi Al Faiz")
pdf.setFont("Helvetica", 12)
pdf.drawString(80, 730, "PDF version for download")
pdf.drawString(80, 710, "Portfolio - Daffa Rifqi")
pdf.save()

print(f"created={out.exists()} size={out.stat().st_size if out.exists() else 0}")
