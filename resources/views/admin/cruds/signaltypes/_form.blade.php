@include("marrs-admin::partials._error")

<div class="row">
    <div class="col col-sm-4">
        <div class="form-group">
            {!! Form::label('name', 'Codigo') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
        </div>
    </div>

</div>


<div>
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.signaltypes.index') }}" class="btn btn-danger">Fechar</a>
</div>
