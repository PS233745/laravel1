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
<a href="{{ route('band.index')}}">ghfgjfgh</a>
<table>
    <tr>
        <th style="width: 60px; text-align: left">Name</th>
        <th>Singer</th>

    </tr>
    @foreach ($songs as $song)
        <tr>
            <td>{{ $song->title }}</td>
            <td>{{ $song->singer }}</td>
            <td>
                <a href="{{ route('song.show',$song->id)}}">Show</a>
            </td>
            <td>
                <a href="{{ route('song.edit',$song->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('song.destroy', $song->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>

        </tr>
    @endforeach

</table>
    <a href="{{ route('song.create') }}">New song</a>


</body>
</html>
