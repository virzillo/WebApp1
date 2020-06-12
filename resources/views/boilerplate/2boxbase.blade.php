{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')

<div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
    <div class="alert-icon">
    </div>
    <div class="alert-text">
        Get vector icons and social logos on your website with Font Awesome, the web's most popular icon set and
        toolkit.
        For more info visit
    </div>
</div>
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

                    <!--begin::Button-->
                    <a href="{{ route('crea.categoria') }}" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            {{ Metronic::getSVG("media/svg/icons/Design/Flatten.svg")}}
                            <!--end::Svg Icon-->
                        </span>Crea nuovo</a>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">


            </div>
            <!--end::Body-->
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card card-custom gutter-b card-stretch">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Modulo modifica</h3>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>

</div>



@endsection

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
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection
