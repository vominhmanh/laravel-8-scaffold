<div class="summary">
    <div class="row">
        <div class="col-12 col-md-5">
            <div class="rating-overview">
                <div class="rating-overview-score">{{ round($course->reviews_avg_rating_point, 2) ?: '-' }}</div>
                <div class="rating-overview-stars">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $course->reviews_avg_rating_point)
                            <label class="fas fa-star"></label>
                        @else
                            @if ($i - $course->reviews_avg_rating_point > 0 && $i - $course->reviews_avg_rating_point < 1)
                                <label class="fas fa-star-half-alt"></label>
                            @else
                                <label class="far fa-star"></label>
                            @endif
                        @endif
                    @endfor
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <ul class="rating-detail">
                @for ($i = 5; $i >= 1; $i--)
                    <li class="rating-detail-list justify-content-between align-items-baseline">
                        <div class="rating-detail-list-title">{{ $i }} stars</div>
                        <div class="rating-detail-list-bar">
                            <div class="progress custom-progress">
                                <div class="progress-bar custom-progress-bar"
                                    style="width: {{ ($course->reviews->where('rating_point', $i)->count() / $course->reviews->count()) * 100 }}%"
                                    role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="{{ $course->reviews->count() }}"></div>
                            </div>
                        </div>
                        <span
                            class="detail-rating-number">{{ $course->reviews->where('rating_point', $i)->count() }}</span>
                    </li>
                @endfor
            </ul>
        </div>
    </div>

</div>
