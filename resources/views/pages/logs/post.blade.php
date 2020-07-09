{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')



<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Visualizzazioni post
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
                    <th>Articolo</th>
                    <th>Slug</th>
                    <th>Url</th>
                    <th>Utente</th>
                    <th>IP</th>
                    <th>Data</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postviews as $postview)
                <tr>
                    <td>{{ $postview->id }}</td>
                    <td><a href="{{route('visualizza.articolo',$postView->slug)}}">{{ $postview->postView->titolo }}</a></td>
                    <td class="sorting_1 dtr-control">
                        {{ $postview->slug }}
                    </td>

                    <td>{{ $postview->url }}</td>
                    <td>{{ $postview->user_id }}</td>
                    <td>{{ $postview->ip }}</td>
                    <td>{{ $postview->created_at->format('d,m,Y') }}</td>

                    <td class="warning" nowrap>
                        {{-- <form action="{{route('implant.destroy', $postview->id) }}"
                        method="POST" id="form-delete">
                            @method('delete')
                            @csrf
                            {{ method_field('DELETE') }} {{ csrf_field() }}
                            <button type="button" class="btn btn-sm btn-clean btn-icon " id="confirm-delete">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                    {{ Metronic::getSVG("media/svg/icons/General/Trash.svg") }}
                                    <!--end::Svg Icon-->
                                </span>
                            </button>
                        </form> --}}
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
