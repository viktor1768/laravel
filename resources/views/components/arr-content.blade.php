<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>
</head>
<body>
	<ul>
		@foreach ($arr as $elem)
		@if($loop->first)
		<li style = "color: red">
			{{$elem}} - первая итерация
		</li>
		@endif
		@if($loop->last)
		<li style = "color: green">
			{{$elem}} - последняя итерация
		</li>
		@endif
		@endforeach
			 
    </ul>
</body>
</html>
	