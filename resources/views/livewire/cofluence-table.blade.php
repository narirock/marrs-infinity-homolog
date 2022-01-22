<div>
    <div class="container text-center" wire:loading>
        <i class="fas fa-spinner fa-spin"></i> carregando...
    </div>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>Data / Hora</th>
                <th>Moeda</th>
                <th>Estratégia</th>
                <th>Operação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cofluences as $cofluence)
                <tr class="text-center">
                    <td>{{ $cofluence->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $cofluence->symbol }}</td>
                    <td>{{ $cofluence->strategy->name }}</td>
                    <td>{!! $cofluence->side == 'sell' ? '<i class="fas fa-caret-down text-danger" style="font-size:30px"></i>' : '<i class="fas fa-caret-up text-success mw-100" style="font-size:30px"></i>' !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
