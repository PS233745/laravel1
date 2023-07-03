<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Album Wijzigen</p>
<div class="col-start-2">
    <form action="{{ route('albums.update', $album->id) }}" method="POST" class="border border-b-amber-400 rounded flex flex-col p-3 m-0">
        @csrf
        @method('put')
        <input class="col-span-5 border border-amber-600 rounded px-1" name="name" value="{{$album->name}}"/>
        <input class="col-span-5 border border-amber-600 rounded px-1" name="year" value="{{$album->year}}"/>
        <input class="col-span-5 border border-amber-600 rounded px-1" name="times_sold" value="{{$album->times_sold}}"/>
        <select name="band_id">
            @foreach($bands as $band)
                <option  value="{{$band->id}}">{{$band->name}}</option>
            @endforeach
        </select>
        <input class="bg-amber-400 my-1 border border-amber-500 border rounded px-2" type="submit" value="Wijzigen">
    </form>
</div>
</body>
