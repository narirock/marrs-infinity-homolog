@extends(Config::get('marrs-admin.template.admin'))
@section('title')
    <h1><i class="fas fa-chess"></i> | Estrategia</h1>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($strategy, ['url' => route('admin.strategies.update', $strategy->id), 'files' => true, 'method' => 'PUT']) !!}

            @include("admin.cruds.strategies._form")

            {!! Form::close() !!}
        </div>
    </div>
@stop
