@extends('layouts.app')

@section('content')
    @include('utilities.breadcrumb', ['breadcrumbitems' => [
    'Home' => route('home'),
    'All courses' => route('course'),
    $lesson->course->name => route('course.show', [$lesson->course]),
    $lesson->name => '#'
    ]])

    <div class="course-detail">
        <div class="container">
            <div class="row p-0">
                <div class="col-md-8">
                    <div class="logo-course text-center">
                        <iframe width="100%" height="100%" src="{{ $lesson->video_link }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="info mt-3">
                        <ul class="nav nav-tabs info-nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="description-tab" onclick="return false;" data-toggle="tab"
                                    href="#description" role="tab" aria-controls="Lessons"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="teacher-tab" onclick="return false;" data-toggle="tab"
                                    href="#teacher" role="tab" aria-controls="teacher" aria-selected="false">Teacher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="programs-tab" onclick="return false;" data-toggle="tab"
                                    href="#programs" role="tab" aria-controls="Programs" aria-selected="true">Programs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reviews-tab" onclick="return false;" data-toggle="tab"
                                    href="#comments" role="tab" aria-controls="Reviews" aria-selected="false">Comments</a>
                            </li>
                        </ul>

                        <div class="tab-content mt-4" id="lessons-teacher-reviews-contents">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="teacher-tab-title mb-3">
                                    Description
                                </div>
                                <div class="col-12">
                                    <div class="teacher-info">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Laudantium soluta harum, facere ipsa deleniti suscipit cumque, omnis placeat
                                        sapiente odio, ab eius quam reprehenderit. Optio facilis reprehenderit vero iusto
                                        in.</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="programs" role="tabpanel" aria-labelledby="programs-tab">
                                <div class="teacher-tab-title mb-3">
                                    Programs
                                </div>
                                <div class="list-of-lessons my-3">
                                    @foreach ($lesson->programs as $key => $program)
                                        <div class="row lesson align-items-baseline">
                                            <div class="col-lg-10">
                                                <a href="{{ route('lesson.download', ['lesson' => $lesson, 'program' => $program]) }}"
                                                    class="lesson-title">
                                                    {{ $program->name }}
                                                </a>
                                            </div>
                                            <div class="col-lg-2">
                                                <form method="get"
                                                    action="{{ route('lesson.download', ['lesson' => $lesson, 'program' => $program]) }}">
                                                    <input type="submit"
                                                        class="green-btn hover-green-btn small-inset-shadow lesson-btn"
                                                        id="join-course" value="Download">
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mt-5 d-flex justify-content-end">
                                    {{-- {{ $lessons->links() }} --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                                <div class="teacher-tab-title mb-3">
                                    Main Teachers
                                </div>
                                <div class="teacher">
                                    <div class="row">
                                        <div class="col-2 pr-0">
                                            <img src="{{ $lesson->course->teacher->avatar }}" class="img-teacher"
                                                alt="img-teacher">
                                        </div>
                                        <div class="col-9">
                                            <div class="d-flex h-100 flex-column justify-content-center">
                                                <div class="teacher-name">{{ $lesson->course->teacher->name }}</div>
                                                <div class="teacher-experience">Second Year Teacher</div>
                                                <div class="teacher-contact">
                                                    <a href="#" class="mr-1 icon-google"></a>
                                                    <a href="#" class="mr-1 ml-1 icon-facebook"></a>
                                                    <a href="#" class="ml-1 icon-slack"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="teacher-info">{{ $lesson->course->teacher->introduction }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="teacher-tab-title my-3">
                                    {{ $lesson->comments->count() }} Comments
                                </div>

                                <div class="review-posts">
                                    @foreach ($comments as $comment)
                                        @include('reviews.post', ['review' => $comment])
                                    @endforeach

                                    <div class="mt-5 d-flex justify-content-end">
                                        {{ $comments->appends(request()->all())->fragment('comments')->links() }}
                                    </div>
                                </div>

                                <div class="teacher-tab-title my-3">
                                    Leave a comment
                                </div>
                                <form method="post" action="{{ route('lesson.comment', [$lesson]) }}">
                                    @csrf
                                    @include('reviews.leave_a_comment')
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-info">
                        <div class="course-info-item">
                            <img src="{{ asset('images/lessons.png') }}" alt="lessons">
                            <span class="subtitle">Lesson: <span class="subtitle-value">
                                    {{ $lesson->name }}</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/course.png') }}" alt="learners">
                            <span class="subtitle">Course: <span class="subtitle-value">
                                    {{ $lesson->course->name }}</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/learners.png') }}" alt="learners">
                            <span class="subtitle">Learners: <span class="subtitle-value">
                                    {{ $lesson->course->users_count }}</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/time.png') }}" alt="times">
                            <span class="subtitle">Duration: <span class="subtitle-value">
                                    {{ floor($lesson->duration / 60) }}
                                    hours {{ $lesson->duration % 60 }} minutes</span></span>
                        </div>
                        <div class="course-info-item">
                            <img src="{{ asset('images/tags.png') }}" alt="tags">
                            <span class="subtitle">Tags:
                                @foreach ($lesson->course->tags as $tag)
                                    <a href="{{ route('course.filter', ['tag' => $tag]) }}"
                                        class="subtitle-value subtitle-tag"> #{{ $tag->name }}</a>
                                @endforeach
                            </span>

                        </div>
                    </div>
                    <div class="other-courses-suggestion my-3">
                        <div class="other-courses-suggestion-title">Other Lessons</div>
                        <div class="list-of-lessons">
                            @foreach ($lesson->course->lessons as $key => $otherLesson)
                                <div class="lesson">
                                    <a href="#" class="lesson-title">
                                        {{ $key + 1 }}. {{ $otherLesson->name }}
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
@endsection
