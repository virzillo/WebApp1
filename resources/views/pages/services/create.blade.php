{{-- Extends layout --}}
@extends('layout.default')

@push('styles')
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
{{-- Content --}}
@section('content')



<div class="card card-custom gutter-b">
    <div class="card-header">
        <h3 class="card-title">Crea nuovo servizio</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                {{-- <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span> --}}
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{ route('salva.servizio') }}">

        @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-4">
                    <label>Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci titolo" name="titolo" required>
                    <span class="form-text text-muted"> </span>
                </div>
                <div class="col-lg-4">
                    <label>Icona:</label>
                    <input type="text" class="form-control" placeholder="inserisci icona" value="fa " name="icona" required>
                    <span class="form-text text-muted"><a href="/admin/icons/shareserviceicons" class="" target="_blank">elenco</a> </span>
                </div>
                <div class="col-lg-4">
                    <label>Pubblicato:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                        <option value="on">si</option>
                        <option value="">no</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Descrizione:</label>

                    <textarea name="descrizione" id="descrizione" class="form-control" data-provide="markdown" rows="10"></textarea>
                    <span class="form-text text-muted"> </span>
                </div>



            </div>


        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6 text-right">

                    <a href="{{route('servizi')}}" type="button" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>




@endsection

{{-- Styles Section --}}
@section('styles')

@endsection


{{-- Scripts Section --}}
@section('scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2();
        $('#descrizione').summernote({
            placeholder: 'Inserisci descrizione',
            tabsize: 2,
            height: 150
        });
    });
</script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
