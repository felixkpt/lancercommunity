<?php 
$items = $posts ?? $author->posts;
foreach($items as $key =>  $post): ?>
        <div class="d-flex flex-wrap shadow p-1 mt-2">
            <div class="col-12 col-md-2">
                <a href="{{ url('company/'.$post->slug) }}">
                    <img src="{{ asset('').$post->featured_image }}" alt="{{ $post->company_name }} logo" style="height: 120px;width:auto;">
                </a>
            </div>
            <div class="col-12 col-md-10">
                <a style="font-size:24px" class="" href="{{ url('company/'.$post->slug) }}">{{ $post->title }}</a>
                @include('/posts/components/authors-section')
            </div>
        </div>
    <?php endforeach; ?>

    @if (!$author->posts)
    <div class="flex w-full my-8 justify-center">
        <div class="flex">
            {{ $items->links('pagination::tailwind') }}
        </div>
    </div>
    @endif