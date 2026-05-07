<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>
</head>
<body>
	@foreach($message as $messager)
	<div style="border: 1px solid #000000; margin-bottom: 2rem; padding-left: 1rem">
		<p>Имя отправителя - {{$messager->name}}</p>
		<p>Сообщение: {{$messager->message}}</p>
	</div>
	@endforeach
	<form action = "/public/control" method="GET">
		<input type = "text" name="name" placeholder="Введите имя"><br><br>
		<textarea name="message" placeholder="Введите сообщение"></textarea><br><br>
		<button type = "submit">Отправить сообщение</button>
	</form>
</table>
</body>
</html>