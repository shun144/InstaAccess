<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ログ一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        @foreach ($csv_arr as $k => $v)
            <ul>
                <li><a href="{{ $v }}">{{ $k }}</a></li>
            </ul>            
        @endforeach
    </body>
</html>
