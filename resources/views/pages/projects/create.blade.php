{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')

@push('styles')
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endpush

<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">Crea nuovo progetto</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                {{-- <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span> --}}
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{ route('salva.progetto') }}">
        @csrf

        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Titolo:</label>
                            <input type="text" class="form-control" placeholder="inserisci titolo" id="titolo" name="titolo">
                            <span class="form-text text-muted"> </span>
                        </div>
                        <div class="col-lg-6">
                            <label>Slug:</label>
                            <input type="text" class="form-control" placeholder="inserisci slug" id="slug" name="slug">
                        </div>
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <label>Descrizione:</label>
                        <textarea type="text" class="form-control" id="descrizione" placeholder="inserisci descrizione" name="descrizione" ></textarea>
                        <span class="form-text text-muted"> </span>
                    </div>
                    <div class="form-group">
                        <label>Testo:</label>
                        <textarea type="text" class="form-control" id="testo" placeholder="inserisci testo" name="testo"></textarea>
                        <span class="form-text text-muted"> </span>
                    </div>
                    <div class="form-group"> <label>Immagine:</label><br>
                        <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                            <div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Inserisci immagine">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="immagine" accept=".png, .jpg, .jpeg" />

                            </label>

                        </div>
                        <span class="form-text text-muted">Tipi di file permessi: png, jpg, jpeg.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group row">
                        <div class="col-lg-6 col-sm-12">
                            <label>Pubblicato:</label><br>
                            <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                                <option value="si">si</option>
                                <option value="no">no</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label>In Evidenza:</label><br>
                            <select class="form-control kt-select2 select2" id="kt_select2_2" name="evidenza">
                                <option value="si">si</option>
                                <option value="no">no</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Meta Titolo:</label>
                        <input type="text" class="form-control" placeholder="inserisci meta titolo" name="meta_titolo">
                        <span class="form-text text-muted"> </span>
                    </div>
                    <div class="form-group">
                        <label>Meta Descrizione:</label>
                        <input type="text" class="form-control" placeholder="inserisci meta descrizione" name="meta_descrizione">
                        <span class="form-text text-muted"> </span>
                    </div>
                    <div class="form-group">
                        <label>Keywords:</label>
                        <input type="text" class="form-control" placeholder="inserisci meta descrizione" name="keywords">
                        <span class="form-text text-muted"> </span>
                    </div>
                    {{-- <div class="form-group">

                    </div> --}}
                </div>
                <div class="col-lg-2">
                    <div class="form-group">

                            <label class="col-form-label">Categorie:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                    <input type="checkbox">Default
                                    <span></span>
                                </label>

                                </div>

                    </div>
                </div>
            </div>



        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6 text-right">
                    {{-- <button type="reset" class="btn btn-danger">Delete</button> --}}
                    <button type="submit" class="btn btn-primary mr-2">Salva</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
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
    $(document).ready(function() {
        $('.select2').select2();
        $('#descrizione').summernote();
        $('#testo').summernote();

    });





</script>
<script>

function convertToSlug(Text)
{
    return Text
        .toLowerCase()
        .replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-')
        ;
}

$("#titolo").keyup(function(){
    var Text = $(this).val();
    var Text = convertToSlug(Text);

    $("#slug").val(Text);
});
  </script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
