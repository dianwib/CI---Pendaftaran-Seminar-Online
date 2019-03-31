

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST" style=" width:50%; margin:auto;  border-style: solid; border-width: 10px">
<center>
	<table border="3px">
	<th  style="background-color: black; color: white;">ID</th>
	<th  style="background-color: black; color: white;">NAMA</th>
	<th  style="background-color: black; color: white;">PASSWORD</th>	
	<th  style="background-color: black; color: white;">LEVEL</th>

	<th  style="background-color: black; color: white;">ACTION</th>
	
<?php foreach($admin as $data){ 
	
		echo "<tr>";
			echo "<td>". $data->id ."</td>";
			echo "<td>". $data->nama ."</td>";
			echo "<td>". $data->password ."</td>";
			echo "<td>". $data->level ."</td>";
			echo "<td>".anchor('Page/edit_select/'.$data->id,'Edit')."||".anchor('Page/hapus/'.$data->id,'Hapus')."</td>";
		echo "</tr>";
}
?>
</table>
<br>
<button><a href="../Page/tambah">Kembali Ke Form</a></button>
</center>

</form>
</body>
</html>