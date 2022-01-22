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
    <div class="col col-sm-12">
        <h4>Sinais exigidos</h4>
        @foreach ($signal_types as $signal_type)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="signal_types[]" value="{{ $signal_type->name }}"
                    {{ in_array($signal_type->name, json_decode($strategy->signal_types ?? '[]')) ? 'checked' : '' }}>
                <label class="form-check-label">
                    {{ $signal_type->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
<hr>
{{-- <div class="row">
    <div class="col col-sm-3">
        <div class="form-group">
            {!! Form::label('signal_types', 'Tipos de Sinal') !!}
            {!! Form::text('signal_types', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}


<div>
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.strategies.index') }}" class="btn btn-danger">Fechar</a>
</div>
