{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')



<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">Modifica servizio</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                {{-- <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span> --}}
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{ route('modifica.servizio',$service->id) }}">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Titolo:</label>
                    <input type="text" class="form-control" placeholder="inserisci titolo" name="titolo" value="{{$service->titolo}}">
                    <span class="form-text text-muted"> </span>
                </div>
                <div class="col-lg-6">
                    <label>Icona:</label><i class="value="{{$service->icona}}"></i>
                    <input type="text" class="form-control" placeholder="inserisci icona" value="{{$service->icona}}" name="icona" >
                    <span class="form-text text-muted"><a href="/admin/icons/shareserviceicons" class="" target="_blank">elenco</a> </span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Descrizione:</label>
                    <textarea name="descrizione" class="form-control" data-provide="markdown" rows="10">{!! $service->descrizione !!}"</textarea>
                    <span class="form-text text-muted"> </span>
                </div>


                <div class="col-lg-6">
                    <label>Pubblicato:</label>
                    <select class="form-control kt-select2 select2" id="kt_select2_1" name="pubblicato">
                        @if ($service->pubblicato)
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
                    {{-- <button type="reset" class="btn btn-danger">Delete</button> --}}
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
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
    });
</script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
