{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')



<!--begin::Card-->
<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-start flex-column">
            <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
            <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
        </div>
        <div class="card-toolbar">
            <button type="reset" class="btn btn-success mr-2">Save Changes</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <form class="form">
        <!--begin::Body-->
        <div class="card-body">
            <div class="row">
                <label class="col-xl-3"></label>
                <div class="col-lg-9 col-xl-6">
                    <h5 class="font-weight-bold mb-6">Informazioni Utente</h5>
                </div>
            </div>
            {{-- <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Avatar</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                        <div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="profile_avatar_remove" />
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                </div>
            </div> --}}
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Nome</label>
                <div class="col-lg-9 col-xl-6">
                    <input class="form-control form-control-lg form-control-solid" type="text" value="{{$user->name}}" />
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
                        <input type="text" class="form-control form-control-lg form-control-solid" value="{{$user->email}}" placeholder="Email" />
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Nuova Password</label>
                <div class="col-lg-9 col-xl-6">
                    <input id="password" type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >

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
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Ruolo</label>
                <div class="col-lg-9 col-xl-6">
                    <input class="form-control form-control-lg form-control-solid" type="text" value="{{$user->getRoleNames()->first()}}" />
                    <span class="form-text text-muted"></span>
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
                        <input type="text" class="form-control form-control-lg form-control-solid" value="{{$user->email}}" placeholder="Email" />
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
        $('#MenuApplications').addClass("menu-item-open");
        $('#MenuUtenti').addClass("menu-item-open menu-item-here");
    });
</script>


    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
