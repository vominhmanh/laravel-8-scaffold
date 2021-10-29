<div class="col-md-6 mt-5">
    <div class="card list-courses-card">
        <div class="card-body d-flex flex-column justify-content-between">
            <div class="course-card-top d-flex flex-row">
                <img src="{{ $course->logo }}" alt="course img" class="course-card-top-img">
                <div class="course-card-top-content w-100">
                    <a href="{{ route('courses.show', [$course->id]) }}" class="course-card-top-content-title">{{ $course->name }}</a>
                    <div><b>Teacher: {{ $course->teacher->name }}</b> </div>
                    <div class="course-card-top-content-description">{{ $course->description }}</div>
                    <div class="text-right">
                        <a href="{{ route('courses.show', [$course->id]) }}" class="green-btn hover-green-btn small-inset-shadow detail-link-a">More</a>
                    </div>
                </div>
            </div>
            <div class="course-card-bottom">
                <div class="row justify-content-between 100 m-0 mt-2">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <span class="course-card-bottom-subtitle">Learners</span>
                        <span class="course-card-bottom-number">{{ $course->users_count }}</span>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <span class="course-card-bottom-subtitle">Lessons</span>
                        <span class="course-card-bottom-number">{{ $course->lessons_count }}</span>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <span class="course-card-bottom-subtitle">Ratings</span>
                        <span
                            class="course-card-bottom-number">{{ round($course->reviews_avg_rating_point, 2) ?: '-' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
