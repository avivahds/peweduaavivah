<!DOCTYPE html>
<html>
<head>
	<title>Belajar Array</title>
</head>
<body>
	<h1>Belajar Array</h1>
	<?php 
		$mahasiswa = ["rifai","rahmat","bagas","jandi","alif"];

		$prodi = [
					[
						"id"=>1,
						"nama"=>"Sisfo",
						"kuota"=>58,
						"kaprodi"=>"Ilhamsyah"
					],
					[
						"id"=>2,
						"nama"=>"Kelautan",
						"kuota"=>32,
						"kaprodi"=>"Nora"
					],
					[
						"id"=>3,
						"nama"=>"Kimia",
						"kuota"=>40,
						"kaprodi"=>"Andi"
					],
					[
						"id"=>4,
						"nama"=>"Fisika",
						"kuota"=>25,
						"kaprodi"=>"Nurhasanah"
					],
					[
						"id"=>5,
						"nama"=>"Biologi",
						"kuota"=>40,
						"kaprodi"=>"Rizalinda"
					]
				];
 	?>

 	<h2>
 		<?php 
 		echo $mahasiswa [1];
 		echo "<br>";
 		echo $prodi [1]['nama'];
 		 ?>
 	</h2>

 	<pre>
 		<?php 
 			var_dump($prodi);
 		 ?>
 	</pre>
 	
</body>
</html>