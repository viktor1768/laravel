<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$titling}}</title>
</head>
<body>
	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				<p>{{ $post->slug }}</p>
				<p>{{ $post->likes }}</p>
			</div>
		</div>
	@endforeach
</body>
</html>
	