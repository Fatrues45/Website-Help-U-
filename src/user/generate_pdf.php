<?php
require '../../libs/fpdf/fpdf.php'; // Sesuaikan path dengan lokasi fpdf.php
require '../../public/app.php'; // Sesuaikan path dengan lokasi app.php

if (isset($_GET['id_tanggapan'])) {
    $id_tanggapan = $_GET['id_tanggapan'];

    $query = "SELECT * FROM (( tanggapan 
               INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan )
               INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas )
               WHERE tanggapan.id_tanggapan = '$id_tanggapan'";

    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    if ($data) {
        $pdf = new FPDF();
        $pdf->AddPage();
        
        // Title
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Laporan Pengaduan', 0, 1, 'C');
        $pdf->Ln(10);
        
        // Content
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'NIK: ' . $data['nik'], 0, 1);
        $pdf->Cell(0, 10, 'Tanggal Pengaduan: ' . $data['tgl_pengaduan'], 0, 1);
        $pdf->Cell(0, 10, 'Tanggal Tanggapan: ' . $data['tgl_tanggapan'], 0, 1);
        $pdf->Ln(5);
        
        $pdf->Cell(0, 10, 'Laporan:', 0, 1);
        $pdf->MultiCell(0, 10, $data['isi_laporan']);
        $pdf->Ln(5);
        
        $pdf->Cell(0, 10, 'Tanggapan:', 0, 1);
        $pdf->MultiCell(0, 10, $data['tanggapan']);
        $pdf->Ln(5);
        
        $pdf->Cell(0, 10, 'Petugas yang Menanggapi: ' . $data['nama_petugas'], 0, 1);
        
        // Output the PDF
        $pdf->Output('D', 'Laporan_Pengaduan.pdf');
    } else {
        echo "Data not found!";
    }
} else {
    echo "Invalid request!";
}
