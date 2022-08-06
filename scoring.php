<?php
$nilaiAkhir = '';
$kriteria = '';
if(isset($_POST['submit'])){
  $praktik = $_POST['praktik'];
  $pilihanGanda = $_POST['pilihan-ganda'];
  $sikap = $_POST['sikap'];
  $kehadiran = $_POST['kehadiran'];
  $nilaiAkhir = (0.6 * $praktik) + (0.3 * $pilihanGanda) + (0.05 * $kehadiran) + (0.05 * $sikap);
  if($nilaiAkhir > 100 || $nilaiAkhir < 0){
    $kriteria = 'nilai tidak valid!';
  }
  else if($nilaiAkhir >= 95){
    $kriteria = 'Memuaskan';
  }
  else if($nilaiAkhir >= 85){
    $kriteria = 'Baik sekali';
  }
  else if($nilaiAkhir >= 75){
    $kriteria = 'Baik';
  }
  else if($nilaiAkhir >= 65){
    $kriteria = 'Cukup';
  }
  else{
    $kriteria = "Tidak lulus";
  }
}
?>