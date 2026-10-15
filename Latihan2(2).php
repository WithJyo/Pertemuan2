<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = round(($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40));
    $status = ($nilaiAkhir >= 70) ? "Lulus" : "Tidak Lulus";

    return "Nilai Akhir: " . $nilaiAkhir . " Status: " . $status;
}

echo hitungNilaiAkhir(80, 85, 84);
?>