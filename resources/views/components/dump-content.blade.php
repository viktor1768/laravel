<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$titling}}</title>
</head>
<body>
<table>
	@foreach($posts as $post)
	<tr>
		<td style = "border: 1px solid #000000">{{$post->id}}</td>
		<td style = "border: 1px solid #000000">{{$post->title}}</td>
	</tr>
	@endforeach
</table>
</body>
</html>
	