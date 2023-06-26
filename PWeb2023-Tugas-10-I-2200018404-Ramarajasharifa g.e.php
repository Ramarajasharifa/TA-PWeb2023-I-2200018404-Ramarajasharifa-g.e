<?php
	$nilai = 80;

	if ($nilai >= 80.00 && $nilai <= 100.00){
		echo "Nilai anda $nilai Predikat A, Baik Sekali";
	}
	if ($nilai >= 68.75 && $nilai <= 76.24){
		echo "Nilai anda $nilai Predikat B+, Baik";
	}
	if ($nilai >= 57.50 && $nilai <= 62.49){
		echo "Nilai anda $nilai Predikat C+, Cukup";
	}
	if ($nilai >= 43.75 && $nilai <= 51.24){
		echo "Nilai anda $nilai Predikat D+, Kurang";
	}
	if ($nilai >= 0.00 && $nilai <= 39.99){
		echo "Nilai anda $nilai Predikat E, Gagal";
	}
?>
