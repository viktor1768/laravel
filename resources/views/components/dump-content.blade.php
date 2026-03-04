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
		@if($elem!=0)
		<b>{{$elem}}</b>
		@else
		@break
		@endif
		@endforeach
			 
    </ul>
</body>
</html>
	