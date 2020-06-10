@extends('layout.auth')


@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

 <!--begin::Content-->
 <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
    <!--begin::Content body-->
    <div class="d-flex flex-column-fluid flex-center">

        <!--begin::Signup-->
        <div class="login-form login-signin">
            <!--begin::Form-->
            <form class="form" novalidate="novalidate" id="kt_login_signup_form" method="post" action="{{route('register')}}">
                @csrf
                <!--begin::Title-->
                <div class="pb-13 pt-lg-0 pt-5">
                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Registrati</h3>
                    {{-- <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p> --}}
                    <span class="text-muted font-weight-bold font-size-h4">Sei gia registrato?
                        <a href="{{route('login')}}" id="kt_login_signup" class="text-primary font-weight-bolder">Accedi</a></span>
                </div>
                <!--end::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                    <input id="name" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome" autofocus />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                    <input id="email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"/>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                    <input id="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">

                    <input id="password-confirm" type="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"  name="password_confirmation" required autocomplete="new-password" placeholder="Conferma Password">

                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                    <label class="checkbox mb-0">
                    <input type="checkbox" name="agree" />I Agree the
                    <a href="#">terms and conditions</a>.
                    <span></span></label>
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                    <button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                    {{-- <a href="{{route('login')}}" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button> --}}
                </div>
                <!--end::Form group-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Signup-->

    </div>
    <!--end::Content body-->
    <!--begin::Content footer-->
    <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
        <a href="#" class="text-primary font-weight-bolder font-size-h5">Terms</a>
        <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">Plans</a>
        <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">Contact Us</a>
    </div>
    <!--end::Content footer-->
</div>
<!--end::Content-->
@endsection
