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
        @auth
            @if (Route::is('lesson*'))
                <button class="btn-reply" type="button" data-toggle="collapse"
                    data-target="{{ '#review-' . $review->id }}" aria-expanded="false" aria-controls="collapseExample">
                    Reply
                </button>
            @endif
        @endauth

        <div class="collapse mt-4">
            <div class="card card-body">
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <label for="write-comment" class="title-box-comment">Reply</label>
                        <textarea class="form-control write-reply" id="{{ 'write-reply-' . $review->id }}"
                            name="write_reply" rows="5" required></textarea>
                    </div>

                    <input type="hidden" name="reviewId" class="review-id" value="{{ $review->id }}">

                    <div class="float-right d-flex">
                        <div class="btn-close-reply" data-review-id="{{ $review->id }}">Close</div>
                        <input type="submit" data-user-id="{{ Auth::id() }}" data-review-id="{{ $review->id }}"
                            class="btn-send-reply ml-2" value="Reply">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="replies-list">
        {{-- @if (count($review->replies) > 0)
                    @foreach ($review->replies as $reply)
                        @include('reviews.reply', ['reply' => $reply, 'review' => $review])
                    @endforeach
                @endif --}}
    </div>
</div>
