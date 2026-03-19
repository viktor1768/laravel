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
	<tr>
		<td style = "border: 1px solid #000000">{{$user->id}}</td>
		<td style = "border: 1px solid #000000">{{$user->name}}</td>
		<td style = "border: 1px solid #000000">{{$user->email}}</td>
		<td style = "border: 1px solid #000000">{{$user->age}}</td>
		<td style = "border: 1px solid #000000">{{$user->salary}}</td>
		<td style = "border: 1px solid #000000">{{$user->password}}</td>
		<td style = "border: 1px solid #000000">{{$user->cities}}</td>
	</tr>
	@endforeach
</table>
</body>
</html>
	