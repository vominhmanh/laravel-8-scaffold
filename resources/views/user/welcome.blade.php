@extends('user.layouts.app')

@section('content')
    <div class="align d-lg-none d-md-none d-sm-none"></div>

    <banner class="header-banner shadow-lg">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/hapo_learn_banner.png" alt="First slide">

                    <div class="header-banner-title">
                        <h1 class="display-4 learn-anytime-anywhere">Learn Anytime, Anywhere</h1>
                        <h1 class="font-weight-bold at-hapolearn">at HapoLearn <span><img src="images/logo_small.png">
                                !</span></h1>
                        <p class='description'>Interactive lessons,"on-the-go"<br>practive,peer support.</p>

                        <a class="green-btn hover-green-btn large-inset-shadow start-learning">Start
                            Learning Now!</a>

                    </div>
                </div>
            </div>
        </div>
    </banner>

    <div class="header-footer"></div>

    <div class="outstanding-session courses-session">
        <div class="container-fluid  container-fixed">
            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-light">
                            <img src="images/frontend.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML/CSS/JS</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-danger">
                            <img src="images/java.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Java TUTORIAL</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center badge-success">
                            <img src="images/php.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">PHP TUTORIAL</h5>
                            <p class="card-text"> Some quick example text to build on the card title and make up
                                the
                                card's content. build on the card tit.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="other-courses-session courses-session">
        <div class="container-fluid  container-fixed">
            <div class="title other-courses-title text-center font-weight-bold">
                Other Courses
                <hr class="text-center title-underline">
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-light">
                            <img src="images/frontend.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML/CSS/JS </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-light">
                            <img src="images/frontend.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML/CSS/JS</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="card outstanding-course-card">
                        <div class="card-img d-flex align-items-center justify-content-center bg-light">
                            <img src="images/frontend.png" alt="html/css/js">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML/CSS/JS</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content.</p>
                            <div class="text-center course-link">
                                <a href="#" class="green-btn hover-green-btn large-inset-shadow course-link-a">Take
                                    this
                                    course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-other-courses-title text-center font-weight-bold">
                <a href="#" class="view-other-courses m-3">View all our courses
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
            </a>
        </div>
    </div>
    <div class="why-hapolearn">
        <banner class="banner-why-hapo">
            <div id="carouseWhyHapolearnIndicators" class="carousel slide" data-ride="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselWhyHapolearnIndicators" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div>
                            <img class="d-block w-100 background" src="images/whyhapo_background.png" alt="First slide">
                            <img class="decor laptop-large" src="images/laptop_large.png" alt="laptop-large">
                            <img class="decor laptop-small" src="images/laptop_small.png" alt="laptop-small">
                            <div class="decor why-hapolearn">Why HapoLearn?</div>
                            <div class="decor reason">
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                                <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice,
                                    peer support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </banner>
    </div>
    <div class="feedback">
        <div class="container-fluid container-fixed">
            <div class="title feedback-title text-center font-weight-bold">Feedback
                <hr class="text-center title-underline">
            </div>

            <p class="feedback-description mx-auto text-center"> What other students turned professionals have to say
                about
                us after
                learning with us and reaching their goals</p>
            <div class="feedback-list">
                <div class="p-sm-3 comment-div col-xl-6 col-lg-6">
                    <div class="comment">
                        <p class="comment-text">
                            “A wonderful course on how to start. Eddie beautifully conveys all
                            essentials of a becoming a good Angular developer. Very glad to have taken this
                            course.
                            Thank you Eddie Bryan.”
                        </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="mt-3 customer">
                        <div class="customer-avatar">
                            <img width="100%" class="custom-avatar-img" src="./images/avatar.png" alt="avatar">
                        </div>
                        <div class="ml-3">
                            <div class="customer-name">Nguyễn Văn An</div>
                            <div class="customer-languge">PHP</div>
                            <div class="customer-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-sm-3 comment-div col-xl-6 col-lg-6">
                    <div class="comment">
                        <p class="comment-text">
                            “A wonderful course on how to start. Eddie beautifully conveys all
                            essentials of a becoming a good Angular developer. Very glad to have taken this
                            course.
                            Thank you Eddie Bryan.”
                        </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="mt-3 customer">
                        <div class="customer-avatar">
                            <img width="100%" class="custom-avatar-img" src="./images/avatar.png" alt="avatar">
                        </div>
                        <div class="ml-3">
                            <div class="customer-name">Hoang Anh Nguyen</div>
                            <div class="customer-languge">PHP</div>
                            <div class="customer-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-sm-3 comment-div col-xl-6 col-lg-6">
                    <div class="comment">
                        <p class="comment-text">
                            “A wonderful course on how to start. Eddie beautifully conveys all
                            essentials of a becoming a good Angular developer. Very glad to have taken this
                            course.
                            Thank you Eddie Bryan.”
                        </p>
                    </div>
                    <div class="mt-3 customer">
                        <div class="customer-avatar">
                            <img width="100%" class="custom-avatar-img" src="./images/avatar.png" alt="avatar">
                        </div>
                        <div class="ml-3">
                            <div class="customer-name">Võ Minh Mạnh</div>
                            <div class="customer-languge">PHP</div>
                            <div class="customer-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-sm-3 comment-div col-xl-6 col-lg-6">
                    <div class="comment">
                        <p class="comment-text">
                            “A wonderful course on how to start. Eddie beautifully conveys all
                            essentials of a becoming a good Angular developer. Very glad to have taken this
                            course.
                            Thank you Eddie Bryan.”
                        </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="mt-3 customer">
                        <div class="customer-avatar">
                            <img width="100%" class="custom-avatar-img" src="./images/avatar.png" alt="avatar">
                        </div>
                        <div class="ml-3">
                            <div class="customer-name">Hoang Anh Nguyen</div>
                            <div class="customer-languge">PHP</div>
                            <div class="customer-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="become-a-member-banner justify-content-center text-center">
        <div class="banner-text">
            <div class="become-a-member-tilte">Become a member of our
                growing community!</div>
            <a href="#" class="become-a-member-button">Start Learning Now!</a>
        </div>
    </div>

    <div class="statistic">
        <div class="container-fluid  container-fixed">
            <div class="title statistic-title">Statistic
                <hr class="text-center title-underline">
            </div>

            <div class="statistic-detail text-center d-flex justify-content-between">
                <div class="statistic-detail-part">
                    <div class="statistic-subtitle">Courses</div>
                    <div class="statistic-number">1,586</div>
                </div>
                <div class="statistic-detail-part">
                    <div class="statistic-subtitle">Lessons</div>
                    <div class="statistic-number">2,689</div>
                </div>
                <div class="statistic-detail-part">
                    <div class="statistic-subtitle">Learners</div>
                    <div class="statistic-number">16,882</div>
                </div>
            </div>
        </div>
    </div>


    <!--Login Modal -->
    @guest
        <div class="modal fade login-register-modal" id="loginModal" tabindex="-1" role="dialog"
            aria-labelledby="loginModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content border-modal-custom">
                    <div class="modal-body p-0">
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times-circle"></i>
                        </button>

                        <ul class="nav nav-tabs p-0 login-register-bar" id="myTab" role="tablist">
                            <li class="nav-item w-50">
                                <a class="nav-link active login-nav-tab" id="login-nav-tab" data-toggle="tab" href="#login-tab"
                                    role="tab" aria-controls="home" aria-selected="true">LOGIN</a>
                            </li>
                            <li class="nav-item w-50">
                                <a class="nav-link register-nav-tab" id="register-nav-tab" data-toggle="tab"
                                    href="#register-tab" role="tab" aria-controls="profile" aria-selected="false">REGISTER</a>
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

        @if ($errors->login->any())
            <script>
                $('#loginModal').modal('show');
                $('#login-nav-tab').tab('show');
            </script>
        @endif

        @if ($errors->register->any())
            <script>
                $('#loginModal').modal('show');
                $('#register-nav-tab').tab('show');
            </script>
        @endif
    @endguest

@endsection
