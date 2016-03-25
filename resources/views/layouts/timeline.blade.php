<!-- Feed Style Title -->
<div class="block-title">
    <div class="block-options pull-right">
        <a class="btn btn-sm btn-alt btn-default" href="#modal-url-add" data-toggle="modal" title="Agregar URL"><i class="fa fa-plus"></i></a>
    </div>
    <h2><strong>Feed</strong></h2>
</div>
<!-- END Feed Style Title -->

<!-- Feed Style Content -->
<div class="block-content-full">
    <!-- You can remove the class .media-feed-hover if you don't want each event to be highlighted on mouse hover -->
    <div class="scroll">
        <ul class="media-list media-feed media-feed-hover">
            @foreach($urls as $url)
                <li class="media @if($url->status == false) danger @endif" >
                    <a href="{!! route('profile', $url->user->slug) !!}" class="pull-left">
                        <img src="{{ $url->user->avatar }}" width="50px" height="50px" alt="Avatar" class="img-circle">
                    </a>
                    <div class="media-body">
                        <p class="push-bit">
                            <span class="text-muted pull-right">
                                <small>{{ $url->create_date  }}</small>
                                <span class="text-danger" data-toggle="tooltip" title="Privacidad"><i class="{{ $url->icon }}"></i></span>
                            </span>
                            <strong><a href="{!! route('profile', $url->user->slug) !!}">{{ $url->user->name }}</a> ha guardado un nuevo enlace.</strong>
                            @foreach($url->folders as $folder)
                                <a href="{!! route('folder', $folder->slug) !!}" class="btn btn-xs btn-success"><i class="fa fa-folder"></i> {{ $folder->name }}</a>
                            @endforeach
                            @foreach($url->categories as $category)
                                <a href="{!! route('category', $category->slug) !!}" class="btn btn-xs btn-danger"><i class="fa fa-tag"></i> {{ $category->name }}</a>
                            @endforeach

                            @if($url->status == false)
                                |
                                <button class="btn btn-xs btn-warning animation-pulse" data-toggle="tooltip" title="Reportar enlace">No disponible</button>
                            @endif

                        </p>
                        <h5><a href="{{ $url->url }}" target="_blank"><strong>{{ $url->name }}</strong> &bull; {{ $url->url }}</a></h5>
                        <p>{{ $url->description }}</p>
                        <!--<p>
                            <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-thumbs-up"></i> You Like it</a>
                            <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                        </p>-->
                    </div>
                </li>
            @endforeach

            <li class="media text-center">
                {{ $urls->render() }}
            </li>
            <!-- END Status Updated -->
        </ul>
    </div>
</div>
<!-- END Feed Style Content -->
