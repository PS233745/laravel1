<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Gekozen album</p>
<div class="col-start-2 col-span-2">
    <form action="{{ route('albums.edit', $album->id) }}" method="GET" class="border border-b-amber-400 rounded flex flex-col px-3 py-1 m-0">
        @csrf
        <p class="font-thin">Name: </p><p class="border border-b-amber-200">{{$album->name}}</p>
        <p class="font-thin">Year: </p><p class="border border-b-amber-200">{{$album->year}}</p>
        <p class="font-thin">Times Sold: </p><p class="border border-b-amber-200">{{$album->times_sold}}</p>
        <p class="font-thin">Album of:</p>
        @if(isset($album->band))
        <p class="border border-b-amber-200">
            {{$album->band->name}}
        </p>
        @else
            <p>geen band gekoppeld</p>
        @endif
        <input class="bg-amber-400 border border-amber-500 border rounded px-2 my-2" type="submit" value="Edit"/>
    </form><br>
</div>
</body>
