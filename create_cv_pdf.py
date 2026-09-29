from pathlib import Path

pdf_path = Path(r"c:\xampp\htdocs\portofolio2\assets\cv\CV Daffa Rifqi Al Faiz.pdf")
pdf_path.parent.mkdir(parents=True, exist_ok=True)

stream_text = "BT\n/F1 18 Tf\n72 720 Td\n(CV Daffa Rifqi Al Faiz) Tj\nET\nBT\n/F1 12 Tf\n72 700 Td\n(PDF version for download) Tj\nET\n"
stream_bytes = stream_text.encode("latin-1")

objects = [
    b"<< /Type /Catalog /Pages 2 0 R >>",
    b"<< /Type /Pages /Kids [3 0 R] /Count 1 >>",
    b"<< /Type /Page /Parent 2 0 R /MediaBox [0 0 612 792] /Contents 4 0 R /Resources << /Font << /F1 5 0 R >> >> >>",
    f"<< /Length {len(stream_bytes)} >>\nstream\n".encode("latin-1") + stream_bytes + b"\nendstream",
    b"<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica >>",
]

pdf = bytearray(b"%PDF-1.4\n")
offsets = [0]
for i, obj in enumerate(objects, start=1):
    offsets.append(len(pdf))
    pdf.extend(f"{i} 0 obj\n".encode("latin-1"))
    pdf.extend(obj)
    pdf.extend(b"\nendobj\n")

xref_offset = len(pdf)
pdf.extend(f"xref\n0 {len(objects) + 1}\n".encode("latin-1"))
pdf.extend(b"0000000000 65535 f \n")
for off in offsets[1:]:
    pdf.extend(f"{off:010d} 00000 n \n".encode("latin-1"))
pdf.extend(f"trailer\n<< /Size {len(objects) + 1} /Root 1 0 R >>\nstartxref\n{xref_offset}\n%%EOF\n".encode("latin-1"))

pdf_path.write_bytes(pdf)
print(f"created={pdf_path.exists()} size={pdf_path.stat().st_size}")
