{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')



<!--begin::Card-->
<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-start flex-column">
            <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
            <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
        </div>
        <div class="card-toolbar">
            {{-- <button type="reset" class="btn btn-success mr-2">Save Changes</button>
            <button type="reset" class="btn btn-secondary">Cancel</button> --}}
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->


    <form method="POST" action="{{ route('salva.progetto') }}">
        @csrf
        <div class="col-lg-12">

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
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Descrizione:</label>
                <textarea  class="form-control" id="descrizione" name="descrizione" ></textarea>
                <span class="form-text text-muted"> </span>
            </div>
            <div class="form-group">
                <label>Testo:</label>
                <textarea  class="form-control" id="testo"  name="testo"></textarea>
                <span class="form-text text-muted"> </span>
            </div>
        </div>
        <div class="col-lg-12">

            <div class="form-group row">
                <div class="col-lg-6 ">
                        <div class="form-group">
                    <label>Categoria:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_3" id="categoria" name="categoria">
                        <option value="">Seleziona una categoria</option>
                        {{-- @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->titolo}}</option>
                        @endforeach --}}
                    </select>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="form-group">
                    <label>Sottocategoria:</label>

                    <select class="form-control kt-select2 select2" id="kt_select2_4" id="sottocategorie" name="sottocategoria">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Meta Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci meta titolo" name="meta_titolo">
                    <span class="form-text text-muted"> </span>
                </div>
                <div class="col-lg-6">
                <label>Meta Descrizione:</label>
                <input type="text" class="form-control" placeholder="inserisci meta descrizione" name="meta_descrizione">
                <span class="form-text text-muted"> </span>
                </div>
            </div>
            <div class="form-group">
                <label>Keywords:</label>
                <input type="text" class="form-control" placeholder="inserisci meta descrizione" name="keywords">
                <span class="form-text text-muted"> </span>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group " >
                    <label>Carica immagine:</label><br>

                <div class="image-input image-input-outline" id="kt_image_4" style="background-image: url(assets/media/users/blank.png)">
                    <div class="image-input-wrapper immagine-post" style=""></div>

                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Carica foto">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                    <input type="hidden" name="profile_avatar_remove"/>
                    </label>

                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                    </span>

                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Rimuovi">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                    </span>
                </div>

            </div>
        </div>

        <div class="col-lg-12">

            <div class="form-group row">
                <label class="col-3 col-form-label">Pubblicato</label>
                <div class="col-3">
                    <span class="switch switch-outline switch-icon switch-success">
                        <label>
                            <input type="checkbox" checked="checked" name="pubblicato">
                            <span></span>
                        </label>
                    </span>
                </div>
                <label class="col-3 col-form-label">In Evidenza:</label>
                <div class="col-3">
                    <span class="switch switch-outline switch-icon switch-warning">
                        <label>
                            <input type="checkbox" checked="checked" name="evidenza">
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6 text-right">
                    <button type="button"  class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary mr-2">Salva</button>
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
        $('#testo').summernote({
            placeholder: 'Inserisci testo',
            tabsize: 2,
            height: 250
        });
        $('#descrizione').summernote({
            placeholder: 'Inserisci descrizione',
            tabsize: 2,
            height: 150
        });
    });
</script>
<script>
    var avatar4 = new KTImageInput('kt_image_4');

    // avatar4.on('cancel', function(imageInput) {
            // swal.fire({
            // title: 'Immagine inserita con successo!',
            // type: 'success',
            // buttonsStyling: false,
            // confirmButtonText: 'Awesome!',
            // confirmButtonClass: 'btn btn-primary font-weight-bold'
            // });
            // });

            // avatar4.on('change', function(imageInput) {
                // swal.fire({
                    // title: 'Immagine sostituita con successo!',
                    // type: 'success',
                    // buttonsStyling: false,
                    // confirmButtonText: 'Awesome!',
                    // confirmButtonClass: 'btn btn-primary font-weight-bold'
                    // });
                    // });

                    // avatar4.on('remove', function(imageInput) {
                        // swal.fire({
                            // title: 'Immagine rimossa!',
                            // type: 'error',
                            // buttonsStyling: false,
                            // confirmButtonText: 'Got it!',
                            // confirmButtonClass: 'btn btn-primary font-weight-bold'
                            // });
            // });


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
<script>
    function getResults(str) {
      $.ajax({
            url:'{{route('query.progetto')}}',
            type:'POST',
            data: 'q=' + str,
            dataType: 'json',
            success: function( json ) {
                $('#sottocategorie').append(json);

            }
        });
        console.log(str);
    };


        $( '#sottocategorie' ).keyup( function() {
            getResults( $( this ).val() );
        } );
</script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
