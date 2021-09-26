<div class="row list-courses">
    @foreach ($courses as $course)
        <div class="col-md-6 mt-5">
            <div class="card list-courses-card">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="course-card-top d-flex flex-row">
                        <img src="{{ $course->logo }}" alt="course img" class="course-card-top-img">
                        <div class="course-card-top-content w-100">
                            <a href="#" class="course-card-top-content-title">{{ $course->name }}</a>
                            <div class="course-card-top-content-description">{{ $course->description }}</div>
                            <div class="text-right">
                                <a href="#" class="green-btn hover-green-btn small-inset-shadow detail-link-a">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="course-card-bottom">
                        <div class="row justify-content-between 100 m-0 mt-2">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <span class="course-card-bottom-subtitle">Learners</span>
                                <span class="course-card-bottom-number">1,234</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <span class="course-card-bottom-subtitle">Lessons</span>
                                <span class="course-card-bottom-number">5,678</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <span class="course-card-bottom-subtitle">Quizzes</span>
                                <span class="course-card-bottom-number">4,342</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

