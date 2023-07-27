<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">AZIENDA</th>
                        <th scope="col">STAZIONE DI PARTENZA</th>
                        <th scope="col">STAZIONE DI ARRIVO</th>
                        <th scope="col">DATA PARTENZA</th>
                        <th scope="col">ORARIO DI PARTENZA</th>
                        <th scope="col">ORARIO DI ARRIVO</th>
                        <th scope="col">CODICE TRENO</th>
                        <th scope="col">NUMERO CARROZZE</th>
                        <th scope="col">IN ORARIO</th>
                        <th scope="col">CANCELLATO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{ $train->azienda }}</th>
                            <td>{{ $train->stazione_di_partenza }}</td>
                            <td>{{ $train->stazione_di_arrivo }}</td>
                            <td>{{ $train->data }}</td>
                            <td>{{ $train->orario_di_partenza }}</td>
                            <td>{{ $train->orario_di_arrivo }}</td>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->numero_carrozze }}</td>
                            @if($train->in_orario === 0)
                                <td>In Ritardo</td>    
                            @else
                                <td>Puntuale</td>    
                            @endif
                            @if($train->cancellato === 0)
                                <td>NO</td>    
                            @else
                                <td>SI</td>    
                            @endif
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>