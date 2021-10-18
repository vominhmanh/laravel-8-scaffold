<div class="leave_a_comment">
    <div class="form-group">
        <textarea class="form-control write-reply" placeholder="Type your comment here..." name="comment" rows="5"
            required></textarea>
    </div>

    <div class="d-flex justify-content-between flex-wrap">
        @if (Route::is('course*'))
            <div class="rating-css pb-3">
                <div class="star-icon">
                    <input type="radio" name="rating_point" value="1" id="rating1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" name="rating_point" value="2" id="rating2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" name="rating_point" value="3" id="rating3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" name="rating_point" value="4" id="rating4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" name="rating_point" value="5" id="rating5" checked>
                    <label for="rating5" class="fa fa-star"></label>
                </div>
            </div>
        @endif
        <div>
            <input type="submit" name="submit" class="green-btn hover-green-btn small-inset-shadow detail-link-input"
                value="Send">
        </div>
    </div>
</div>
