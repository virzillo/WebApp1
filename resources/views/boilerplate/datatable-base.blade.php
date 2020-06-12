{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')



	<!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-bordered table-hover" id="articoli_table">
                <thead>
                <tr>
                    <th></th>

                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th>Pubblicato</th>
                    <th>Evidenza</th>
                    <th>Pubblicato il</th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($users as $user) --}}
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td nowrap>
                            <form action="" method="POST">
                                @method('delete')
                                @csrf


                            {{-- <a href="progetti/{{$projects->id}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Visualizza"> --}}
                            <a href="" class="btn btn-sm btn-clean btn-icon mr-2" title="Visualizza">
                                <span class="svg-icon svg-icon-md">
                                    <?php echo Metronic::getSVG("media/svg/icons/General/Edit.svg"); ?>
                                </span>
                            </a>

                                <button type="submit" name="del-user" class="btn btn-sm btn-clean btn-icon ">
                                    <span class="svg-icon svg-icon-md">
                                        {{Metronic::getSVG("media/svg/icons/General/Trash.svg")}}
                                    </span>
                                </button>
                            </form>

                        </td>
                    </tr>
                    {{-- @endforeach --}}


                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
    <!--begin::Modal-->
    <div class="modal fade" id="kt_datatable_records_fetch_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Selected Records</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="kt-scroll" data-scroll="true" data-height="200">
                        <ul id="kt_apps_user_fetch_records_selected"></ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')

    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>


    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>


@endsection
