<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('song.index') }}">Index</a>
    <table>
        <tr>
            <td style="font-weight: bold; width: 50px">Title: </td>
            <td>{{ $song->title }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold; width: 50px">Singer: </td>
            <td>{{ $song->singer }}</td>
        </tr>
    </table>


</body>
</html>


