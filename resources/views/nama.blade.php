<!DOCTYPE html>
<html>
<head>
	<title>Nama</title>
</head>
<body>
	<h1>Daftar Nama</h1>
	
		@foreach($nama as $data)
			<li>{{$data}}</li>
		@endforeach
</body>
</html>