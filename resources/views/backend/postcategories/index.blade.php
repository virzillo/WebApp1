{{-- Extends layout --}}
@extends('backend.layout.default')


{{-- Content --}}
@section('content')



<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Gestione Categorie
            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
        </div>
        <div class="card-toolbar">

            <!--begin::Button-->
            <a href="{{route('postcategory.create')}}" class="btn btn-primary font-weight-bolder">
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

                <th>Id</th>
                <th>Titolo</th>
                <th>Pubbicato</th>
                <th>Data</th>
                <th>Azioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($postcategories as $postcategory)
                <tr>
                    <td>{{$postcategory->id}}</td>
                    <td>{{$postcategory->titolo}}</td>

                    <td>
                        @if ($postcategory->pubblicato=='on')
                        <span class="label label-lg font-weight-bold label-light-success label-inline">si</span>

                        @else
                        <span class="label label-lg font-weight-bold label-light-danger label-inline">no</span>
                        @endif
                    </td>
                    <td>{{$postcategory->created_at->format('d/m/Y')}}</td>



                    <td  nowrap>
                        <form action="{{route('postcategory.destroy', $postcategory->id)}}" method="POST" id="form-delete">
                            @method('delete')
                            @csrf
                        <a href="{{route('postcategory.show',$postcategory->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="Visualizza">

                            <span class="svg-icon svg-icon-md">
                                {{ Metronic::getSVG("media/svg/icons/General/Edit.svg")}}
                            </span>
                        </a>
                            <button type="button"  class="btn btn-icon btn-light btn-hover-danger btn-sm "  id="confirm-delete">
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
    <!--end::Body-->
</div>


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
   {{-- datatable init script --}}
    <script src="{{ asset('js/pages/my-script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/features/miscellaneous/sweetalert2.js') }}"  type="text/javascript"></script>
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
