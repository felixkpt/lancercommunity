<?php 
    $items = $posts ?? $author->posts;
    foreach($items as $key =>  $post): ?>
    <div class="row shadow-sm p-1 mt-2">
        <div class="col-12 col-md-3 col-lg-2">
            <a class="d-block" style="margin: auto;width: max-content;" href="{{ url('company/'.$post->slug) }}">
                <img class="mx-auto rounded-lg" src="{{ asset('').$post->image }}" alt="{{ $post->company_name }} logo" style="height: 120px;width:auto;">
            </a>
        </div>
        <div class="col-12 col-md-9 col-lg-10">
            <a style="font-size:24px" class="" href="{{ url('company/'.$post->slug) }}">{{ $post->title }}</a>
            @include('/posts/components/authors-section')
        </div>
    </div>
    <?php endforeach; ?>
@if (count($items) < 1)
<div class="row shadow p-1 mt-2">
    <div class="col-12 col-md-10">
        <div class="h3 text-muted">
            No reviews under this category
        </div>
    </div>
</div>
@endif

@include('/components/pagination')
