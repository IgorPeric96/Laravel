<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars</title>
    </head>
    <body>
        <h1>Welcome {{ $name }}</h1>
      <p> I'm {{ $age }} years old </p>
    </body>
</html>
