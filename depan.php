<?php 
	require_once 'app/view.php';
	require_once 'src/view.php';

	$v = new \app\view();
	$v->render();

	echo "<br>";

	use src\view;
	$g = new view();
	$g->render();

 ?>