@include("marrs-admin::partials._error")

<div class="row">
    <div class="col col-sm-4">
        <div class="form-group">
            {!! Form::label('minutes', 'Minutos') !!}
            {!! Form::text('minutes', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
        </div>
    </div>
    <div class="col col-sm-8">
        <div class="form-group">
            {!! Form::label('description', 'Descrição') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Link']) !!}
        </div>
    </div>

</div>


<div>
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.validationtimes.index') }}" class="btn btn-danger">Fechar</a>
</div>
