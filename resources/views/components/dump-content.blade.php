<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$titling}}</title>
</head>
<body>
<table>
	@foreach($users as $user)
	<ul>
		<li>
			{{$user}}
		</li>
	</ul>
	@endforeach
</table>
</body>
</html>
	