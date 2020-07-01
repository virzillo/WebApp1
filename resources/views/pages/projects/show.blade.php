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
        <h3 class="card-title">Visualizza impianto</h3>
        <div class="card-toolbar">

            <form method="POST" action="{{ route('modifica.progetto', $project->id) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-primary mr-2">Salva</button>


        </div>
    </div>
    <!--begin::Form-->

    <div class="card-body">

        <div class="col-lg-12">

            <div class="form-group row">
                <div class="col-lg-4">
                    <label>Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci titolo" id="titolo" name="titolo"
                        value="{{ $project->titolo }}">
                    <span class="form-text text-muted"> </span>
                </div>
                <div class="col-lg-4">
                    <label>Codice:</label>
                    <input type="text" class="form-control" placeholder="inserisci codice" id="codice" name="codice"
                        value="{{ $project->codice }}">
                    <span class="form-text text-muted"> </span>
                </div>
                <div class="col-lg-4">
                    <label>Slug:</label>
                    <input type="text" class="form-control" placeholder="inserisci slug" id="slug" name="slug"
                        value="{{ $project->slug }}">
                </div>

            </div>
        </div>
        <div class="col-lg-12">

            <div class="form-group row">
                <div class="col-lg-6 ">
                    <div class="form-group">
                        <label>Categoria:</label>
                        <select class="form-control kt-select2 select2" id="kt_select2_3" name="category_id">
                            <option value=""></option>
                            @foreach($categories as $category)
                                @if($project->category->parent_id==$category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->titolo }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->titolo }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="form-group">
                        <label>Sottocategoria:</label>

                        <select class="form-control kt-select2 select2" id="kt_select2_4" name="sottocategoria">
                            <option selected="true" disabled>Scegli sottocategoria</option>
                        </select>
                    </div>
                </div>
            </div>
            <?php $check='';?>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Servizi:</label>
                <div class="checkbox-inline">
                    @foreach($services as $service)
                        <label class="checkbox">
                            <label class="checkbox">
                                @foreach($project->service as $item)
                                    <?php $check='';?>

                                    @if($item->id===$service->id)
                                        <?php $check='checked';?>
                                        <?php break 1; ?>
                                    @endif
                                @endforeach

                                <input type="checkbox" name="servizi[]" value="{{ $service->id }}"
                                    {{ $check }}>{{ $service->titolo }}
                                <span></span>
                            </label>
                    @endforeach

                </div>
                <span class="form-text text-muted"></span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Indirizzo:</label>
                    <input type="text" class="form-control" placeholder="inserisci indirizzo" id="indirizzo"
                        name="indirizzo" value="{{ $project->indirizzo }}">
                </div>
                <div class="col-lg-2">
                    <label>Provincia:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_5" name="provincia">
                        <option selected="true">{{ $project->provincia }}</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label>Città:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_6" name="citta">
                        <option selected="true">{{ $project->comune }}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group row">
                <div class="col-lg-4">
                    <label>Dimensione:</label>
                    <input type="text" class="form-control" placeholder="inserisci dimensione" id="dimensione"
                        name="dimensione" value="{{ $project->dimensione }}">
                </div>
                <div class="col-lg-4">
                    <label>Prezzo:</label>
                    <input type="number" class="form-control" placeholder="inserisci prezzo" id="prezzo" name="prezzo"
                        value="{{ $project->prezzo }}">
                </div>
                <div class="col-lg-4">
                    <label>Sconto:</label>
                    <input type="number" class="form-control" placeholder="inserisci sconto" id="sconto" name="sconto"
                        value="{{ $project->sconto }}">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Descrizione:</label>
                <textarea class="form-control" id="descrizione"
                    name="descrizione">{{ $project->descrizione }}</textarea>
                <span class="form-text text-muted"> </span>
            </div>
            <div class="form-group">
                <label>Testo:</label>
                <textarea class="form-control" id="testo" name="testo">{{ $project->testo }}</textarea>
                <span class="form-text text-muted"> </span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Condizioni di pagamento:</label>
                    <textarea class="form-control" id="condizioni_pagamento"
                        name="condizioni_pagamento">{{ $project->condizioni_pagamento }}</textarea>
                    <span class="form-text text-muted"> </span>
                </div>
                <div class="col-lg-6">
                    <label>Condizioni generali:</label>
                    <textarea class="form-control" id="condizioni_generali"
                        name="condizioni_generali">{{ $project->condizioni_generali }}</textarea>
                    <span class="form-text text-muted"> </span>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Meta Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci meta titolo" maxlength="70"
                        id="meta_titolo" name="meta_titolo" value="{{ $project->meta_titolo }}">
                    <span class="form-text text-muted" id="meta_titolo_messaggio"> Max 70 caratteri</span>
                </div>
                <div class="col-lg-6">
                    <label>Meta Descrizione:</label>
                    <input type="text" class="form-control" placeholder="inserisci meta descrizione" maxlength="160"
                        id="meta_descrizione" name="meta_descrizione" value="{{ $project->meta_descrizione }}">
                    <span class="form-text text-muted" id="meta_descrizione_messaggio"> Max 160 caratteri </span>
                </div>
            </div>
            <div class="form-group">
                <label>Keywords:</label>
                <input id="kt_tagify_1" class="form-control tagify" name='meta_keywords' placeholder="scrivi..."
                    value="{{ $project->meta_keywords }}" data-blacklist='.NET,PHP' />

                <div class="mt-3">
                    <a href="javascript:;" id="kt_tagify_1_remove"
                        class="btn btn-sm btn-light-primary font-weight-bold">Rimuovi tags</a>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group ">
                <label>Carica immagine:</label><br>

                <div class="image-input image-input-outline" id="kt_image_4"
                    style="background-image: url({{ url('images/') }}/{{ $project->immagine }})">
                    <div class="image-input-wrapper immagine-post" style=""></div>

                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                        data-action="change" data-toggle="tooltip" title="" data-original-title="Carica foto">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="immagine" accept=".png, .jpg, .jpeg"
                            value="{{ old('immagine') }}" />
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

        <div class="col-lg-12">

            <div class="form-group row">
                <label class="col-lg-2 col-sm-2 col-form-label">Illuminato:</label>
                <div class="col-lg-2 col-sm-2 ">
                    <span class="switch switch-outline switch-icon switch-info">
                        <label>
                            <input type="checkbox"
                                checked="{{ ($project->illuminato==='on') ?  'checked' :  ' ' }}"
                                name="illuminato">
                            <span></span>
                        </label>
                    </span>
                </div>
                <label class="col-lg-2 col-sm-2 col-form-label">Pubblicato</label>
                <div class="col-lg-2 col-sm-2">
                    <span class="switch switch-outline switch-icon switch-success">
                        <label>
                            <input type="checkbox"
                                checked=" {{ ($project->pubblicato==='on') ?  'checked' :  ' ' }}"
                                name="pubblicato">

                            <span></span>
                        </label>
                    </span>
                </div>
                <label class="col-lg-2 col-sm-2 col-form-label">In Evidenza:</label>
                <div class="col-lg-2 col-sm-2">
                    <span class="switch switch-outline switch-icon switch-warning">
                        <label>
                            <input type="checkbox"
                                checked=" {{ ($project->evidenza==='on') ?  'checked' :  ' ' }}"
                                name="evidenza">
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
                    <button type="button" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary mr-2">Salva</button>
                </div>
            </div>
        </div>
        </form>
        <!--end::Form-->
    </div>

</div>



@endsection

{{-- Styles Section --}}
@section('styles')

@endsection


{{-- Scripts Section --}}
@section('scripts')

<script>
    // Class definition
    var KTTagify = function () {

        // Private functions
        var demo1 = function () {
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
            document.getElementById('kt_tagify_1_remove').addEventListener('click', tagify.removeAllTags.bind(
                tagify))

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
            init: function () {
                demo1();
            }
        };
    }();

    jQuery(document).ready(function () {
        KTTagify.init();
    });

    //init select2 field e textarea toolbar
    $(document).ready(function () {
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
        $('#condizioni_pagamento').summernote({
            placeholder: 'Inserisci condizioni pagamento',
            tabsize: 2,
            height: 150
        });
        $('#condizioni_generali').summernote({
            placeholder: 'Inserisci condizioni generali',
            tabsize: 2,
            height: 150
        });

        $('#MenuGestioneImpianti').addClass("menu-item-open");
        $('#MenuProgetti').addClass("menu-item-open menu-item-here");
    });

</script>
<script>
    var avatar4 = new KTImageInput('kt_image_4');

</script>
<script>
    //script per generare lo slug
    function convertToSlug(Text) {
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g, '')
            .replace(/ +/g, '-');
    }

    $("#titolo").keyup(function () {
        var Text = $(this).val();
        var Text = convertToSlug(Text);

        $("#slug").val(Text);
    });

</script>

<script>
    // recupera le sottocategorie al caricamento della pagina

    $(document).ready(function () {
        var id = <?=json_encode($project->category->parent_id)?> ;
        let dropdown = $('#kt_select2_4');
        dropdown.empty();
        $.ajax({
            url: 'query/' + id,
            type: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $.each(response, function (key, entry) {
                    dropdown.append($('<option>').attr('value', entry.id).text(entry
                        .titolo));
                });
            }

        });

    });
    //invia la scelta della categoria ricevendo lista sottocategorie
    $('#kt_select2_3').on('change', function () {
        let dropdown = $('#kt_select2_4');
        dropdown.empty();

        var id = $(this).val();
        $.ajax({
            url: 'query/' + id,
            type: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $.each(response, function (key, entry) {
                    dropdown.append($('<option>').attr('value', entry.id).text(entry
                        .titolo));
                });
            }

        });
    });

    //recupera provincie
    $(document).ready(function () {
        let dropdown = $('#kt_select2_5');
        // dropdown.empty();
        // dropdown.append('<option selected="true" disabled>Scegli provincia</option>');
        dropdown.prop('selectedIndex', 0);
        $.ajax({
            url: 'provincie/',
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $.each(response, function (key, entry) {
                    dropdown.append($('<option>').attr('value', entry.provincia).text(entry
                        .provincia));
                });
            }

        });

    });
    //recupera comuni
    $('#kt_select2_5').on('change', function () {
        let dropdown = $('#kt_select2_6');
        dropdown.empty();
        dropdown.append('<option selected="true" disabled>Scegli comune</option>');
        dropdown.prop('selectedIndex', 0);
        var val = $(this).val();
        $.ajax({
            url: 'comuni/' + val,
            type: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $.each(response, function (key, entry) {
                    dropdown.append($('<option>').attr('value', entry.comune).text(entry
                        .comune));
                });
            }

        });
    });

</script>


<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection
