@extends(Config::get('marrs-admin.template.admin'))

@section('title')
    <h1><i class="fas fa-tags"></i> | Dashboard</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <div id="tradingview"></div>
            <ul id="messages"></ul>


            @livewire('cofluence-table')
        </div>
    </div>
@endsection

@push('scripts')

    <script src="https://cdn.socket.io/4.4.1/socket.io.min.js"
        integrity="sha384-fKnu0iswBIqkjxrhQCTZ7qlLHOFEgNkRmK2vaO/LbTZSXdJfAu6ewRBdwHPhBo/H" crossorigin="anonymous">
    </script>
    <script>
        var socket = io.connect("ws://{{ env('SOCKET_IO') }}");
        var messages = document.getElementById('messages');
        var form = document.getElementById('form');
        var input = document.getElementById('input');

        /*form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (input.value) {
                socket.emit('chat message', input.value);
                input.value = '';
            }
        });*/

        socket.on('triggerAction', function(signal, color) {
            alert(signal);
            document.body.style.backgroundColor = color;
            var item = document.createElement('li');
            item.textContent = signal;
            messages.appendChild(item);
            window.scrollTo(0, document.body.scrollHeight);
        });
    </script>
@endpush

@push('scripts')
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
        new TradingView.widget({
            "autosize": true,
            "symbol": "BITSTAMP:BTCUSD",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "Light",
            "style": "1",
            "locale": "ptBR",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "allow_symbol_change": true,
            "hideideas": true,
            "container_id": "tradingview"
        });
    </script>
@endpush
