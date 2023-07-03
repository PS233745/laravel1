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
    <div>
        <div>
            <h1>Add song</h1>
            <div>

                <form method="post" action="{{ route('song.index') }}">

                    @csrf
                    <div>
                        <label for="stock_name">Title</label>
                        <input name="title" type="text"/>
                    </div>

                    <div>
                        <label for="ticket">Singer</label>
                        <input name="singer" type="text"/>
                    </div>

                    <button type="submit">Add Song</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
