@include('templates/header')
<div class="col">
    <div class="row justify-content-center p-1 p-md-3">
        <div class="card px-4 text-start">
            <?php
            $stars_count = App\Settings\Reviews::stars();
            $ratings = range(1, $stars_count);
            $rating = old('rating') ?? @$review->rating;
            ?>
            @include('components/notification')
            <form action="{{ route($route) }}" method="post">
                @csrf
                <input type="hidden" name="review_id" value="{{ @$review->id }}">
                <input type="hidden" name="post_id" value="{{ @$post->id }}">
                <h2>You are reviewing {{ $post->company_name }}</h2>
                <p>Your review will help millions of consumers find trustworthy online businesses and avoid scams.</p>

                <label for="review-title" class="mt-3">Title of the review</label>
                <input type="text" name="title" class="form-control mb-3 @error('title', 'review') is-invalid @enderror" value="{{ old('title') ?? @$review->title }}" id="review-title" placeholder="Review headline">
                @error('title', 'review')
                <div class="alert alert-danger">
                    {{ $errors->review->get('title')[0] }}
                </div>
                @enderror
                <?php
                $content_count = @str_word_count( old('content') ?: $review->content ) ?: 0;
                ?>
                <div class="mb-4">
                    <label for="review-textarea" class="mt-3">Your review (Max {{ $max_words }} words)</label>
                    <textarea max-words="{{ $max_words }}" name="content" rows="6" class="form-control mb-2 @error('content', 'review') is-invalid @enderror">{{ old('content') ?? @$review->content }}</textarea>Words count: <span id="wordCount">{{ $content_count }}</span>
                    @error('content', 'review')
                    <div class="alert alert-danger">
                        {{ $errors->review->get('content')[0] }}
                    </div>
                    @enderror
                </div>
                <script>
                    wordCounter('[id="content"]', '#wordCount')
                </script>
                <p class="mb-0">
                <h6 class="mb-2">Overall rating</h6>
                <input type="hidden" id="rating" name="rating" class="" value="{{ $rating ?? 0 }}">
                <div id="stars" class="mb-2 row" style="cursor:pointer">
                    <div class="col-12 col-lg-8 mb-3">
                        @foreach($ratings as $rating_temp)
                        <i style="font-size:24px" class="rating-star ti-star <?= ($rating_temp <= $rating)  ? 'text-lc-warning' : ('') ?>" id="{{ $rating_temp }}" title="Rate {{ $rating_temp }}/10"></i>
                        @endforeach
                        <span id="rating-value"></span>
                    </div>
                    <div class="col-12 col-lg-4">
                        <span id="clear-rating" class="ml-3 border p-2 rounded"> {{ $rating > 0 ? 'Clear rating' : 'Click stars to rate' }} </span>
                    </div>

                    <script>
                        const ratings = <?php echo json_encode($ratings) ?>;
                        const ratingInput = document.getElementById('rating')
                        const ratingUIValue = document.getElementById('rating-value')
                        const ratingLabel = document.getElementById('clear-rating');

                        Array.from(document.getElementsByClassName('rating-star')).forEach(function(node) {
                            node.addEventListener('mouseover', function() {
                                let val = parseInt(node.getAttribute('id'))
                                // adding class
                                for (var i = 1; i <= val; i++) {
                                    document.getElementById(i).classList.add('text-lc-warning');
                                }
                                // removing class
                                for (var i = val + 1; i <= ratings.length; i++) {
                                    document.getElementById(i).classList.remove('text-lc-warning');
                                }
                                ratingUIValue.textContent = val + '/' + ratings.length;
                            })
                            node.addEventListener('mouseleave', function() {
                                let val = parseInt(ratingInput.value)
                                // adding class
                                for (var i = 1; i <= val; i++) {
                                    document.getElementById(i).classList.add('text-lc-warning');
                                }
                                // removing class
                                for (var i = val + 1; i <= ratings.length; i++) {
                                    document.getElementById(i).classList.remove('text-lc-warning');
                                }
                                ratingUIValue.textContent = val + '/' + ratings.length;
                                ratingInput.value = val;
                            })
                        })
                        Array.from(document.getElementsByClassName('rating-star')).forEach(function(node) {
                            node.addEventListener('click', function() {
                                let val = parseInt(node.getAttribute('id'))
                                ratingLabel.textContent = 'Clear rating'
                                // adding class
                                for (var i = 1; i <= val; i++) {
                                    document.getElementById(i).classList.add('text-lc-warning');
                                }
                                // removing class
                                for (var i = val + 1; i <= ratings.length; i++) {
                                    document.getElementById(i).classList.remove('text-lc-warning');
                                }
                                ratingUIValue.textContent = val + '/' + ratings.length;
                                ratingInput.value = val;
                            });
                        });
                        // Clear rating
                        ratingLabel.addEventListener('click', function() {
                            ratingInput.value = 0
                            ratingUIValue.textContent = '0/' + ratings.length;
                            Array.from(document.getElementsByClassName('rating-star')).forEach(function(node) {
                                node.classList.remove('text-lc-warning')
                            })
                            this.textContent = 'Click stars to rate'

                        })
                    </script>
                </div>
                </p>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="row mx-1 border p-1 @error('certified', 'review') border-danger @enderror">
                            <div class="col-1 pr-0">
                                <input type="checkbox" name="certified" id="agree-to-tc">
                            </div>
                            <div class="col-md-11 pl-0">
                                <label for="agree-to-tc"> I certify that this review is based on my own experience and that I am in no way affiliated with this business, and have not been offered any incentive or payment from the business to write this review. I agree to Sitejabber’s Terms &amp; Conditions, including to not write false reviews, which is in many cases against the law. </label>
                            </div>
                            @error('certified')
                            <div class="col-12 alert alert-danger">
                                Please confirm that you have worked with this company before.
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <button id="btn-submit" class="btn btn-lg px-4 secondary-btn">Submit review</submit>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('templates/footer')