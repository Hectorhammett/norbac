@extends('layout')

@section('title','Galería')

@section('modal')
    <div class="modal fade" id="modal-gallery" tabindex="-1" role="dialog">
        <div class="modal-dialog" id="modal-gallery-content" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <img class="img-responsive" id="image-modal" />
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('mainContent')
    <div class="row galery-row">
        <div class="col-sm-3">
            <img class="img-responsive img-gallery" data-size="large" src="{{ asset('img/bg/bg1.jpg') }}">
        </div>
        <div class="col-sm-3">
            <img class="img-responsive img-gallery" data-size="large" src="{{ asset('img/bg/bg2.jpg') }}">
        </div>
        <div class="col-sm-3">
            <img class="img-responsive img-gallery" data-size="large" src="{{ asset('img/img1.jpg') }}">
        </div>
        <div class="col-sm-3">
            <img class="img-responsive img-gallery" data-size="large" src="{{ asset('img/img2.jpg') }}">
        </div>
    </div>
     <div class="row galery-row">
        <div class="col-sm-3">
            <img class="img-responsive img-gallery" data-size="large" src="{{ asset('img/img6.jpg') }}">
        </div>
        <div class="col-sm-3">
            <img class="img-responsive img-gallery" data-size="medium" src="{{ asset('img/img3.jpg') }}">
        </div>
        <div class="col-sm-3">
            <img class="img-responsive img-gallery" data-size="medium" src="{{ asset('img/img4.jpg') }}">
        </div>
        <div class="col-sm-3">
            <img class="img-responsive img-gallery" data-size="medium" src="{{ asset('img/img5.jpg') }}">
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{ asset('js/galeria.js') }}"></script>
@endsection