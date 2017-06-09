<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
</head>
<body>
<center>
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Nama </td>
			<td>Kelas </td>
			<td>Jurusan </td>
			<td>Jenis Kelamin </td>
		</tr>

		@foreach($tampilan as $data)
		<tr>
			<td>{{$data -> id}}</td>
			<td>{{$data -> nama}}</td>
			<td>{{$data -> kelas}}</td>
			<td>{{$data -> jurusan}}</td>
			<td>{{$data -> jenis_kelamin}}</td>
		</tr>

		@endforeach
	</table>



</center>
</body>
</html>
