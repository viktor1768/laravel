<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$title}}</title>
</head>
<body>
		@if (count($arr) >= 1)
	    в массиве есть записи
        @else
	    в массиве нет записей
        @endif

</body>
</html>
