@extends('layout_admin.main_login')
@section('content')
<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="login.html">
                <img src="{{ env('APP_URL') }}vendors/images/favicon-32x32.png" alt="" />
            </a>
        </div>
        <div class="login-menu">

        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{ env('APP_URL') }}vendors/images/login-page-img.png" alt="" />
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Login To System</h2>
                    </div>

                    <form action="/login" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group custom">
                            <input type="text" autofocus name="name"
                                class="form-control @error('name') is-invalid @enderror form-control-lg"
                                placeholder="name" value="{{ old('name') }}" id="title" />
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">

                            <input type="password" autofocus name="password"
                                class="form-control @error('password') is-invalid @enderror form-control-lg"
                                placeholder="**********" value="{{ old('password') }}" id="title" />
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">

                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <!--
                                    use code for form submit
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                -->
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection