@extends('layouts.app')

@section('content')
    <div class="all-courses">
        <!-- toolbar -->
        <div class="container">
            <form method="get" action="{{ route('course.filter') }}" class="search-form">
                <div class="d-flex">
                    <a class="filter-button" id="filter-button" data-toggle="collapse" href="#filter-collapse"
                        role="button">
                        <i class="fas fa-filter"></i>
                        <span class="filter-txt">Filter</span>
                    </a>

                    <input type="text" name="search_input" id="search-form-input" placeholder="Search..."
                        class="search-form-input">
                    <div class="search-form-img"><i class="fas fa-search"></i></div>

                    <input type="submit" class="search-button" value="Tìm kiếm">
                </div>

                <div class="collapse mt-3 filter-collapse @if (Route::is('course.filter')) show @endif" id="filter-collapse">
                    <div class="filter-collapse-body">
                        <div class="row font-weight-bold text-secondary">
                            <div class="col-lg-1 text-center text-nowrap">Lọc theo</div>
                            <div class="col-lg-11 form-inline align-items-baseline filter-ingredients">
                                <div class="latest-oldest-radio" id="latest-oldest-radio">
                                    <input type="radio" id="radio-asc" name="created_at" value="asc"
                                        {{ request('created_at') == 'asc' || null ? 'checked' : null }}>
                                    <label class="p-0" for="radio-asc">Mới nhất</label>
                                    <input type="radio" id="radio-desc" name="created_at" value="desc"
                                        {{ request('created_at') == 'desc' ? 'checked' : null }}>
                                    <label class='p-0' for="radio-desc">Cũ nhất</label>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="select-teacher" name="teacher">
                                        <option value="">Teacher</option>
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->teacher_name }}" @if ($teacher->teacher_name == request('teacher')) selected @endif>
                                                {{ $teacher->teacher_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="learner" name="learners">
                                        <option value="">Number of participants</option>
                                        <option value="asc" {{ request('learners') == 'asc' ? 'selected' : null }}>
                                            Ascending</option>
                                        <option value="desc" {{ request('learners') == 'desc' ? 'selected' : null }}>
                                            Descending</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="select-learn-time" name="duration">
                                        <option value="">Duration</option>
                                        <option value="asc" {{ request('duration') == 'asc' ? 'selected' : null }}>
                                            Ascending</option>
                                        <option value="desc" {{ request('duration') == 'desc' ? 'selected' : null }}>
                                            Descending</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="lessons" name="number_of_lesson">
                                        <option value="">Number of lessons</option>
                                        <option value="asc" {{ request('duration') == 'asc' ? 'selected' : null }}>
                                            Ascending</option>
                                        <option value="desc" {{ request('duration') == 'desc' ? 'selected' : null }}>
                                            Descending</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="select-tag" name="tag">
                                        <option value="">Tags</option>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->name }}" @if ($tag->name == request('tag')) selected @endif>
                                                {{ $tag->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="select-review" name="reviews">
                                        <option value="">Ratings</option>
                                        <option value="asc" {{ request('reviews') == 'asc' ? 'selected' : null }}>
                                            Ascending</option>
                                        <option value="desc" {{ request('reviews') == 'desc' ? 'selected' : null }}>
                                            Descending</option>
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
            @include('course._course')
        </div>        
    </div>

@endsection
