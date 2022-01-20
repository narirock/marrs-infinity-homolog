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

    <div id="snackbar">Some text some message..</div>
@endsection

@push('modals')

@endpush






@push('scripts')

    <script src="https://cdn.socket.io/4.4.1/socket.io.min.js"
        integrity="sha384-fKnu0iswBIqkjxrhQCTZ7qlLHOFEgNkRmK2vaO/LbTZSXdJfAu6ewRBdwHPhBo/H" crossorigin="anonymous">
    </script>
    <script>
        var socket = io.connect("wss://{{ env('SOCKET_IO') }}");
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
            var msg = "";
            Livewire.emit('reloadCofluences');

            var x = document.getElementById("snackbar");
            x.className = "show";
            $("#snackbar").css("background-color", color);

            if (color == 'green') {
                msg = "Comprar " + signal;
            } else {
                msg = "Vender " + signal;
            }
            x.innerHTML = msg;
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
            /*alert(signal);
            document.body.style.backgroundColor = color;
            var item = document.createElement('li');
            item.textContent = signal;
            messages.appendChild(item);
            window.scrollTo(0, document.body.scrollHeight);*/
        });
    </script>
@endpush

@push('scripts')
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
        new TradingView.widget({
            "symbol": "BITSTAMP:BTCUSD",
            "interval": "D",
            "symbol": "BITSTAMP:BTCUSD",
            "width": "100%",
            "height": 610,
            "timezone": "America/Sao_Paulo",
            "theme": "light",
            "style": "1",
            "locale": "br",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": true,
            "withdateranges": true,
            "range": "ALL",
            "hide_side_toolbar": false,
            "allow_symbol_change": true,
            "details": true,
            "hotlist": true,
            "calendar": true,
            "studies": [
                "MASimple@tv-basicstudies"
            ],
            "container_id": "tradingview"
        });
    </script>
@endpush


@push('styles')
    <style>
        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 9px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

    </style>
@endpush
