@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fas fa-clock"></i> | Tempo de Validação</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['url' => route('admin.validationtimes.store'), 'files' => true]) !!}

            @include("admin.cruds.validationtimes._form")

            {!! Form::close() !!}
        </div>
    </div>
@stop
