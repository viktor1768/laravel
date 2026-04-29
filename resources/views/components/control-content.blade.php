<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>
</head>
<body>
<table>
	@foreach($message as $messager)
	<tr>
		<td style = "border: 1px solid #000000">{{$messager->name}}</td>
		<td style = "border: 1px solid #000000">{{$messager->message}}</td>
	</tr>
	@endforeach
	<form action = "/Control" method="GET">
		<input type = "text" name="name" placeholder="Введите имя"><br><br>
		<textarea name="message" placeholder="Введите сообщение"></textarea><br><br>
		<button type = "submit">Отправить сообщение</button>
	</form>
</table>
</body>
</html>