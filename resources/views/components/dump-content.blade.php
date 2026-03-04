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
		@if($loop->remaining>=3)
		<b>{{$elem}}</b>
		@else
		<i>{{$elem}}</i>
		@endif
		@endforeach
			 
    </ul>
</body>
</html>
	