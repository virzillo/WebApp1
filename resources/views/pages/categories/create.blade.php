{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')


{{-- <div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">Crea nuova categoria</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">

            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{ route('category.store') }}">

        @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci titolo" name="titolo">
                    <span class="form-text text-muted"> </span>
                </div>
                <div class="col-lg-6">
                    <label>Pubblicato:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                            <option value="no">no</option>
                            <option value="si">si</option>
                    </select>
                </div>
            </div>



        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6 text-right">

                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </form>

</div> --}}


<div class="row">
    <div class="col-lg-8">
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Crea Categorie
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <div class="col-lg-4"> <label>Categoria:</label>
                            <select class="form-control" name="parent_id">
                                <option value="">Seleziona categoria genitore</option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->titolo }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-4"> <label>Titolo:</label>
                            <input type="text" name="titolo" class="form-control"
                                value="{{ old('titolo') }}" placeholder="Nome categoria" required>
                        </div>


                    <div class="col-lg-4">

                            <label>Pubblicato:</label>
                            <select class="form-control kt-select2 select2" id="kt_select2_5" name="pubblicato">
                                <option value="on">si</option>
                                <option value="">no</option>
                            </select>

                    </div>
                </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Categorie
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($categories as $category)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                {{ $category->titolo }}

                                <div class="button-group d-flex">
                                    <button type="button" class="btn btn-sm btn-clean btn-icon mr-2 edit-category"
                                        data-toggle="modal" data-target="#editCategoryModal"
                                        data-id="{{ $category->id }}"
                                        data-pubblicato="{{ $category->pubblicato }}"
                                        data-name="{{ $category->titolo }}">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            {{ Metronic::getSVG("media/svg/icons/General/Edit.svg") }}
                                        </span>
                                    </button>

                                    <form
                                        action="{{ route('category.destroy', $category->id) }}"
                                        method="POST" id="form-delete1">
                                        @csrf
                                        @method('DELETE')

                                        <button type="button" class="btn btn-sm btn-clean btn-icon mr-2">
                                            <span class="svg-icon svg-icon-md svg-icon-danger" id="confirm-delete1">
                                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg") }}
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            @if($category->children)
                                <ul class="list-group mt-2">
                                    @foreach($category->children as $child)
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                {{ $child->titolo }}


                                                <div class="button-group d-flex">
                                                    <button type="button"
                                                        class="btn btn-sm btn-clean btn-icon mr-2 edit-category"
                                                        data-toggle="modal" data-target="#editCategoryModal"
                                                        data-id="{{ $child->id }}"
                                                        data-titolo="{{ $child->titolo }}">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            {{ Metronic::getSVG("media/svg/icons/General/Edit.svg") }}
                                                        </span>
                                                    </button>

                                                    <form
                                                        action="{{ route('category.destroy', $child->id) }}"
                                                        method="POST" id="form-delete2">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="button"
                                                            class="btn btn-sm btn-clean btn-icon mr-2"
                                                            id="confirm-delete2">
                                                            <span class="svg-icon svg-icon-md svg-icon-danger">
                                                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg") }}
                                                            </span>
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>


<div class="modal" tabindex="-1" role="dialog" id="editCategoryModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="titolo" class="form-control" value="" placeholder="Category Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Pubblicato:</label>
                        <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                            @if ($category->pubblicato=='si')
                            <option value="si">si</option>
                           <option value="no">no</option>

                       @else
                           <option value="no">no</option>
                           <option value="si">si</option>

                       @endif


                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </div>
        </form>
    </div>
</div>


@endsection

{{-- Styles Section --}}
@section('styles')
<link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
    type="text/css" />
@endsection



{{-- Scripts Section --}}
@section('scripts')




{{-- vendors --}}
<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"
    type="text/javascript"></script>

{{-- page scripts --}}
<script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript">
</script>

<script src="{{ asset('js/pages/features/miscellaneous/sweetalert2.js') }}"
    type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('.select2').select2();
    });

</script>
<script type="text/javascript">
    $('.edit-category').on('click', function () {
        var id = $(this).data('id');
        var titolo = $(this).data('titolo');
        var pubblicato = $(this).data('pubblicato');

        var url = "{{ url('admin/category') }}/" + id;

        $('#editCategoryModal form').attr('action', url);
        $('#editCategoryModal form input[name="titolo"]').val(titolo);
        $('#editCategoryModal form input[name="pubblicato"]').val(pubblicato);

    });

    $("button#confirm-delete1").click(function(e) {
    event.preventDefault();
    Swal.fire({
        title: "Sei sicuro?",
        text: "Stai per eliminare un record!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminalo!!"
    }).then(function(result) {
        if (result.value) {
            $("#form-delete1").submit();
        }
    });
});
$("button#confirm-delete2").click(function(e) {
    event.preventDefault();
    Swal.fire({
        title: "Sei sicuro?",
        text: "Stai per eliminare un record!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminalo!!"
    }).then(function(result) {
        if (result.value) {
            $("#form-delete2").submit();
        }
    });
});

</script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
