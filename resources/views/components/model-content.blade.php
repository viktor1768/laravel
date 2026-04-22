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
		<td style = "border: 1px solid #000000">{{$poster->title}}</td>
		<td style = "border: 1px solid #000000">{{$poster->thumbnail->alt}}</td>
	</tr>
	@endforeach
	@foreach($thumbnails as $thumbnails_bel)
	<tr>
		<td style = "border: 1px solid #000000">{{$thumbnails_bel->post->id}}</td>
		<td style = "border: 1px solid #000000">{{$thumbnails_bel->post->title}}</td>
		<td style = "border: 1px solid #000000">{{$thumbnails_bel->post->desc}}</td>
		<td style = "border: 1px solid #000000">{{$thumbnails_bel->path}}</td>
	</tr>
	@endforeach
	@forelse($contrys as $contry)
	<p>{{$contry->name}}</p>
	    @forelse ($contry->City as $city)
	        <p>{{ $city->name }}</p>
	    @empty
	        <p>none</p>
	    @endforelse
	@empty
	    <p>none</p>
	@endforelse
</table>
</body>
</html>