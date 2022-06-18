<div class="col-md-2">
    <div style="max-width: 150px;" class="mx-auto">
        <img style="width:100%;max-height:150px" class="rounded-lg mx-auto" src="{{ isset($post->image) ? $post->image : asset('images/default-company.png') }}" alt="{{ $post->company_name }} logo" width="100%">
    </div>
</div>
<div class="col-md-7">
    @include('/posts/components/post-stars')
</div>
<div class="col-md-3">
    <a href="{{ $post->company_url }}" target="_blank" class="btn main-btn btn-block"> Visit site <i class="ti-new-window ml-2"></i></a>
    <div>
        <a href="#reviews" class="pl-2 btn secondary-outline-btn btn-block">Go to reviews <i class="ti-comments-smiley ml-2"></i></a>
    </div>
</div>