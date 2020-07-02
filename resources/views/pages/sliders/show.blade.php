{{-- Extends layout --}}
@extends('layout.default')

@push('styles')
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
{{-- Content --}}
@section('content')



<div class="card card-custom gutter-b">
    <div class="card-header">
        <h3 class="card-title">Visualizza slider</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                {{-- <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span> --}}
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-8">
                    <label>Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci titolo"  value="{{$slider->titolo}}" name="titolo" required>
                    <span class="form-text text-muted"> </span>
                </div>

                <div class="col-lg-4">
                    <label>Pubblicato:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                        <option value="on">si</option>
                        <option value="">no</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Sottotitolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci Sottotitolo"  value="{{$slider->sottotitolo}}" name="Sottotitolo">

                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group ">
                    <label>Carica immagine:</label><br>

                    <div class="image-input image-input-outline" id="kt_image_4"
                        style="background-image: url({{url('/storage/'.$slider->immagine)}})">
                        <div class="image-input-wrapper immagine-post" style=""></div>

                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="change" data-toggle="tooltip" title="" data-original-title="Carica foto">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="immagine" accept=".png, .jpg, .jpeg"
                                value="{{$slider->immagine}}" />
                            <input type="hidden" name="profile_avatar_remove" />
                        </label>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="cancel" data-toggle="tooltip" title="Cancel">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="remove" data-toggle="tooltip" title="Rimuovi">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>

                </div>
            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6 text-right">
                    <a href="{{route('slider.index')}}" type="button" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>




@endsection

{{-- Styles Section --}}
@section('styles')

@endsection


{{-- Scripts Section --}}
@section('scripts')
<script>
       var avatar4 = new KTImageInput('kt_image_4');
    $(document).ready(function() {
        $('.select2').select2();
        $('#MenuSitoWeb').addClass("menu-item-open");
        $('#MenuSlider').addClass("menu-item-open menu-item-here");
    });
</script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
