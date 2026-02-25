<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>
</head>
<body>
	<ul>
		@foreach ($employees as $subArr)
		 <li>
			{{ $subArr['name'] }}
		</li>
		@endforeach
		
		
		 
    </ul>
</body>
</html>
	