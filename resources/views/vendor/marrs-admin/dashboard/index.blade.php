@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fas fa-tags"></i> | Dashboard</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('cofluence-table')
        </div>
    </div>
@endsection
