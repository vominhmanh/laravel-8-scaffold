@extends('layouts.app')

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
                @foreach ($outstandingCourses as $course)
                    <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                        <div class="card outstanding-course-card">
                            <div class="card-img d-flex align-items-center justify-content-center bg-light">
                                <img src="{{ $course->logo }}" width='100%' alt="html/css/js">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $course->name }}</h5>
                                <p class="card-text">{{ $course->description }}</p>
                                <div class="text-center course-link">
                                    <a href="{{ route('course.show', $course) }}"
                                        class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                        course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                @foreach ($randomCourses as $course)
                    <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                        <div class="card outstanding-course-card">
                            <div class="card-img d-flex align-items-center justify-content-center bg-light">
                                <img src="{{ $course->logo }}" width="100%" alt="html/css/js">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $course->name }}</h5>
                                <p class="card-text">{{ $course->description }}</p>
                                <div class="text-center course-link">
                                    <a href="{{ route('course.show', $course) }}"
                                        class="green-btn hover-green-btn large-inset-shadow course-link-a">Take this
                                        course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="view-other-courses-title text-center font-weight-bold">
                <a href="{{ route('course') }}" class="view-other-courses m-3">View all our courses
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
                    <div class="statistic-number">{{ $courseCount }}</div>
                </div>
                <div class="statistic-detail-part">
                    <div class="statistic-subtitle">Lessons</div>
                    <div class="statistic-number">{{ $lessonCount }}</div>
                </div>
                <div class="statistic-detail-part">
                    <div class="statistic-subtitle">Learners</div>
                    <div class="statistic-number">{{ $learnerCount }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
