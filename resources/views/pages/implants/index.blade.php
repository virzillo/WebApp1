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

            <!--begin::Button-->
            <a href="{{route('implant.create')}}" class="btn btn-primary font-weight-bolder">
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
                @foreach ($implants as $implant)
                <tr>
                    <td>{{ $implant->id }}</td>
                    <td class="sorting_1 dtr-control">
                        {{ $implant->titolo }}
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
                            <img src="{{ url('/storage/'.$implant->immagine) }} " alt="{{ $implant->immagine }}">
                        </div>
                    </td>
                    <td>{{ $implant->dimensione }}</td>
                    <td>{{ $implant->provincia }}</td>
                    <td>{{ $implant->comune }}</td>
                    <td>{{ $implant->prezzo }} €</td>
                    <td> {{ $implant->category->titolo }}</td>

                    <td>
                        @if ( $implant->pubblicato == 'on' )
                            <span class="label label-lg font-weight-bold label-light-success label-inline">si</span>
                        @else
                            <span class="label label-lg font-weight-bold label-light-danger label-inline">no</span>
                        @endif
                    </td>
                    <td>
                        @if ( $implant->evidenza == 'on')
                            <span class="label label-lg font-weight-bold label-light-info label-inline">si</span>
                        @else
                            <span class="label label-lg font-weight-bold label-light-warning label-inline">no</span>
                        @endif
                    </td>
                    <td>{{$implant->created_at->format('d/m/Y')}}</td>

                    <td class="warning" nowrap>
                        <form action="{{route('implant.destroy', $implant->id) }}"
                        method="POST" id="form-delete">
                            @method('delete')
                            @csrf
                            {{ method_field('DELETE') }} {{ csrf_field() }}
                            <a href="{{route('implant.show',$implant->id )}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Visualizza">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    {{ Metronic::getSVG("media/svg/icons/General/Edit.svg") }}
                                </span>
                            </a>
                            <button type="button" class="btn btn-sm btn-clean btn-icon " id="confirm-delete">
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

   $("button#confirm-delete").click(function(e) {
    event.preventDefault();
    Swal.fire({
        title: "Sei sicuro?",
        text: "Stai per eliminare un record!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminalo!!"
    }).then(function(result) {
        if (result.value) {
            $("#form-delete").submit();
        }
    });
});


</script>

@endsection
