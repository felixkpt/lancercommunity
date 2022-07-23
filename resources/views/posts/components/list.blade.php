<?php
$items = $posts ?? $author->posts;
foreach ($items as $key =>  $post) : ?>
    <div class="row shadow-sm p-1 mt-2 text-center text-lg-start">
        <div class="col-12 col-lg-3 overflow-hidden mx-auto" style="min-height: 80px;">
            <a href="{{ url('company/'.$post->slug) }}">
                <div class="bg-light thumb-image-wrapper">
                    <?php 
                    $image = $post->image ?? asset('images/default-company.png');
                    ?>
                    <img class="h-100 w-100" src="{{ $image }}" alt="{{ $post->company_name }} logo">
                </div>
            </a>
        </div>
        <div class="col-12 col-lg-9">
            <a style="font-size:20px;text-decoration:none" class="text-dark" href="{{ url('company/'.$post->slug) }}">{{ $post->title }}</a>
            @include('/posts/components/authors-section')
        </div>
        @if (Auth::user() && in_array(Auth::user()->id, array_column($post->authors->toArray(), 'id')))
        @if($post->published == 'unapproved')
        @include('/posts/components/notify-unapproved')
        @endif
        @endif
    </div>
<?php endforeach; ?>
@if (count($items) < 1) <div class="row shadow p-1 mt-2">
    <div class="col-12 col-md-10">
        <div class="h3 text-muted">
            No reviews under this category
        </div>
    </div>
    </div>
    @endif

    @include('/components/pagination')