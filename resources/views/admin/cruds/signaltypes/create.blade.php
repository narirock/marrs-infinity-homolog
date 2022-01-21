@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fas fa-traffic-light"></i> | Tipos de Sinal</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['url' => route('admin.signaltypes.store'), 'files' => true]) !!}

            @include("admin.cruds.signaltypes._form")

            {!! Form::close() !!}
        </div>
    </div>
@stop
