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
                            {{ Metronic::getSVG("assets/media/svg/icons/Design/Flatten.svg")}}
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
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
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
        $('#MenuApplications').addClass("menu-item-open");
        $('#MenuCategorie').addClass("menu-item-open menu-item-here");
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
