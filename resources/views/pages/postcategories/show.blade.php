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
        <h3 class="card-title">Visualizza categoria</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                {{-- <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span> --}}
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{ route('postcategory.update',$postcategory->id) }}">

        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci titolo" name="titolo" value="{{$postcategory->titolo}}">
                    <span class="form-text text-muted"> </span>
                </div>

                <div class="col-lg-6">
                    <label>Pubblicato:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                        @if ($postcategory->pubblicato=='on')
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
        $('#MenuSitoWeb').addClass("menu-item-open");
        $('#MenuCategorie').addClass("menu-item-open menu-item-here");
    });
</script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
