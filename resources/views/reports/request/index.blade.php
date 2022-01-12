<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 5px;
            border-collapse: collapse;
            border: 1px solid black;
        }

    </style>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th>Recebido</th>
                    <th>Name</th>
                    <th>Sinal</th>
                    <th>Operação</th>
                    <th>Moeda</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($signals as $signal)
                    <tr>
                        <td class='text-center'>{{ $signal->created_at->format('d/m/Y H:i') }}</td>
                        <td class='text-center'>{{ $signal->name }}</td>
                        <td class='text-center'>{{ $signal->sinal }}</td>
                        <td class='text-center'>{{ $signal->side }}</td>
                        <td class='text-center'>{{ $signal->symbol }}</td>
                        <td>{{ $signal->text }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col col-sm-12">{{ $signals->links() }}</div>
        </div>

    </div>
</body>

</html>
