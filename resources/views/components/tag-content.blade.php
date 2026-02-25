<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>
</head>
<body>
		@foreach ($arr as $key => $elem)
		<ul>
			{{ $key }} - {{ $elem }}
		</ul>
		
		@endforeach

</body>
</html>
	