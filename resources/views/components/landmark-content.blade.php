<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>title page</title>
</head>
<body>

	@endforeach
	@forelse($contrys as $contry)
	<p>{{$contry->name}}</p>
	    @forelse ($contry->City as $city)
	        <p>Город - <a href="/public/city">{{ $city->name }}</a></p>
	    @empty
	        <p>none</p>
	    @endforelse
	@empty
	    <p>none</p>
	@endforelse

	@forelse($contrys as $contry)
	<p>Название страны - {{$contry->name}}</p>
	    @forelse ($contry->User as $user_city)
	        <p>Житель - {{ $user_city->name }}, город - {{ $user_city->City->name }}</p>
	    @empty
	        <p>none</p>
	    @endforelse
	@empty
	    <p>none</p>
	@endforelse


</body>
</html>