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
                <h1>Treni</h1>
            </div>
            <ul class="list-unstyled d-flex justify-content-between flex-wrap gap-2">
                @foreach ($trains as $train)
                    <li class="card col-3">
                        <div class="card-body">
                            <h5>Compagnia: {{ $train->train_company }}</h5>
                            <p>Codice treno: {{ $train->id_train }}</p>
                            <p>Stazione di partenza: {{ $train->departure_station }}</p>
                            <p>Stazione di arrivo: {{ $train->arrived_station }}</p>
                            <p>Partenza: {{ $train->departure }}</p>
                            <p>Arrivo: {{ $train->arrivals }}</p>
                            <p>N°carrozze: {{ $train->n_carriages }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    {{-- treni disponibili oggi --}}
</body>
<div class="container">
    <div class="row">
        <div class="my-2">
            <h1>Treni di oggi</h1>
        </div>
        <ul class="list-unstyled d-flex justify-content-between flex-wrap gap-2">
            @foreach ($today_train as $train)
                <li class="card col-3">
                    <div class="card-body">
                        <h5>Compagnia: {{ $train->train_company }}</h5>
                        <p>Codice treno: {{ $train->id_train }}</p>
                        <p>Stazione di partenza: {{ $train->departure_station }}</p>
                        <p>Stazione di arrivo: {{ $train->arrived_station }}</p>
                        <p>Partenza: {{ $train->departure }}</p>
                        <p>Arrivo: {{ $train->arrivals }}</p>
                        <p>N°carrozze: {{ $train->n_carriages }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
</html>
