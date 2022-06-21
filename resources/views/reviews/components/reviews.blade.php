<div class="col-12 card pb-3 pt-5 px-3" id="reviews">
    <div class="row text-center text-md-start pt-5">
        @if (isset($reviews_heading))
        <div class="col">
         <h2>{{ $reviews_heading }}</h2>
        </div>
        @endif
        @foreach($reviews as $review)
        <div class="col-12">
            <hr>
        </div>
        <div class="col-md-3 col-lg-2 mt-3">
            <div class="d-flex justify-content-center">
                <?php 
                    $user = App\Models\User::where('id', $review->user_id)->first();
                    $image = $user->avatar ? $user->avatar : asset('images/default-user.png');
                ?>
                <a href="{{ url('profile/'.$user->slug) }}">
                    <div class="bg-light rounded-circle mx-auto" style="max-width: 90px;height: 90px">
                        <img style="height: 100%;width:100%;" class="mx-auto rounded-circle" src="{{ $image }}" alt="{{ $user->name }} logo">
                    </div>
                    <div class="text-center">
                        <span>{{ $user->name }}</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-9 col-lg-10 mt-3">
            <h4 class="mb-1">{{ $review->title }}</h4>
            @include('/reviews/components/review-stars')
            <p class="mb-0">{!! $review->content !!}</p>
        </div>
        @if(Auth::user() && $review->user_id == Auth::user()->id)
        @if($review->published == 'unapproved')
        @include('/reviews/components/notify-unapproved')
        @endif
        @endif
        @endforeach
        @if(count($reviews) < 1)
        <div class="col-12 text-muted">
            No reviews yet
        </div>
        @endif
    </div>
    <?php $items = $reviews; ?>
    @include('/components/pagination')
</div>

