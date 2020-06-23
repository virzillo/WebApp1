{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')

@push('styles')
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
@endpush

<div class="card card-custom gutter-b ">
    <div class="card-header">
        <h3 class="card-title">Crea nuovo progetto</h3>
        <div class="card-toolbar">

            <form method="POST" action="{{ route('salva.progetto') }}">
                @csrf
                <button type="submit" class="btn btn-primary mr-2">Salva</button>


        </div>
    </div>
    <!--begin::Form-->

<div class="card-body">

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
                <div class="col-lg-4 ">
                        <div class="form-group">
                    <label>Categoria:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_3"  name="categoria">
                        <option value="">Seleziona una categoria</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->titolo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="form-group">
                    <label>Sottocategoria:</label>

                    <select class="form-control kt-select2 select2" id="kt_select2_4" name="sottocategoria">
                        <option selected="true" disabled>Scegli sottocategoria</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Servizi:</label>

                    <select class="form-control kt-select2 select2" id="kt_select2_5" name="servizi" >
                        <option selected="true" disabled>Scegli servizi</option>
                        @foreach ($services as $service)
                        <option value="{{$service->id}}">{{$service->titolo}}</option>
                        @endforeach
                    </select>
                </div>
        </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Meta Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci meta titolo" maxlength="70" id="meta_titolo" name="meta_titolo">
                    <span class="form-text text-muted" id="meta_titolo_messaggio" > Max 70 caratteri</span>
                </div>
                <div class="col-lg-6">
                <label>Meta Descrizione:</label>
                <input type="text" class="form-control" placeholder="inserisci meta descrizione" maxlength="160" id="meta_descrizione" name="meta_descrizione">
                <span class="form-text text-muted" id="meta_descrizione_messaggio"> Max 160 caratteri </span>
                </div>
            </div>
            <div class="form-group">
                <label>Keywords:</label>
                <input id="kt_tagify_1" class="form-control tagify" name='keywords' placeholder="scrivi..." value=""  data-blacklist='.NET,PHP'/>

                <div class="mt-3">
                    <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">Rimuovi tags</a>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group " >
                    <label>Carica immagine:</label><br>

                <div class="image-input image-input-outline" id="kt_image_4" style="background-image: url(assets/media/users/blank.png)">
                    <div class="image-input-wrapper immagine-post" style=""></div>

                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Carica foto">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="immagine" accept=".png, .jpg, .jpeg"/>
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


// Class definition
var KTTagify = function() {

// Private functions
var demo1 = function() {
    var input = document.getElementById('kt_tagify_1'),
        // init Tagify script on the above inputs
        tagify = new Tagify(input, {
            whitelist: [],
            blacklist: [".NET", "PHP"], // &lt;-- passed as an attribute in this demo
            // transformTag: transformTag,
            // dropdown: {
            //     enabled: 3,
            // }
        })

        // function transformTag(tagData) {
        //     var states = [
        //         'success',
        //         'primary',
        //         'danger',
        //         'success',
        //         'warning',
        //         'dark',
        //         'primary',
        //         'info'];

        //     tagData.class = 'tagify__tag tagify__tag--' + states[KTUtil.getRandomInt(0, 7)];

        //     if (tagData.value.toLowerCase() == 'shit') {
        //         tagData.value = 's✲✲t'
        //     }
        // }
    // "remove all tags" button event listener
    document.getElementById('kt_tagify_1_remove').addEventListener('click', tagify.removeAllTags.bind(tagify))

    // Chainable event listeners
    tagify.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit', onTagEdit)
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)

    // tag added callback
    function onAddTag(e) {
        console.log("onAddTag: ", e.detail);
        console.log("original input value: ", input.value)
        tagify.off('add', onAddTag) // exmaple of removing a custom Tagify event
    }

    // tag remvoed callback
    function onRemoveTag(e) {
        console.log(e.detail);
        console.log("tagify instance value:", tagify.value)
    }

    // on character(s) added/removed (user is typing/deleting)
    function onInput(e) {
        console.log(e.detail);
        console.log("onInput: ", e.detail);
    }

    function onTagEdit(e) {
        console.log("onTagEdit: ", e.detail);
    }

    // invalid tag added callback
    function onInvalidTag(e) {
        console.log("onInvalidTag: ", e.detail);
    }

    // invalid tag added callback
    function onTagClick(e) {
        console.log(e.detail);
        console.log("onTagClick: ", e.detail);
    }

    function onDropdownShow(e) {
        console.log("onDropdownShow: ", e.detail)
    }

    function onDropdownHide(e) {
        console.log("onDropdownHide: ", e.detail)
    }
}



return {
    // public functions
    init: function() {
        demo1();
    }
};
}();

jQuery(document).ready(function() {
KTTagify.init();
});

    //init select2 field e textarea toolbar
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
//script per generare lo slug
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

//invia la scelta della categoria ricevendo lista sottocategorie
    $('#kt_select2_3').on('change', function() {
        let dropdown = $('#kt_select2_4');
        dropdown.empty();
        dropdown.append('<option selected="true" disabled>Scegli sottocategoria</option>');
        dropdown.prop('selectedIndex', 0);
        var id=$( this ).val() ;
        $.ajax({
            url:'query/'+id,
            type:'POST',
            dataType:'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function( response ) {
                $.each(response, function (key, entry) {
                    dropdown.append($('<option>').attr('value', entry.id).text(entry.titolo));
                });
            }

        });
        });

</script>


<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection
