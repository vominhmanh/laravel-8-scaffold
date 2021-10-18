@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="profile-top d-flex justify-content-center">
                        <div class="avatar-div">
                            <img src="{{ $user->avatar }}" alt="avatar" id="avatar" class="avatar">
                            <label for="avatar_upload" class="camera" id="avatar_upload_label">
                                <i class="fas fa-camera"></i>
                            </label>
                            <label for="avatar_submit" class="camera hidden" id="avatar_submit_label">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </label>
                            <label class="avatar_upload_cancel cancel-btn hidden fas fa-times"
                                id="avatar_upload_cancel_label"></label>
                            <form action="{{ route('profile.avatar.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="file" accept="image/*" class="hidden" name="avatar_upload"
                                    id="avatar_upload">
                                <input type="submit" class="hidden" name="avatar_submit" id="avatar_submit">
                            </form>
                        </div>
                    </div>
                    <div class="profile-bottom">
                        <div class="mt-4 username">{{ $user->name }}</div>
                        <div class="email">{{ $user->email }}</div>
                        <hr class="profile-hr">
                        <div class="">
                            <div class="info-div">
                                <i class="icon-birthday fas fa-birthday-cake"></i>
                                <span class="birthday-content">{{ $user->dob ?? 'No infomation' }}
                                </span>
                            </div>
                            <hr class="profile-hr">
                            <div class="info-div">
                                <i class="fas fa-phone-alt icon-phone"></i>
                                <span class="phone-content">{{ $user->phone_number ?? 'No infomation' }}</span>
                            </div>
                            <hr class="profile-hr">
                            <div class="info-div">
                                <i class="fas fa-home icon-address"></i>
                                <span class="address-content">{{ $user->address ?? 'No infomation' }}</span>
                            </div>
                            <hr class="profile-hr">
                        </div>
                        <div class="introduction">
                            {{ $user->introduction ?? 'No infomation' }}
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 my-course">
                    <div class="profile-courses">
                        <div class="profile-title">
                            My courses
                        </div>
                        <div class="list-courses">
                            @foreach ($user->courses as $course)
                                <a href="{{ route('course.show', $course) }}" class="list-courses-item">
                                    <img class="img-course" src="{{ $course->logo }}" alt="img course">
                                    <div class="mt-2 course-title">{{ $course->name }}</div>
                                </a>
                            @endforeach
                            <a href="{{ route('course') }}" class="list-courses-item">
                                <div class="add-new-course">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="mt-2 add-course-title">Add course</div>
                            </a>
                        </div>
                    </div>
                    <div class="edit-profile">
                        <div class="profile-title">Edit profile</div>
                        <form action="{{ route('profile.infomation.update') }}" method="post" enctype="multipart/form-data" class="mt-3">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="input-label">Name:</label>
                                        <input type="text" class="form-control input-style" name="name"
                                            value="{{ $user->name }}" id="name">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email-input" class="input-label">Email:</label>
                                        <input type="email" class="form-control input-style" name="email" id="email-input"
                                            value="{{ $user->email }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthday-input" class="input-label">Date of birth:</label>
                                        <input type="date" class="form-control input-style" name="dob"
                                            value="{{ $user->dob }}" id="birthday-input">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone-input" class="input-label">Phone:</label>
                                        <input type="tel" class="form-control input-style" id="phone_number"
                                            value="{{ $user->phone_number }}" name="phone_number">
                                        @error('phone_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address-input" class="input-label">Address:</label>
                                        <input type="text" class="form-control input-style" name="address"
                                            value="{{ $user->address }}" id="address-input">
                                        @error('address_input')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="aboutme-input" class="input-label">About me:</label>
                                        <textarea class="form-control" name="introduction" id="description"
                                            rows="6">{{ $user->introduction }}</textarea>
                                        @error('introduction')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <input type="submit"
                                        class="float-right green-btn hover-green-btn small-inset-shadow detail-link-a"
                                        value='Update'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
