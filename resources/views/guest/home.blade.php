<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
     <body>
         <h1>GUEST HOME PAGE</h1>
         @if (Auth::check())
             <a href="/admin">VAI AD ADMIN</a>
         @endif
     </body>
    
</html>
