<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<h1 id="sam"></h1>
	<?php 
	session_start();
	echo "your name is " .$_SESSION['namaUser']. "<br><br>";
	?>
	<div data-role= "navbar">
		<ul>
			<li>Homepage</li>
			<li>Search</li>
		</ul>
	</div>
	<table id="temp">
		<tr align="center">
			<th>Id</th>
			<th>Name</th>
			<th>Author</th>
			<th>Genre</th>
			<th>Status</th>
		</tr>
	</table>
	<script>
		$.get("http://localhost/book.php").then(function(result){
			var table = $('#temp');
			var books = result.books;
			var jumlah = $i;
			for (var i = 0; i< books.length; i++) {
				var book = books[i];
				jumlah++;
				table.append(`
					<tbody>
						<tr>
							<td>${i+1}</td>
							<td>${book.title}</td>
							<td>${book.author}</td>
							<td>${book.genre}</td>
							<td><button class="ui-btn ui-corner-all ui-shadow" id="btn${i}">Borrow</button></td>
						</tr>
					</tbody>
				`);
			} document.getElementById("sam").innerHTML = jumlah+1;
			
		})
		function samuel()
		{
			var jumlah = 20;
			var dor = "samuel";
			document.getElementById("sam").innerHTML = jumlah+1;
			
		}
	</script>


</body>
</html>