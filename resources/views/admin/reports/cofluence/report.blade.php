<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">

        @foreach ($sentCofluence as $cofluence)
            <table class="table table-bordered">
                <thead>
                    <tr class="{{ $cofluence->side == 'sell' ? 'bg-danger' : 'bg-success' }}">
                        <th class="text-center">{{ $cofluence->created_at->format('d/m/Y H:i:s') }}</th>
                        <th>Cofluencia encontrada para a estrategia : {{ $cofluence->strategy->name }}</th>
                        <th class="text-center" colspan="2">{{ $cofluence->side == 'sell' ? 'Vender' : 'Comprar' }}
                            </td>
                    </tr>
                    <tr class="text-center {{ $cofluence->side == 'sell' ? 'bg-danger' : 'bg-success' }}">
                        <th>Data / Hora</th>
                        <th>Descrição</th>
                        <th>Direção</th>
                        <th>Moeda</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($cofluence->signals as $signal)

                        <tr>
                            <td class="text-center">
                                {{ Carbon\Carbon::create($signal['created_at'])->format('d/m/Y H:i:s') }}</td>
                            <td>{{ $signal['text'] }}</td>
                            <td class="text-center">{{ $signal['side'] }}</td>
                            <td class="text-center">{{ $signal['symbol'] }}</td>
                            {{-- <td>@dump($signal['status'])</td> --}}
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endforeach

    </div>
</body>

</html>
