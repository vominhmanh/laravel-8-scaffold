@extends('layouts.app')

@section('content')
    @include('utilities.breadcrumb', ['breadcrumbitems' => [
    'Home' => route('home'),
    'All courses' => route('course'),
    $course->name => '#',
    ]])

    <div class="course-detail">
        <div class="container">
            <div class="row p-0">
                <div class="col-md-8">
                    <div class="logo-course">
                        <img src="{{ $course->logo }}" alt="logo-course" class="logo-course-img">
                    </div>
                    <div class="info mt-3">
                        <ul class="nav nav-tabs info-nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="lessons-tab" data-toggle="tab" href="#lessons" role="tab"
                                    aria-controls="Lessons" aria-selected="true">Lessons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab"
                                    aria-controls="teacher" aria-selected="false">Teacher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                    aria-controls="Reviews" aria-selected="false">Reviews</a>
                            </li>
                        </ul>

                        <div class="tab-content mt-4" id="lessons-teacher-reviews-contents">
                            <div class="tab-pane fade show active" id="lessons" role="tabpanel"
                                aria-labelledby="lessons-tab">
                                <div class="lessons-toolbar mb-4">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-12">
                                            <form method="get" action="" class="search-form">
                                                <div class="d-flex">
                                                    <input type="text" name="keyword" id="search-form-input"
                                                        placeholder="Search..." class="search-form-input">
                                                    <div class="search-form-img"><i class="fas fa-search"></i></div>

                                                    <input type="submit" class="search-button" value="Search">
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-lg-1 col-md-12"></div>

                                        <div class="col-lg-4 col-md-12 mt-lg-0 mt-md-3">
                                            @if (isset($isJoinedCourse) && $isJoinedCourse)
                                                <div class="green-btn hover-green-btn small-inset-shadow join-course-btn"
                                                    id="joined-course">Joined</div>
                                            @else
                                                <form method="post" action="{{ route('course.join', [$course->id]) }}">
                                                    @csrf
                                                    <input type="submit"
                                                        class="green-btn hover-green-btn small-inset-shadow join-course-btn"
                                                        id="join-course" value="Join this course">
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="list-of-lessons my-3">
                                    @foreach ($course->lessons as $key => $lesson)
                                        <div class="row lesson">
                                            <div class="col-lg-10">
                                                <a href="#" class="lesson-title">
                                                    <span>Lesson {{ $key + 1 }}: </span>{{ $lesson->name }}</a>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="post" action="{{ route('course.join', [$course->id]) }}">
                                                    @csrf
                                                    <input type="submit"
                                                        class="green-btn hover-green-btn small-inset-shadow lesson-btn"
                                                        id="join-course" value="Learn">
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                    </ul>
                                </div>
                                <div class="container mt-5 pagination-custom d-flex justify-content-end">
                                    {{-- {{ $course->lessons->links() }} --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                                <div class="teacher-tab-title mb-3">
                                    Main Teachers
                                </div>
                                <div class="teacher">
                                    <div class="row">
                                        <div class="col-2 pr-0">
                                            <img src="{{ $course->teacher->avatar }}" class="img-teacher"
                                                alt="img-teacher">
                                        </div>
                                        <div class="col-9">
                                            <div class="d-flex h-100 flex-column justify-content-center">
                                                <div class="teacher-name">{{ $course->teacher->name }}</div>
                                                <div class="teacher-experience">Second Year Teacher</div>
                                                <div class="teacher-contact">
                                                    <a href="#" class="mr-1 icon-google"></a>
                                                    <a href="#" class="mr-1 ml-1 icon-facebook"></a>
                                                    <a href="#" class="ml-1 icon-slack"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="teacher-info">{{ $course->teacher->description }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">...</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-description">
                        <div class="course-description-title">Course description</div>
                        <div class="course-description-content">{{ $course->description }}</div>
                    </div>
                    <div class="course-info mt-3">
                        <div class="course-info-item">
                            <img src="{{ asset('img/learners.png') }}" alt="learners">
                            <span class="sub-title">Learners: <span class="sub-title-value">
                                    {{ $course->users_count }}</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('img/lessons.png') }}" alt="lessons">
                            <span class="sub-title">Lessons: <span class="sub-title-value">
                                    {{ $course->lessons_count }} lesson</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('img/times.png') }}" alt="times">
                            <span class="sub-title">Times: <span class="sub-title-value">
                                    {{ $course->lessons_sum_duration }}
                                    hours</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('img/tags.png') }}" alt="tags">
                            <span class="sub-title">Tags:
                                @foreach ($course->tags as $tag)
                                    <a href="#" class="sub-title-value"> #{{ $tag->name }}</a>
                                @endforeach
                            </span>

                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('img/price.png') }}" alt="price">
                            <span class="sub-title">Price:
                                <span class="sub-title-value">{{ $course->price }} đ</span>
                            </span>
                        </div>
                    </div>
                    <div class="other-courses mt-3">
                        <div class="other-courses-title">Other Courses</div>
                        {{-- <div class="list-other-course-suggest">
                                    @foreach ($otherCourses as $key => $otherCourse)
                                        <a href="#" class="a-course">
                                            {{ $key + 1 }}. {{ $otherCourse->title }}
                                        </a>
                                    @endforeach
                                </div> --}}
                        <div class="text-center">
                            <a href="#" class="green-btn hover-green-btn small-inset-shadow detail-link-a">View other
                                courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection