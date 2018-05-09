<!DOCTYPE html>
<html>
<head>
	<title>Judul Halaman</title>
</head>
<body>
	<h1>Judul Paragraf</h1>
	<?php 
	$angka = 3;
	$angka = $angka*2;
	$subjudul = "Ini adalah subjudul";
	var_dump($angka);
	$logika = true;
	$logika_dua = false;

	$hasil = var_dump($logika && $logika_dua);
	echo $hasil;

	if ($logika&&$logika_dua){
		echo "Ini bisa jalan";
	} else {
		echo "Ini tidak jalan";
	}

	$perasaan = "kayaknya sih";

	?>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<h2><?php echo $subjudul ?></h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <?php echo $angka ?></p>
</body>
</html>