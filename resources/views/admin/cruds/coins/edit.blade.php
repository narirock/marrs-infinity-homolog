@extends(Config::get('marrs-admin.template.admin'))
@section('title')
    <h1><i class="fas fa-donate"></i> | Moeda</h1>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($coin, ['url' => route('admin.coins.update', $coin->id), 'files' => true, 'method' => 'PUT']) !!}

            @include("admin.cruds.coins._form")

            {!! Form::close() !!}
        </div>
    </div>
@stop
