@extends('frontend.layouts.master')
@section('title', 'Profile')
@section('content')
    <section id="dashboard">
        <div class="container">
            <div class="row">
                @include('frontend.dashboard.sidebar')
                <div class="col-lg-9">
                    <div class="dashboard_content">
                        <div class="my_listing">
                            <h4>basic information</h4>
                            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-8 col-md-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="my_listing_single">
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input type="text" name="name" required placeholder="Name"
                                                               value="{{old('name',@$user->name)}}">
                                                    </div>
                                                    @error('name')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="my_listing_single">
                                                    <label>phone <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input type="text" name="phone" required placeholder="Enter Your Phone"
                                                               value="{{old('phone',@$user->phone)}}">
                                                    </div>
                                                    @error('phone')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>email <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input type="email" name="email" placeholder="Email" required
                                                               value="{{old('email',@$user->email)}}">
                                                    </div>
                                                    @error('email')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>Address </label>
                                                    <div class="input_area">
                                                        <input type="text" name="address" placeholder="Address"
                                                               value="{{old('address',@$user->address)}}" required>
                                                    </div>
                                                    @error('address')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>About Me <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <textarea cols="3" rows="3" name="about"
                                                                  placeholder="Your Text" required>{{old('about',@$user->about)}}</textarea>
                                                    </div>
                                                    @error('about')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Website</label>
                                                    <div class="input_area">
                                                        <input type="text" name="website" placeholder="Website"
                                                               value="{{old('website',@$user->website)}}">
                                                    </div>
                                                    @error('website')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Facebook Link</label>
                                                    <div class="input_area">
                                                        <input type="text" name="fb_link" placeholder="Facebook Link"
                                                               value="{{old('fb_link',@$user->fb_link)}}">
                                                    </div>
                                                    @error('fb_link')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>X</label>
                                                    <div class="input_area">
                                                        <input type="text" name="x_link" placeholder="X Link"
                                                               value="{{old('x_link',@$user->x_link)}}">
                                                    </div>
                                                    @error('x_link')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Whatsapp</label>
                                                    <div class="input_area">
                                                        <input type="text" name="wa_link" placeholder="Whatsapp Link"
                                                               value="{{old('wa_link',@$user->wa_link)}}">
                                                    </div>
                                                    @error('wa_link')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Linkedin</label>
                                                    <div class="input_area">
                                                        <input type="text" name="in_link" placeholder="Linkin Link"
                                                               value="{{old('in_link',@$user->in_link)}}">
                                                    </div>
                                                    @error('in_link')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Instagram</label>
                                                    <div class="input_area">
                                                        <input type="text" name="insta_link" placeholder="Instagram Link"
                                                               value="{{old('insta_link',@$user->insta_link)}}">
                                                    </div>
                                                    @error('insta_link')
                                                    <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-5">
                                        <div class="my_listing_single">
                                            <label>Avatar</label>
                                            <div class="profile_pic_upload">
                                                <img src="{{asset(@$user->avatar)}}" alt="img" class="imf-fluid w-100">
                                                <input type="file" name="avatar">
                                                <input type="hidden" name="old_avatar" value="{{ @$user->avatar }}">
                                            </div>
                                            @error('avatar')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="my_listing_single">
                                            <label>Banner</label>
                                            <div class="profile_pic_upload">
                                                <img src="{{asset(@$user->banner)}}" alt="img" class="imf-fluid w-100">
                                                <input type="file" name="banner">
                                                <input type="hidden" name="old_banner" value="{{ @$user->banner }}">
                                            </div>
                                            @error('banner')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="read_btn">upload</button>
                                </div>
                            </form>
                        </div>

                        <div class="my_listing list_mar">
                            <h4>change password</h4>
                            <form action="{{ route('user.profile-password.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="my_listing_single">
                                            <label>current password</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="Current Password" name="current_password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="my_listing_single">
                                            <label>new password</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="New Password" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="my_listing_single">
                                            <label>confirm password</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="Confirm Password" name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="read_btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection