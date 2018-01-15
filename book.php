<?php 
	$books = [];
	$get_Books = json_decode(file_get_contents("http://mcc-ws-odd1718.herokuapp.com/books.php"));
	$books = $get_Books;
	header('Content-Type: application/json');
	print json_encode($books);
 ?>