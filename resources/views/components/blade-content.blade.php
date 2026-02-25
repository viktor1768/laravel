<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>
</head>
<body>
		<p>
	
			Страна - 
			@if(!empty($location['country'])) 
			{{$location['country']}} 
			@else
			Russia
			@endif
		</p>
		<p>
			Город - 
			@if(!empty($location['city'])) 
			{{$location['city']}}
			@else
			Moscow
			@endif
		</p>
		{{$text}}
</body>
</html>
