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
                    <div class="logo-course text-center">
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
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <form method="get" action="" class="search-form">
                                            <div class="d-flex">
                                                <input type="text" name="keyword" id="search-form-input"
                                                    placeholder="Search..." class="search-form-input">
                                                <div class="search-form-img"><i class="fas fa-search"></i></div>
                                                <input type="submit" class="search-button" value="Search">
                                            </div>
                                        </form>
                                        @if ($course->isJoined)
                                            <span class=" gray-btn small-inset-shadow detail-link-input order-1"
                                                id="joined-course">
                                                Joined</span>
                                        @else
                                            <form class="" method="post"
                                                action="{{ route('course.join', [$course]) }}">
                                                @csrf
                                                <input type="submit"
                                                    class="green-btn hover-green-btn small-inset-shadow detail-link-input join-input"
                                                    id="join-course" value="Join this course">
                                            </form>
                                        @endif
                                    </div>
                                </div>
                                <div class="list-of-lessons my-3">
                                    @foreach ($lessons as $key => $lesson)
                                        <div class="row lesson align-items-baseline">
                                            <div class="col-lg-10">
                                                <a href="#" class="lesson-title">
                                                    <span>Lesson
                                                        {{ ($lessons->currentPage() - 1) * config('variables.lesson_pagination') + $key + 1 }}:
                                                    </span>
                                                    {{ $lesson->name }}
                                                </a>
                                            </div>
                                            @if ($course->isJoined)
                                                <div class="col-lg-2">
                                                    <form method="post"
                                                        action="{{ route('course.join', $course) }}">
                                                        @csrf
                                                        @if (false)
                                                            <input type="submit"
                                                                class="gray-btn small-inset-shadow lesson-btn"
                                                                id="join-course" value="Learned">
                                                        @else
                                                            <input type="submit"
                                                                class="green-btn hover-green-btn small-inset-shadow lesson-btn"
                                                                id="join-course" value="Learn">
                                                        @endif
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mt-5 d-flex justify-content-end">
                                    {{ $lessons->links() }}
                                </div>
                            </div>
                            <div class="
                                    tab-pane fade" id="teacher" role="tabpanel"
                                aria-labelledby="teacher-tab">
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
                                            <div class="teacher-info">{{ $course->teacher->introduction }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">...
                            </div>
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
                            <img src="{{ asset('images/course.png') }}" alt="course">
                            <span class="subtitle">Course: <span class="subtitle-value">
                                    {{ $course->name }}</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/learners.png') }}" alt="learners">
                            <span class="subtitle">Learners: <span class="subtitle-value">
                                    {{ $course->users_count }}</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/lessons.png') }}" alt="lessons">
                            <span class="subtitle">Lessons: <span class="subtitle-value">
                                    {{ $course->lessons_count }} lessons</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/time.png') }}" alt="times">
                            <span class="subtitle">Times: <span class="subtitle-value">
                                    {{ $course->hours }} hours {{ $course->minutes }} minutes</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/tags.png') }}" alt="tags">
                            <span class="subtitle">Tags:
                                @foreach ($course->tags as $tag)
                                    <a href="{{ route('course.filter', ['tag' => $tag]) }}"
                                        class="subtitle-value subtitle-tag"> #{{ $tag->name }}</a>
                                @endforeach
                            </span>

                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/price.png') }}" alt="price">
                            <span class="subtitle">Price:
                                <span class="subtitle-value">{{ $course->price ?? Free }} đ</span>
                            </span>
                        </div>
                    </div>
                    <div class="other-courses-suggestion my-3">
                        <div class="other-courses-suggestion-title">Other Courses</div>
                        <div class="list-of-lessons">
                            @foreach ($otherCourses as $key => $otherCourse)
                                <div class="lesson">
                                    <a href="#" class="lesson-title">
                                        {{ $key + 1 }}. {{ $otherCourse->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div class="text-center">
                            <a href="{{ route('course') }}"
                                class="green-btn hover-green-btn small-inset-shadow detail-link-a">View other
                                courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
