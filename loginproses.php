<?php
if (isset($_POST['login'])) {
 	$user = $_POST['username'];
 	$pass = $_POST['password'];
 	if ($user=="admin" && $pass=="rahasia") {
 		echo("<h2>Login Berhasil, selamat</h2>");
 	}else {
 		echo "<h2> Login gagal, maaf ulangi lagi</h2>";
 	}
 } 
 ?>