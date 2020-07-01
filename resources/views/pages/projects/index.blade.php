{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')



<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Gestione Impianti
                <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Dropdown-->
            {{-- <div class="dropdown dropdown-inline mr-2">
                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        {{ Metronic::getSVG("assets/media/svg/icons/Design/PenAndRuller.svg") }}

                        <!--end::Svg Icon-->
                    </span>Export</button>
                <!--begin::Dropdown Menu-->
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Navigation-->
                    <ul class="navi flex-column navi-hover py-2">
                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose
                            an option:</li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-print"></i>
                                </span>
                                <span class="navi-text">Print</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-copy"></i>
                                </span>
                                <span class="navi-text">Copy</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-file-excel-o"></i>
                                </span>
                                <span class="navi-text">Excel</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-file-text-o"></i>
                                </span>
                                <span class="navi-text">CSV</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-file-pdf-o"></i>
                                </span>
                                <span class="navi-text">PDF</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
                <!--end::Dropdown Menu-->
            </div> --}}
            <!--end::Dropdown-->
            <!--begin::Button-->
            <a href="{{route('crea.progetto')}}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    {{ Metronic::getSVG("assets/media/svg/icons/Design/Flatten.svg") }}
                    <!--end::Svg Icon-->
                </span>New Record</a>
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
                    <th>Nome</th>
                    <th>Immagine</th>
                    <th>Dimensione</th>
                    <th>Provincia</th>
                    <th>Città</th>
                    <th>Prezzo</th>
                    <th>Categoria</th>

                    <th>Pubbicato</th>
                    <th>Evidenza</th>
                    <th>Data</th>

                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td class="sorting_1 dtr-control">
                        {{ $project->titolo }}
                        {{-- <div class="d-flex align-items-center">
                            <div class="symbol symbol-50 flex-shrink-0">
                                <img src="assets/media/users/100_9.jpg" alt="photo">
                            </div>
                            <div class="ml-3">
                                <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2"></span>
                                <a href="#" class="text-muted text-hover-primary">{{ $project->category->titolo }}</a>
                            </div>
                        </div> --}}
                    </td>
                    <td>
                        <div class="symbol symbol-50 flex-shrink-0">
                            <img src="{{url('/images/')}}/{{ $project->immagine }}" alt="{{ $project->immagine }}">
                        </div>
                    </td>
                    <td>{{ $project->dimensione }}</td>
                    <td>{{ $project->provincia }}</td>
                    <td>{{ $project->citta }}</td>
                    <td>{{ $project->dimensione }}</td>
                    <td> {{ $project->category->titolo }}</td>

                    <td>
                        @if ( $project->pubblicato == 'on' )
                            <span class="label label-lg font-weight-bold label-light-success label-inline">si</span>
                        @else
                            <span class="label label-lg font-weight-bold label-light-danger label-inline">no</span>
                        @endif
                    </td>
                    <td>
                        @if ( $project->evidenza == 'on')
                            <span class="label label-lg font-weight-bold label-light-info label-inline">si</span>
                        @else
                            <span class="label label-lg font-weight-bold label-light-warning label-inline">no</span>
                        @endif
                    </td>
                    <td>{{$project->created_at->format('d/m/Y')}}</td>

                    <td class="warning" nowrap>
                        <form action="{{route('elimina.progetto', $project->id) }}"
                        method="POST">
                        <form action="" method="">
                            @method('delete')
                            @csrf
                            {{ method_field('DELETE') }} {{ csrf_field() }}
                            <a href="{{route('mostra.progetto',$project->id )}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Visualizza">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    {{ Metronic::getSVG("media/svg/icons/General/Edit.svg") }}
                                </span>
                            </a>
                            <button type="submit" class="btn btn-sm btn-clean btn-icon " onclick="ConfirmDelete()">
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

@endsection
