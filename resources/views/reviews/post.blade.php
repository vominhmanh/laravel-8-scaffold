<div class="review-post">
    <div class="review-post-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <img class="img-comment" src="{{ asset($review->user->avatar) }}" alt="avatar">
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="user-name col-md-12 col-lg-auto">{{ $review->user->name }}</div>
                    <div class="rating-points col-md-12 col-lg-auto">
                        @for ($i = 1; $i <= $review->rating_point; $i++)
                            <i class="fas fa-star mr-1 ml-1"></i>
                        @endfor
                    </div>
                    <div class="created-at col-md-12 col-lg-auto">
                        {{ $review->created_at }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="review-post-content">
        {{ $review->comment }}
    </div>
    <div class="review-post-footer">
        @if (Route::is('lesson*') && $review->replies)
            @auth
                <button class="btn-reply btn-sm" type="button" data-toggle="collapse"
                    data-target="#review-{{ $review->id }}" aria-expanded="false" aria-controls="collapseExample">
                    Reply
                </button>
            @endauth
            <div class="replies-list">
                @foreach ($review->replies as $reply)
                    @include('reviews.post', ['review' => $reply])
                @endforeach
            </div>
            @auth
                <div class="collapse mt-4" id="review-{{ $review->id }}">
                    <form method="post" action="{{ route('lesson.reply', [$lesson, $comment]) }}">
                        @csrf
                        @include('reviews.leave_a_comment')
                    </form>
                </div>
            @endauth
        @endif
    </div>
</div>
