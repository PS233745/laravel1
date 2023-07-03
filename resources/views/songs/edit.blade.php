<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl">Liedje Wijzigen</p>
<div class="col-start-2">
    {{ route('songs.update', $song->id) }}
    <form action="{{ route('songs.update', $song->id) }}" method="POST" class="border border-b-green-400 rounded flex flex-col p-3 m-0">
        @csrf
        @method('put')
        <input class="col-span-5 border border-green-600 rounded px-1" name="title" value="{{$song->title}}"/>
        <input class="col-span-5 border border-green-600 rounded px-1" name="singer" value="{{$song->singer}}"/>
        <input  class="bg-green-400 border border-green-500 border rounded px-2" type="submit" value="Wijzigen">
    </form>
</div>
</body>
