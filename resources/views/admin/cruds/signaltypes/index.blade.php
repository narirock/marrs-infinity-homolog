@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fas fa-traffic-light"></i> | Tipos de Sinal</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table form-table table-main data-table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th width="150" class="text-center">
                            <a href="{{ route('admin.signaltypes.create') }}" class="btn btn-success  btn-sm">Novo</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($signalTypes as $type)
                        <tr>
                            <td>{{ $type->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.signaltypes.edit', $type->id) }}"
                                    class="btn btn-info btn-sm">Editar</a>
                                <a href="#" data-toggle="modal" data-target="#confirm-delete-{{ $type->id }}"
                                    class="btn btn-danger  btn-sm">Excluir</a>
                                @push('modals')
                                    <form action="{{ route('admin.signaltypes.destroy', $type->id) }}" method="post">
                                        <input type="hidden" name="_method" value="delete" />
                                        {!! csrf_field() !!}
                                        <div class="modal fade" id="confirm-delete-{{ $type->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">Atenção</div>
                                                    <div class="modal-body">Deseja remover o menú {{ $type->name }} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Não</button>
                                                        <input href="{{ route('admin.signaltypes.destroy', $type->id) }}"
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
