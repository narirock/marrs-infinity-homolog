@include("marrs-admin::partials._error")

<div class="row">
    <div class="col col-sm-4">
        <div class="form-group">
            {!! Form::label('code', 'Codigo') !!}
            {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Codigo']) !!}
        </div>
    </div>
    <div class="col col-sm-8">
        <div class="form-group">
            {!! Form::label('description', 'Descrição') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição']) !!}
        </div>
    </div>

</div>


<div>
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.coins.index') }}" class="btn btn-danger">Fechar</a>
</div>
