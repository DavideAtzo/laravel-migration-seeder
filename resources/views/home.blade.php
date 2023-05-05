<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="my-2">
                    <h1>Movies</h1>
                </div>
                <ul class="list-unstyled d-flex justify-content-between flex-wrap gap-2">
                    @foreach ($trains as $train)
                        <li class="card col-3">
                            <div class="card-body">
                                <p>id: {{ $train->id_train }}</p>
                            </div>
                        </li>
                    @endforeach
                    </ul>
            </div>
        </div>
    </body>
</html>
