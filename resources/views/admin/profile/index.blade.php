@extends('admin.layouts.master')
@section('title', 'Profile')
@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item ">Dashboard</div>
                <div class="breadcrumb-item active"><a href="javascript:;">Profile</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="avatar">Avatar</label>
                                            <div id="image-preview" class="image-preview avatar-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="avatar" id="image-upload"/>
                                                <input type="hidden" name="old_avatar" value="{{@$user->avatar}}"/>
                                            </div>
                                            @error('avatar')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="banner">Banner</label>
                                            <div id="image-preview-2" class="image-preview banner-preview">
                                                <label for="image-upload-2" id="image-label-2">Choose File</label>
                                                <input type="file" name="banner" id="image-upload-2"/>
                                                <input type="hidden" name="old_banner" value="{{@$user->banner}}"/>
                                            </div>
                                            @error('banner')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" value="{{old('name',@$user->name )}}">
                                            @error('name')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{old('email',@$user->email )}}">
                                            @error('email')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone',@$user->phone)}}">
                                            @error('phone')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                   value="{{old('address',@$user->address )}}">
                                            @error('address')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="about">About <span class="text-danger">*</span> </label>
                                            <textarea name="about" id="about" class="form-control"
                                                      style="height: 300px!important;">{{@$user->about}}</textarea>
                                            @error('about')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fb_link">Facebook Link</label>
                                            <input type="text" class="form-control" id="fb_link" name="fb_link"
                                                   value="{{old('fb_link',@$user->fb_link )}}">
                                            @error('fb_link')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="x_link">X Link</label>
                                            <input type="text" class="form-control" id="x_link" name="x_link"
                                                   value="{{old('x_link',@$user->x_link )}}">
                                            @error('x_link')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="in_link">Facebook Link</label>
                                            <input type="text" class="form-control" id="in_link" name="in_link"
                                                   value="{{old('in_link',@$user->in_link )}}">
                                            @error('in_link')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wa_link">Whatsapp Link</label>
                                            <input type="text" class="form-control" id="wa_link" name="wa_link"
                                                   value="{{old('wa_link',@$user->wa_link )}}">
                                            @error('wa_link')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <input type="text" class="form-control" id="website" name="website"
                                                   value="{{old('website',@$user->website )}}">
                                            @error('website')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Password</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.profile-password.update') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" name="password" required>
                                            @error('password')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Confirm Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" name="password_confirmation" required>
                                            @error('password')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection

@push('js')
    <script>

        $(document).ready(function () {
            {{-- file Preview for avatar --}}
            $('.avatar-preview').css({
                'background-image': 'url({{ asset($user->avatar) }})',
                'background-size': 'cover',
                'background-position': 'center center',
            });

            {{-- file Preview for Banner --}}
            $('.banner-preview').css({
                'background-image': 'url({{ asset($user->banner) }})',
                'background-size': 'cover',
                'background-position': 'center center',
                'background-repeat': 'no-repeat'
            })
        });


        {{-- file Preview for avatar --}}
        $.uploadPreview({
            input_field: "#image-upload",   // Default: .image-upload
            preview_box: "#image-preview",  // Default: .image-preview
            label_field: "#image-label",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });
        {{-- file Preview for Banner --}}
        $.uploadPreview({
            input_field: "#image-upload-2",   // Default: .image-upload
            preview_box: "#image-preview-2",  // Default: .image-preview
            label_field: "#image-label-2",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });


    </script>
@endpush