<div class="modal fade login-register-modal @if ($errors->login->any() || $errors->register->any()) show-modal @endif " id="loginModal" tabindex="-1" role="dialog"
    aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-modal-custom">
            <div class="modal-body p-0">
                <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                </button>

                <ul class="nav nav-tabs p-0 login-register-bar" id="myTab" role="tablist">
                    <li class="nav-item w-50">
                        <a class="nav-link active login-nav-tab @if ($errors->login->any()) show-tab @endif" id="login-nav-tab"
                            data-toggle="tab" href="#login-tab" role="tab" aria-controls="home"
                            aria-selected="true">LOGIN</a>
                    </li>
                    <li class="nav-item w-50">
                        <a class="nav-link register-nav-tab @if ($errors->register->any()) show-tab @endif" id="register-nav-tab"
                            data-toggle="tab" href="#register-tab" role="tab" aria-controls="profile"
                            aria-selected="false">REGISTER</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login-tab" role="tabpanel">
                        <form class="container-fluid container-fixed" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="username-login" class="label-text-style">Email:</label>
                                <input type="email"
                                    class="form-control input-custom @error('email', 'login') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" id="username-login">
                                @error('email', 'login')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-login" class="label-text-style">Password:</label>
                                <input type="password" name="password"
                                    class="form-control input-custom @error('password', 'login') is-invalid @enderror"
                                    id="password-login">
                                @error('password', 'login')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="remember-me-and-forgot-password">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="remember" />
                                            <div class="state p-success">
                                                <!-- svg path -->
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path
                                                        d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"
                                                        style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label class="font-weight-bold">Remember me</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="forgot-password col-6">
                                        <a href="#" class="d-block forgot-password-txt">Forgot password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <input type="submit" value="LOGIN"
                                    class="green-btn hover-green-btn small-inset-shadow login-btn">
                            </div>
                            <div class="mt-4 mb-sm-5 mb-4 login-with-txt">Login with</div>
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <a href="#" class="login-with-google"><i class="fab fa-google-plus-g mr-2"></i>
                                    Google</a>
                                <a href="#" class="mb-5 login-with-facebook"><i class="fab fa-facebook-f mr-2"></i>
                                    Facebook</a>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="register-tab" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="container-fluid container-fixed" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="username-register" class="label-text-style">Fullname:</label>
                                <input type="text" class="form-control input-custom" name="name"
                                    value="{{ old('name') }}" id="username-register">
                                @error('name', 'register')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email-register" class="label-text-style">Email:</label>
                                <input type="email" class="form-control input-custom" name="email"
                                    value="{{ old('email') }}" id="email-register" aria-describedby="emailHelp">
                                @error('email', 'register')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-register" class="label-text-style">Password</label>
                                <input type="password" class="form-control input-custom" name="password"
                                    id="password-register">
                                @error('password', 'register')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="repeat-password-register" class="label-text-style">Repeat
                                    Password:</label>
                                <input type="password" class="form-control input-custom" name="password_confirmation"
                                    id="repeat-password-register">
                            </div>
                            <div class="d-flex mb-5 justify-content-center mt-5">
                                <input type="submit" value="REGISTER"
                                    class="green-btn hover-green-btn small-inset-shadow login-btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
