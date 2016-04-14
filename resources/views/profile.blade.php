@extends('layouts.app')

@section('content')
<!-- User Profile Header -->
<!-- For an image header add the class 'content-header-media' and an image as in the following example -->
<div class="content-header content-header-media">
    <div class="header-section">
        <img src="{!! $user->avatar !!}" alt="Avatar" class="pull-right img-circle">
        <h1>
            {{ $user->name }}
            <br>
            <small><a target="_blank" href="http://twitter.com/{{ $user->username }}"> <i class="fa fa-twitter"></i> </a></small>
        </h1>
    </div>
    <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
    <img src="{!! asset('/dash/img/placeholders/headers/profile_header.jpg') !!}" alt="header image" class="animation-pulseSlow">
</div>
<!-- END User Profile Header -->

<!-- User Profile Content -->
<div class="row">
    <!-- First Column -->
    <div class="col-md-6 col-lg-7">
        <!-- Newsfeed Block -->
        <div class="block">
        @include('layouts.timeline')
        <!-- END Newsfeed Content -->
        </div>
    <!-- END Newsfeed Block -->
    </div>
    <!-- END First Column -->

    <!-- Second Column -->
    <div class="col-md-6 col-lg-5">
        <!-- Info Block -->
        <div class="block">
            <!-- Info Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <!--<a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Solicitud Amistad"><i class="fa fa-plus"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Contratame!"><i class="fa fa-briefcase"></i></a>-->
                </div>
                <h2><strong>{{ $user->name }}</strong> <small>&bull; </small></h2>
            </div>
            <!-- END Info Title -->

            <!-- Info Content -->
            <table class="table table-borderless table-striped">
                <tbody>
                    <iframe src="http://url.app/live/{{$user->id}}" width="100%" height="390px" frameborder="0"></iframe>
                </tbody>
            </table>
            <!-- END Info Content -->
        </div>
    </div>
<!-- END Second Column -->
</div>
<!-- END User Profile Content -->
@stop