<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Gekozen liedje</p>
<div class="col-start-2 col-span-2">
    <form action="{{ route('songs.edit', $song->id) }}" method="POST" class="border border-b-green-400 rounded flex flex-col px-3 py-1 m-0">
        @csrf
        <p class="font-thin">Titel: </p><p class="border border-b-amber-200">{{$song->title}}</p>
        <p class="font-thin">Artiest: </p><p class="border border-b-amber-200">{{$song->singer}}</p>
        <input class="bg-green-400 border border-green-500 border rounded px-2" type="submit" value="Edit"/>
    </form><br>
</div>
</body>
