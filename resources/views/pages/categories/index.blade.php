{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')

<div class="modal" tabindex="-1" role="dialog" id="createCategoryModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crea Category</h5>

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
                        <input type="text" name="titolo" class="form-control" value="" placeholder="Category Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Pubblicato:</label>
                        <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                            <option value="si">si</option>
                            <option value="no">no</option>
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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path
                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Crea nuovo</a>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">



                <table class="table table-bordered table-hover" id="kt_datatable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Pubbicato</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td></td>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->titolo }}</td>
                                <td>
                                    @if($category->pubblicato === 'si')
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
                                            class="btn btn-sm btn-clean btn-icon mr-2" title="Visualizza">
                                            <span class="svg-icon svg-icon-md">
                                                {{ Metronic::getSVG("media/svg/icons/General/Edit.svg") }}
                                            </span>
                                        </a>

                                        <button type="submit" class="btn btn-sm btn-clean btn-icon "
                                            onclick="ConfirmDelete()">
                                            <span class="svg-icon svg-icon-md">
                                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg") }}
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
                                <option value="si">si</option>
                                <option value="no">no</option>
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
<script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript">
</script>

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
