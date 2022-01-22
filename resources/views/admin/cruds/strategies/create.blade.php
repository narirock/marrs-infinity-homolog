@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fas fa-chess"></i> | Estratégia</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['url' => route('admin.strategies.store'), 'files' => true]) !!}

            @include("admin.cruds.strategies._form")

            {!! Form::close() !!}
        </div>
    </div>
@stop
