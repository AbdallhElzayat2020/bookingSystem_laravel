@extends('frontend.layouts.master')
@section('title','Forgot Password')
@section('content')
    <!--==========================
    BREADCRUMB PART START
===========================-->
    <div id="breadcrumb_part">
        <div class="bread_overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center text-white">
                        <h4>Forget Password</h4>
                        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Forget Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================
        BREADCRUMB PART END
    ===========================-->

    <!--=========================
        SIGN IN START
    ==========================-->
    <section class="wsus__login_page">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                    <div class="wsus__login_area">
                        <p>
                            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that
                            will allow you to choose a new one.
                        </p>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')"/>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <label>email</label>
                                        <input type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username"
                                               placeholder="Email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <button type="submit">Email Password Reset Link</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SIGN IN END
    ==========================-->

@endsection