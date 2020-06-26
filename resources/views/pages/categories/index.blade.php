{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')

<div class="modal" tabindex="-1" role="dialog" id="createCategoryModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crea Categoria</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">

                        <select class="form-control" name="parent_id">
                            <option value="">Select Parent Category</option>

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->titolo }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <input type="text" name="titolo" class="form-control" value="{{old('titolo')}}" placeholder="Category Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Pubblicato:</label>
                        <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                            <option value="on">si</option>
                            <option value="">no</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>


{{-- <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
    <div class="alert-icon">
    </div>
    <div class="alert-text">
        Get vector icons and social logos on your website with Font Awesome, the web's most popular icon set and
        toolkit.
        For more info visit
    </div>
</div> --}}
<div class="row">
    <div class="col-xl-8">
        <div class="card card-custom">
            <!--begin::Header-->
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Gestione Categorie
                        <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span></h3>
                </div>
                <div class="card-toolbar">
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCategoryModal">
                        Launch demo modal
                      </button> --}}
                    <!--begin::Button-->
                    {{-- <a href="{{ route('category.create') }}" class="btn
                    btn-primary font-weight-bolder"> --}}
                    <a type="button" class="btn btn-sm btn-primary mr-1 create-category" data-toggle="modal"
                        data-target="#createCategoryModal">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                           {{Metronic::getSVG("assets/media/svg/icons/Design/Flatten.svg")}}
                            <!--end::Svg Icon-->
                        </span>Crea nuovo</a>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">



                <table class="table table-bordered table-vertical-center" id="kt_datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Pubbicato</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->titolo }}</td>
                                <td>
                                    @if($category->pubblicato=='on')
                                        <span
                                            class="label label-lg font-weight-bold label-light-success label-inline">si</span>
                                    @else
                                        <span
                                            class="label label-lg font-weight-bold label-light-danger label-inline">no</span>
                                    @endif
                                </td>
                                <td class="warning" nowrap>
                                    <form
                                        action="{{ route('category.destroy', $category->id) }}"
                                        method="POST">
                                        @method('delete')
                                        @csrf

                                        <a href="{{ route('category.show', $category->id) }}"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm" title="Visualizza">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                {{ Metronic::getSVG("media/svg/icons/General/Edit.svg") }}
                                            </span>
                                        </a>

                                        <button type="submit" class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                            onclick="ConfirmDelete()">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg") }}
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>

                                    </form>

                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>



            </div>
            <!--end::Body-->
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Aggiungi categoria</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">

                            <select class="form-control" name="parent_id">
                                <option value="">Select Parent Category</option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->titolo }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <input type="text" name="titolo" class="form-control" value="" placeholder="Category Name"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Pubblicato:</label>
                            <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                                <option value="on">si</option>
                                <option value="">no</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
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
{{-- datatable init script --}}
<script src="{{ asset('js/pages/my-script.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/pages/features/miscellaneous/sweetalert2.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script>




    function ConfirmDelete() {

        var x = confirm("Are you sure you want to delete?");
        if (x)

            return;
        else
            return false;
    }

</script>
<script>
    $(document).ready(function () {
        $('.select2').select2();
    });

</script>

@endsection
