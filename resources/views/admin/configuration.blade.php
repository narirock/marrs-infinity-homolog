@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fas fa-cogs"></i> | Configurações</h1>
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">

            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif



    {!! Form::open(['route' => 'admin.configurations.store', 'method' => 'post']) !!}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col col-sm-3">
                    <label for="validationtime">Tempo de Validação</label>
                    <select name="validationtime" id="validationtime" class="form-control">
                        @foreach ($validationtimes as $validationtime)
                            <option value="{{ $validationtime->minutes }}"
                                {{ $validationtime->id == @$configurations['validationtime'] ? 'selected' : '' }}>
                                {{ $validationtime->description }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
    </div>


    {!! Form::close() !!}
@endsection
