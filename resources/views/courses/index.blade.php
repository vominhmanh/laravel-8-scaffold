@extends('layouts.app')

@section('content')
    <div class="all-courses">
        <!-- toolbar -->
        <div class="container">
            <form method="get" action="{{ route('courses.filter') }}" class="search-form">
                <div class="d-flex">
                    <a class="filter-button" id="filter-button" data-toggle="collapse" href="#filter-collapse"
                        role="button">
                        <i class="fas fa-filter"></i>
                        <span class="filter-txt">Filter</span>
                    </a>

                    <input type="text" name="keyword" id="search-form-input" placeholder="Search..."
                        class="search-form-input">
                    <div class="search-form-img"><i class="fas fa-search"></i></div>

                    <input type="submit" class="search-button" value="Search">
                </div>

                <div class="collapse mt-3 filter-collapse @if (Route::is('course.filter')) show @endif" id="filter-collapse">
                    <div class="filter-collapse-body">
                        <div class="row font-weight-bold text-secondary">
                            <div class="col-lg-1 text-center text-nowrap">Filter by</div>
                            <div class="col-lg-11 form-inline align-items-baseline filter-ingredients">
                                <div class="latest-oldest-radio" id="latest-oldest-radio">
                                    <input type="radio" id="radio-asc" name="created_at"
                                        value="{{ config('variables.asc') }}"
                                        {{ request('createdAt') == config('variables.asc') || null ? 'checked' : '' }}>
                                    <label class="p-0" for="radio-asc">Oldest</label>
                                    <input type="radio" id="radio-desc" name="createdAt"
                                        value="{{ config('variables.desc') }}"
                                        {{ request('createdAt') == config('variables.desc') ? 'checked' : '' }} checked>
                                    <label class='p-0' for="radio-desc">Latest</label>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="select-teacher" name="teacher">
                                        <option value="">Teacher</option>
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}" @if ($teacher->id == request('teacher')) selected @endif>
                                                {{ $teacher->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="learner" name="learners">
                                        <option value="">Number of participants</option>
                                        <option value={{ config('variables.asc') }}
                                            {{ request('learners') == config('variables.asc') ? 'selected' : '' }}>
                                            Ascending</option>
                                        <option value={{ config('variables.desc') }}
                                            {{ request('learners') == config('variables.asc') ? 'selected' : '' }}>
                                            Descending</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="select-learn-time" name="duration">
                                        <option value="">Duration</option>
                                        <option value={{ config('variables.asc') }}
                                            {{ request('duration') == config('variables.asc') ? 'selected' : '' }}>
                                            Ascending</option>
                                        <option value={{ config('variables.desc') }}
                                            {{ request('duration') == config('variables.asc') ? 'selected' : '' }}>
                                            Descending</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="lessons" name="lessons">
                                        <option value="">Number of lessons</option>
                                        <option value={{ config('variables.asc') }}
                                            {{ request('lessons') == config('variables.asc') ? 'selected' : '' }}>
                                            Ascending</option>
                                        <option value={{ config('variables.desc') }}
                                            {{ request('lessons') == config('variables.asc') ? 'selected' : '' }}>
                                            Descending</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="select-tag" name="tag">
                                        <option value="">Tags</option>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}" @if ($tag->id == request('tag')) selected @endif>
                                                {{ $tag->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="select-review" name="ratings">
                                        <option value="">Ratings</option>
                                        <option value={{ config('variables.asc') }}
                                            {{ request('ratings') == config('variables.asc') ? 'selected' : '' }}>
                                            Ascending</option>
                                        <option value={{ config('variables.desc') }}
                                            {{ request('ratings') == config('variables.asc') ? 'selected' : '' }}>
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
            <div class="row list-courses">
                @foreach ($courses as $course)
                    @include('courses._course')
                @endforeach
            </div>
            <div class="container mt-5 d-flex justify-content-end">
                {{ $courses->appends(request()->all())->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

@endsection
