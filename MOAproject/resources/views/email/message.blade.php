<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mensaje recibido</title>
  </head>
  <body>
    <h1>Correo electrónico</h1>
    <p>Has recibido un mensaje de {{ $msg['name'] }} - {{ $msg['email'] }}</p>
    <p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
    <p><strong>Contenido:</strong> {{ $msg['text'] }}</p>
  </body>
</html>
