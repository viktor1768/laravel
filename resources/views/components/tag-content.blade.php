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
			@if($elem % 2 == 0)
			{{ $key }} - 
			{{ $elem }}
			@endif
		</ul>
		
		@endforeach

</body>
</html>
