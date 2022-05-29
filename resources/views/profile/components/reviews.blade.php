<div class="shadow pb-3 mt-3 pt-5 px-3" id="reviews">
    <div class="row">
        @foreach($reviews as $review)
        <div class="col-12">
            <hr>
            <h4 class="text-lg font-medium">
                <a class="" href="{{ url('company/'.$review->post->slug) }}">
                Reviewing {{ $review->post->company_name }}
                </a>
            </h4>
        </div>
        <div class="col-12 col-sm-3 col-lg-2 mt-3 mt-md-2">
            <div style="max-width: 150px;max-height:150px;" class="mb-2 mx-auto rounded">
                <a style="width: 150px;height:150px;" href="{{ url('company/'.$review->post->slug) }}">
                    <img class="mx-auto rounded" src="{{ $review->post->image }}" alt="" width="100%">
                </a>
            </div>
        </div>
        <div class="col-12 col-sm-9 col-lg-10 mt-3">
            <h4 class="mb-1 text-center text-sm-left">{{ $review->title }}</h4>
            @include('/reviews/components/review-stars')
            <div>
                <p class="mb-0 text-center text-md-sm">{!! $review->content !!}</p>
            </div>
        </div>
        @if(Auth::user() && $review->user_id == Auth::user()->id)
            @if($review->published == 'unapproved')
            @include('/reviews/components/notify-unapproved')
            @endif
        @endif
        @endforeach
        @if(count($reviews) < 1)
        <div class="col-12 text-muted">
            No reviews yet @if(!Auth::user() || !in_array(Auth::user()->id, array_column(json_decode(json_encode($post->authors), true), 'id')) )<a href="{{ url('add-a-review/'.$post->id) }}">Review {{ $post->company_name }} now</a>@endif
        </div>
        @endif
        
    </div>
    <?php $items = $reviews; ?>
    @include('/components/pagination')
</div>
