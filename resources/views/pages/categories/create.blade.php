{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')



<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">Crea nuova categoria</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                {{-- <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span> --}}
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{ route('salva.categoria') }}">

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

                        <option value="si">si</option>
                        <option value="no">no</option>


                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">

                </div>


                <div class="col-lg-6">

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

<div class="row">
    <div class="col-xl-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Base Examples</h3>
                </div>
            </div>
            <div class="card-body">
                <!--begin::Example-->
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
                                @if ($category->pubblicato === 'si')
                                <span class="label label-lg font-weight-bold label-light-success label-inline">si</span>

                                @else
                                <span class="label label-lg font-weight-bold label-light-danger label-inline">no</span>
                                @endif
                            </td>


                            <td class="warning" nowrap>
                                <form action="{{route('elimina.categoria', $category->id)}}" method="POST">
                                    @method('delete')
                                    @csrf

                                    {{-- <a href="progetti/{{$user->id}}" class="btn btn-sm btn-clean btn-icon mr-2"
                                    title="Visualizza"> --}}
                                    <a href="{{route('mostra.categoria', $category->id)}}"
                                        class="btn btn-sm btn-clean btn-icon mr-2" title="Visualizza">
                                        <span class="svg-icon svg-icon-md">
                                            <?php echo Metronic::getSVG("media/svg/icons/General/Edit.svg"); ?>
                                        </span>
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-clean btn-icon " id="conferma"
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
                <!--end::Example-->
            </div>
        </div>
        <!--end::Card-->
    </div>

</div>


@endsection

{{-- Styles Section --}}
{{-- Styles Section --}}
@section('styles')
<link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection



{{-- Scripts Section --}}
@section('scripts')
{{-- vendors --}}
<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

{{-- page scripts --}}
<script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/pages/features/miscellaneous/sweetalert2.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
