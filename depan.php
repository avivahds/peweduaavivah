<?php 

spl_autoload_register(function($class) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});


	$v = new \app\View();
	$v->render();

	echo "<br>";

	use src\View;
	$g = new View();
	$g->render();

	echo "<br>";

	$z = new \src\Mahasiswa();
	$z->test();

 ?>