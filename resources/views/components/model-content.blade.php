<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>title page</title>
</head>
<body>
<table>
	@foreach($posts as $poster)
	<tr>
		<td style = "border: 1px solid #000000">{{$poster->id}}</td>
		<td style = "border: 1px solid #000000">{{$poster->thumbnail->alt}}</td>
	</tr>
	@endforeach
</table>
</body>
</html>
	