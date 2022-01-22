@extends(Config::get('marrs-admin.template.admin'))
@section('title')
    <h1><i class="fas fa-traffic-light"></i> | Tipos de Sinal</h1>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($signaltype, ['url' => route('admin.signaltypes.update', $signaltype->id), 'files' => true, 'method' => 'PUT']) !!}

            @include("admin.cruds.signaltypes._form")

            {!! Form::close() !!}
        </div>
    </div>
@stop
