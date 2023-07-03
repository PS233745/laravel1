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
    <form method="POST" action="{{ route('song.update', ['song' => $song->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $song->title }}" />
        </div>

        <div>
            <label>Singer</label>
            <input type="text" name="singer" value="{{ $song->singer }}" />
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
