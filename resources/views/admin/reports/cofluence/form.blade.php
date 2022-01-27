@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fa fa-print"></i> | Cofluências</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['url' => route('admin.reports.cofluence.report'), 'files' => true, 'target' => '_blank', 'method' => 'GET']) !!}

            <div class="row">
                <div class="col col-sm-3">
                    {!! Form::label('start', 'Data Inicial') !!}
                    {!! Form::input('dateTime-local', 'start', null, ['class' => 'form-control']) !!}
                </div>
                <div class="col col-sm-3">
                    {!! Form::label('end', 'Data Inicial') !!}
                    {!! Form::input('dateTime-local', 'end', null, ['class' => 'form-control']) !!}
                </div>
                <div class="col col-sm-3">
                    {!! Form::label('strategy_id', 'Estratégia') !!}
                    {!! Form::select('strategy_id', $strategies, null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col col-sm-12">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Cancelar</a>
                    <button class="btn btn-success">Gerar</button>

                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
