{{-- Extends layout --}}
@extends('backend.layout.default')


{{-- Content --}}
@section('content')



<!--begin::Card-->
<form method="POST" action="{{ route('crea.utente') }}">

    @csrf
<div class="card card-custom card-stretchs">

    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-start flex-column">
            <h3 class="card-label font-weight-bolder text-dark">Scheda Utente</h3>
            <span class="text-muted font-weight-bold font-size-sm mt-1">Inserisci le informazioni personali</span>
        </div>
        <div class="card-toolbar">
            <button type="submit" class="btn btn-success mr-2">Salva</button>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->

        <!--begin::Body-->
        <div class="card-body">
            <div class="row">
                <label class="col-xl-3"></label>
                <div class="col-lg-9 col-xl-6">
                    <h5 class="font-weight-bold mb-6">Creazione utente</h5>
                </div>
            </div>
            {{-- {{ ISSET($validator) ? $validator->first('email') : ''}} --}}
            {{-- {{ $validator->first('email') }} --}}
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Nome</label>
                <div class="col-lg-9 col-xl-6">
                <input id="name" type="text" class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Email</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="la la-at"></i>
                            </span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <input type="text" class="form-control form-control-lg form-control-solid"  placeholder="Email" /> --}}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Password</label>
                <div class="col-lg-9 col-xl-6">
                    <input id="password" type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Ripeti password</label>
                <div class="col-lg-9 col-xl-6">
                    <input id="password-confirm" type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Assegna Ruolo</label>
                <div class="col-lg-9 col-xl-6">
                    <select class="form-control kt-select2 select2" id="kt_select2_1" name="role">
                        @foreach ($roles as $role)
                        <option value="{{$role->name}}">{{$role->name}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            {{-- <div class="row">
                <label class="col-xl-3"></label>
                <div class="col-lg-9 col-xl-6">
                    <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Contact Phone</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="la la-phone"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Phone" />
                    </div>
                    <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Email Address</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="la la-at"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control form-control-lg form-control-solid" value="nick.bold@loop.com" placeholder="Email" />
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Company Site</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="input-group input-group-lg input-group-solid">
                        <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="loop" />
                        <div class="input-group-append">
                            <span class="input-group-text">.com</span>
                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
        <!--end::Body-->


</div>
</form>
<!--end::Form-->



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
