@include('/templates/header')
<div class="card mb-4 p-4">
    <div class="row">
        @include('/posts/components/post-heading')
        <div class="col-md-12 mt-3">
            <div class="row">
            <div class="col-12">
                <h1 class="px-1">{{ $post->title }}</h1>
            </div>
            @include('/posts/components/authors-section')
            </div>
            <div class="row justify-content-start mt-4 p-1 bg-gray-50 rounded">
                <div>
                {!! $post->content->content !!}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    @if (Auth::user() && in_array(Auth::user()->id, array_column(json_decode(json_encode($post->authors), true), 'id')))

                    @if($post->published == 'unapproved')
                    <div class="row">
                        <div class="col-12 col-md-9">
                            </div>
                            <div class="alert alert-info"><strong>Info: </strong>Your review is awaiting moderation. In the mean time you can edit when necessary. Once approved, it will be public and therefore you may not edit it.</div>
                        <div class="col-12 col-md-3">
                            <a href="{{ url('write-a-review/'.$post->id) }}" class="btn btn main-outline-btn"><small><i class="ti-comment-alt mr-2"></i></small> Edit your review </a>
                        </div>
                    </div>
                    @endif

                    @elseif(!Auth::user() || !App\Models\Review::where('post_id', $post->id)->where('user_id', Auth::user()->id)->first())
                    <a href="{{ url('add-a-review/'.$post->id) }}" class="btn btn-lg main-outline-btn"><small><i class="ti-comment-alt mr-2"></i></small> Leave a Review </a>
                    @endif
                </div>
            </div>
        </div> 
    </div>
</div>
<?php $reviews_heading = "User Reviews (".$reviews->total().')'; ?>
@include('/posts/reviews/components/reviews')
@include('/templates/footer')