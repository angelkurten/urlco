<html>
    <head>
        <link rel="stylesheet" href="{!! asset('dash/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('dash/css/main.css') !!}">
        <link rel="stylesheet" href="{!! asset('dash/css/plugins.css') !!}">
        <link rel="stylesheet" href="{!! asset('dash/css/themes.css') !!}">
        <style>
            body{
                padding-bottom: 0 !important;
                background-color: white;
            }
        </style>
    </head>
    <body style="height: 370px;">
    <!-- Advanced Active Theme Color Widget Alternative -->
    <div class="widget" style="height: 100%">
        <div class="widget-advanced widget-advanced-alt">
            <!-- Widget Header -->
            <div class="widget-header text-center themed-background-dark">
                <a target="_blank" href="{!! route('profile', $user->slug) !!}">
                    <img src="{{ $user->avatar }}" alt="avatar" class="widget-image img-circle">
                </a>
                <h4 class="widget-content-light">
                    <a href="{!! route('profile', $user->slug) !!}">{{ $user->name }}</a><br>
                    <small><a href="{!! route('profile', $user->slug) !!}"><i class="fa fa-twitter"></i></a></small>
                </h4>
            </div>
            <!-- END Widget Header -->

            <!-- Widget Main -->
            <div class="widget-main">
                <div class="list-group remove-margin" id="urls">
                    @foreach($urls as $url)
                        <a target='_blank' href='{{ $url->url }}' class='list-group-item'>
                            <span class='pull-right'>
                                <strong>
                                    <i class='fa fa-arrow-right'></i>
                                </strong>
                            </span>
                            <h4 class='list-group-item-heading remove-margin'>
                                <i class='fa fa-link fa-fw'></i> {{ $url->name }}
                            </h4>
                        </a>
                    @endforeach
                </div>
            </div>
            <!-- END Widget Main -->
        </div>
    </div>
    <!-- END Advanced Active Theme Color Widget Alternative -->

    <script src="{!! asset('server/jquery-1.11.2.min.js') !!}"></script>
    <script src="{!! asset('server/jquery-migrate-1.2.1.min.js') !!}"></script>
    <script src="{!! asset('server/socket.io-1.3.4.js') !!}"></script>
    <script>
        var socket = io.connect('http://192.168.10.10:8890');
        socket.on('live.feed', function (data) {
            data = JSON.parse(data);
            var user_id = {{ $user->id }};

            if( user_id == data.user_id){
                $( "#urls" ).prepend(
                    "<a target='_blank' href='"+ data.url +"' class='list-group-item'> <span class='pull-right'><strong> <i class='fa fa-arrow-right'></i> </strong></span> <h4 class='list-group-item-heading remove-margin'><i class='fa fa-link fa-fw'></i> "+ data.name +"</h4> </a>"
                );
            }
        });
    </script>
    </body>
</html>