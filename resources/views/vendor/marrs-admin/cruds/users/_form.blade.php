@include("marrs-admin::partials._error")
<div class="row">
    <div class="col col-sm-8">
        <div class="form-group">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
        </div>
    </div>
    <div class="col col-sm-4">
        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', Config::get('marrs-admin.user_types'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('email', 'e-mail') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Senha (somente se necessario alterar)') !!}
    {!! Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Senha']) !!}
</div>

<div>
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.users.index') }}" class="btn btn-danger">Fechar</a>
</div>
