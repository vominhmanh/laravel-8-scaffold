@extends('layouts.app')

@section('content')
    <div class="all-courses">
        <!-- toolbar -->
        <div class="container">
            <form method="get" action="" onsubmit="loadCourses({{ route('course.filter') }})" class="search-form">
                <div class="d-flex">
                    <a class="filter-button" id="filter-button" data-toggle="collapse" href="#filter-collapse"
                        role="button">
                        <i class="fas fa-filter"></i>
                        <span class="filter-txt">Filter</span>
                    </a>

                    <input type="text" name="search_input" id="search-form-input" placeholder="Search..."
                        class="search-form-input">
                    <div class="search-form-img"><i class="fas fa-search"></i></div>

                    <button type="submit" class="search-button">Tìm kiếm</button>
                </div>

                <div class="collapse mt-3 filter-collapse" id="filter-collapse">
                    <div class="filter-collapse-body">
                        <div class="row font-weight-bold text-secondary">
                            <div class="col-lg-1 text-center text-nowrap">Lọc theo</div>
                            <div class="col-lg-11 flex-wrap form-inline filter-ingredients align-items-baseline">
                                <div class="newest-oldest-radio" id="newest-oldest-radio">
                                    <input type="radio" id="radio-newest" name="newest_oldest" value="">
                                    <label class="p-0" for="radio-newest">Mới nhất</label>

                                    <input type="radio" id="radio-oldest" name="newest_oldest" value="">
                                    <label class='p-0' for="radio-oldest" class="float-lg-right">Cũ nhất</label>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select-teacher" id="select-teacher" name="teacher">
                                        <option value="">Teacher</option>
                                        <option value="">Nguyễn Văn An </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select-number-of-learner" id="select-number-of-learner"
                                        name="learner">
                                        <option value="">Số người học</option>
                                        <option value="">Tăng dần</option>
                                        <option value="">Giảm dần</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select-learn-time" id="select-learn-time" name="time"
                                        >
                                        <option value="">Thời gian học</option>
                                        <option value="">Tăng dần</option>
                                        <option value="">Giảm dần</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select-number-of-lesson" id="lesson"
                                        name="number_of_lesson">
                                        <option value="">Số bài học</option>
                                        <option value="">Tăng dần</option>
                                        <option value="">Giảm dần</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select-tag" id="select-tag" name="tag">
                                        <option value="">Tags</option>
                                        <option value="">Tags</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select-review" id="select-review" name="review">
                                        <option value="">Review</option>
                                        <option value="">Tăng dần</option>
                                        <option value="">Giảm dần</option>
                                    </select>
                                </div>
                                <input class="reset-btn" id="reset-filter" type="reset" value="reset">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- list course -->
        <div class="courses container">
            @include('courses._course')
        </div>


        <!-- pagging -->
        <div class="container mt-5 pagination-custom d-flex justify-content-end">

        </div>
    </div>

@endsection
