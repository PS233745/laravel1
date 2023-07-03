<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Lied Toevoegen</p>
<div class="col-start-2">
    <form action="{{ route('songs.store') }}" method="POST" class="border border-b-green-400 rounded flex flex-col p-3 m-0">
        @csrf
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="title">Title</label>
            <input class="col-span-5 border border-green-600 rounded px-1" type="text" id="title" name="title" placeholder="title">
        </div>
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="singer">Singer</label>
            <input class="col-span-5 border border-green-600 rounded px-1" type="text" id="singer" name="singer" placeholder="singer">
        </div>
        <div>
            <button class="bg-green-400 border border-green-500 border rounded px-2" type="submit" >Versturen</button>
        </div>
    </form>
</div>
</body>
