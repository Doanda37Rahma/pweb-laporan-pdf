<?php

    require("fpdf185/fpdf.php");

    include "config.php";

    $pdf = new FPDF("l", "mm", "A4");

    $pdf->AddPage();
    $pdf->SetFont("Times", "B", 16);
    $pdf->Cell(272, 7, "Daftar Calon Siswa", 0, 1, "C");
    $pdf->Cell(272, 7, "", 0, 1, "C");

    $query = "SELECT * FROM calon_siswa";
    
    $result = mysqli_query($db,  $query);

    if ($result) {
        $pdf->SetFont("Times", "B", 11);
            
        $pdf->Cell(8, 6, "ID", 1, 0, "C");
        $pdf->Cell(36, 6, "foto", 1, 0, "C");
        $pdf->Cell(48, 6, "Nama", 1, 0, "C");
        $pdf->Cell(64, 6, "Alamat",  1,  0,  "C");
        $pdf->Cell(48, 6, "Sekolah Asal", 1, 0, "C");
        $pdf->Cell(32, 6, "Agama", 1, 0, "C");
        $pdf->Cell(32, 6, "Jenis Kelamin", 1, 0, "C");
        $pdf->Ln();

        $pdf->SetFont("Times", "", 12);
        while($siswa = mysqli_fetch_array($result)) {
            
            $pdf->Cell(8, 36, $siswa["id"], 1, 0, "C");
            // $pdf->Cell(36, 36, $siswa["foto"], 1, 0, "C");
            // $pdf->Cell(36, 36, <img src='img/".$siswa['foto']."' width='100' height='100'></td>", 1, 0, "C");
            $pdf->Cell(36, 36, $pdf->Image("img/".$siswa["foto"], $pdf->GetX(), $pdf->GetY(), 33.78));
            $pdf->Cell(48, 36, $siswa["nama"], 1, 0, "C");
            $pdf->Cell(64, 36, $siswa["alamat"],  1,  0,  "C");
            $pdf->Cell(48, 36, $siswa["sekolah_asal"], 1, 0, "C");
            $pdf->Cell(32, 36, $siswa["agama"], 1, 0, "C");
            $pdf->Cell(32, 36, $siswa["jenis_kelamin"], 1, 0, "C");
            $pdf->Ln();

        }
    }
    else {
        die("Gagal mengakses basis data...");
    }


$pdf->Output();
?>