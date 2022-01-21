@include("marrs-admin::partials._error")
<div class="row">
    <div class="col col-sm-3">
        <div class="form-group">
            {!! Form::label('name', 'Nome da estratégia') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
        </div>
    </div>
    <div class="col col-sm-3">
        <div class="form-group">
            {!! Form::label('minutes', 'Minutos') !!}
            {!! Form::text('minutes', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
        </div>
    </div>
    <div class="col col-sm-3">
        <div class="form-group">
            {!! Form::label('symbol', 'Moeda') !!}
            {!! Form::select('symbol', $coins, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col col-sm-3">
        <div class="form-group">
            {!! Form::label('signals', 'Quantidade de sinais') !!}
            {!! Form::number('signals', null, ['class' => 'form-control', 'min' => '1']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-sm-3">
        @foreach ($signal_types as $signal_type)
            <div class="form-group">
                {!! Form::label('signal_type_' . $signal_type->id, $signal_type->name) !!}
                {!! Form::checkbox('signal_type_' . $signal_type->name, null, ['class' => 'form-control']) !!}
            </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col col-sm-3">
        <div class="form-group">
            {!! Form::label('signal_types', 'Tipos de Sinal') !!}
            {!! Form::text('signal_types', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<div>
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.strategies.index') }}" class="btn btn-danger">Fechar</a>
</div>
