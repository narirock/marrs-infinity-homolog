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
                    <th>Dados</th>
                    <th>Headers</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataIns as $data)
                    <tr>
                        <td>@dump(json_decode($data->data))</td>
                        <td>@dump(json_decode($data->header))</td>
                        <td class='text-center'>{{ $data->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col col-sm-12">{{ $dataIns->links() }}</div>
        </div>

    </div>
</body>

</html>
