<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman Index</title>
</head>
<body>


@if ($a==1)
	Cucu Cahyati
@elseif ($a==2)
	Cucu Ramdhani <br>	
	@endif	

@for($i=0; $i<10;$i++)	
	Ini Angka {{$i+1}} <br>
@endfor
				

</body>
</html>