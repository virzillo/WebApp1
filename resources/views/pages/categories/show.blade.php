{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')



<div class="row">
    <div class="col-xl-8">
        <div class="card card-custom gutter-b ">
            <div class="card-header">
                <h3 class="card-title">Sottocategorie di {{$cat->titolo}}</h3>
                <div class="card-toolbar">
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCategoryModal">
                        Launch demo modal
                      </button> --}}
                    <!--begin::Button-->
                    {{-- <a href="{{ route('category.create') }}" class="btn btn-primary font-weight-bolder"> --}}
                        <a type="button" class="btn btn-sm btn-primary mr-1 create-category"
                            data-toggle="modal" data-target="#createCategoryModal">
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
                    @foreach ($categories as $category)
                    <tr>
                        <td></td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->titolo}}</td>
                        <td>
                            @if ($category->pubblicato=='on')
                            <span class="label label-lg font-weight-bold label-light-success label-inline">si</span>

                            @else
                            <span class="label label-lg font-weight-bold label-light-danger label-inline">no</span>
                            @endif
                        </td>


                        <td class="warning" nowrap>
                            <form action="{{route('category.destroy', $category->id)}}" method="POST">
                                @method('delete')
                                @csrf

                                <a type="button" class="btn btn-sm btn-clean btn-icon mr-2 edit-category" data-toggle="modal"
                                data-id="{{ $category->id }}" data-titolo="{{ $category->titolo }}" data-pubblicato="{{ $category->pubblicato }}"
                                data-target="#createCategoryModal">
                                {{-- <a href="{{route('category.show', $category->id)}}"
                                    class="btn btn-sm btn-clean btn-icon mr-2" title="Visualizza"> --}}
                                    <span class="svg-icon svg-icon-md">
                                        {{ Metronic::getSVG("media/svg/icons/General/Edit.svg")}}
                                    </span>
                                </a>

                                <button type="submit" class="btn btn-sm btn-clean btn-icon "
                                    onclick="ConfirmDelete()">
                                    <span class="svg-icon svg-icon-md">
                                        {{Metronic::getSVG("media/svg/icons/General/Trash.svg")}}
                                    </span>
                                </button>

                            </form>

                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>



        </div>
    </div>
    <div class="col-xl-4">
        <div class="card card-custom gutter-b ">
            <div class="card-header">
                <h3 class="card-title">Modifica categoria</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">

                    </div>
                </div>
            </div>
            <!--begin::Form-->

            <form method="POST" action="{{ route('category.update' , $cat->id) }}">

                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Titolo:</label>
                            <input type="text" class="form-control" placeholder="inserisci titolo" name="titolo" value="{{$cat->titolo}}">
                            <span class="form-text text-muted"> </span>
                        </div>
                        <div class="col-lg-6">
                            <label>Pubblicato:</label>
                            <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato" >
                                @if($cat->pubblicato)
                                <option value="on">si</option>
                                <option value="">no</option>
                                @else
                                <option value="">no</option>
                                <option value="on">si</option>
                                @endif
                            </select>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6 text-right">
                            {{-- <button type="reset" class="btn btn-danger">Delete</button> --}}
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>

        <div class="card card-custom gutter-b ">
            <div class="card-header">
                <h3 class="card-title">Inserisci sottocategoria</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">

                    </div>
                </div>
            </div>
            <form action="{{ route('category.store') }}" method="POST">
            <div class="card-body">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                        <input type="hidden" name="parent_id" value="{{$cat->id}}">
                            <div class="col-lg-6">
                                <label>Titolo:</label>
                                <input type="text" name="titolo" class="form-control" value="" placeholder="Category Name"
                                required>
                            </div>
                            <div class="col-lg-6">
                                <label>Pubblicato:</label>
                                <select class="form-control kt-select2 select2" id="kt_select2_2" name="pubblicato">
                                    <option value="on">si</option>
                                   <option value="">no</option>
                                </select>
                            </div>
                        </div>

                    </div>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6 text-right">
                        {{-- <button type="reset" class="btn btn-secondary">Cancel</button> --}}
                        <button type="submit" class="btn btn-primary mr-2">Inserisci</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="createCategoryModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifica Sottocategoria</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">


                    {{-- <input type="hidden" name="parent_id" value="{{$cat->id}}"> --}}
                    <div class="form-group">
                        <input type="text" name="titolo" class="form-control" value="" placeholder="Category Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Pubblicato:</label>

                        <select class="form-control kt-select2 select2" id="kt_select2_3" name="pubblicato">
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
<script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<script type="text/javascript">
    $('.edit-category').on('click', function () {
        var id = $(this).data('id');
        var titolo = $(this).data('titolo');
        // var pubblicato = $(this).data('pubblicato');

        var url = "{{ url('admin/category') }}/" + id;

        $('#createCategoryModal form').attr('action', url);
        $('#createCategoryModal form input[name="titolo"]').val(titolo);
        // $('#createCategoryModal form input[name="hpubblicato"]').val(pubblicato);

    });

</script>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
