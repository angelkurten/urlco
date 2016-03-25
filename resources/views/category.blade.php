@extends('layouts.app')

@section('content')
<!-- Timeline Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-rss"></i> Categoria: {{ $category->name }}
            <br>
            <small>Todos los enlaces publicos guardados en la categoria {{ $category->name }}!</small>
        </h1>
    </div>
</div>
<!-- END Timeline Header -->

<!-- Timeline Content Row -->
<div class="row">
    <div class="col-sm-12">
        <!-- Feed Style Block -->
        <div class="block">

            @include('layouts.timeline')

        </div>
        <!-- END Feed Style Block -->
    </div>
</div>
<!-- END Timeline Content Row -->
@endsection


@section('scripts')

<script>
    $(document).ready(function() {
        $('#new_folder').click(function () {
            if($('#new_folder').is(':checked')){
                $('#nfd').fadeIn(500);
            } else {
                $('#nfd').fadeOut(500);
            }
        });
    });
</script>

<script src="{!! asset('dash/js/pages/formsValidation.js') !!}"></script>
<script>$(function(){ FormsValidation.init(); });</script>

<script src="{!! asset('dash/js/jquery.jscroll.min.js') !!}"></script>


@endsection