<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование</title>
</head>
<body>
	<form action="/public/admin/edit/{{$message->id}}" method="GET">
		<input name="name" value="{{ $message->name }}">
		<textarea name="message">{{ $message->message }}</textarea>
		<input name="submit" type="submit">
    </form>
	<a href="/public/admin">Назад</a>

</table>
</body>
</html>	