{{-- Extends layout --}}
@extends('backend.layout.default')

@push('styles')
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
{{-- Content --}}
@section('content')



<div class="card card-custom gutter-b">
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
    <form method="POST" action="{{ route('postcategory.store') }}">

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
                        <option value="on">si</option>
                        <option value="">no</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6 text-right">
                    <button type="submit" class="btn btn-primary mr-2">Salva</button>
                    {{-- <button type="reset" class="btn btn-secondary">Cancel</button> --}}
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
