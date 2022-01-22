@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fas fa-chess"></i> | Estratégias</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table form-table table-main data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Periodo</th>
                        <th>Moeda</th>
                        <th>Sinais</th>
                        <th>Tipos Exigidos</th>
                        <th width="150" class="text-center">
                            <a href="{{ route('admin.strategies.create') }}" class="btn btn-success  btn-sm">Novo</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($strategies as $strategy)
                        <tr>
                            <td>{{ $strategy->name }}</td>
                            <td class="text-center">{{ $strategy->minutes }}</td>
                            <td class="text-center">{{ $strategy->symbol }}</td>
                            <td class="text-center">{{ $strategy->signals }}</td>
                            <td class="text-center">{{ $strategy->signal_types }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.strategies.edit', $strategy->id) }}"
                                    class="btn btn-info btn-sm">Editar</a>
                                <a href="#" data-toggle="modal" data-target="#confirm-delete-{{ $strategy->id }}"
                                    class="btn btn-danger  btn-sm">Excluir</a>
                                @push('modals')
                                    <form action="{{ route('admin.strategies.destroy', $strategy->id) }}" method="post">
                                        <input type="hidden" name="_method" value="delete" />
                                        {!! csrf_field() !!}
                                        <div class="modal fade" id="confirm-delete-{{ $strategy->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">Atenção</div>
                                                    <div class="modal-body">Deseja remover o menú
                                                        {{ $strategy->name }} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Não</button>
                                                        <input href="{{ route('admin.strategies.destroy', $strategy->id) }}"
                                                            class="btn btn-danger" type="submit" value="Sim" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endpush
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
