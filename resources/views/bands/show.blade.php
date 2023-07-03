<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Gekozen band</p>
<div class="col-start-2 col-span-2">
    <form action="{{ route('bands.edit', $band->id) }}" method="POST" class="border border-b-cyan-400 rounded flex flex-col px-3 py-1 m-0">
        @csrf
        <p class="font-thin">Name:  </p><p class="border border-b-cyan-200">{{$band->name}}</p>
        <p class="font-thin">Genre:  </p><p class="border border-b-cyan-200">{{$band->genre}}</p>
        <p class="font-thin">Founded:  </p><p class="border border-b-cyan-200">{{$band->founded}}</p>
        <p class="font-thin">Active Until:  </p><p class="border border-b-cyan-200">{{$band->active_till}}</p>
        <p class="font-thin">Albums:</p>
        @foreach($band->albums as $album)
            <p  class="border border-b-cyan-200">{{$album->name}}</p>
        @endforeach
        <input class="bg-cyan-400 border border-cyan-500 border rounded px-2 mt-1" type="submit" value="Edit"/>
    </form><br>
</div>
</body>
