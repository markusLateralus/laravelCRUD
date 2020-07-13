<!DOCTYPE html>
<html>
<head>
	<title>mensaje recibido</title>
</head>
<body>

<p>Recibistes un mensaje de: {{$msg["name"]}} - {{$msg["correo"]}}</p>
<p><strong>Asunto:</strong> {{$msg["subject"]}}</p>
<p><strong>Contenido:</strong> {{$msg["contenido"]}}</p>
</body>
</html>