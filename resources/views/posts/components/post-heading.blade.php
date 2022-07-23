<div class="col-md-2">
    <div class="bg-light company-logo">
                    <?php $image = @getimagesize($post->image) ? $post->image : asset('images/default-company.png'); ?>
                    <img class="h-100 w-100" src="{{ $image }}" alt="{{ $post->company_name }} logo">
                </div>
</div>
<div class="col-md-7">
    @include('/posts/components/post-stars')
</div>
<div class="col-md-3 border-start">
    <div class="d-flex flex-column">
        <a href="{{ $post->company_url }}" target="_blank" class="btn main-btn d-block mb-2"> Visit site <i class="ti-new-window ml-2"></i></a>
        <a href="#reviews" class="pl-2 btn secondary-outline-btn d-block mb-2">Go to reviews <i class="ti-comments-smiley ml-2"></i></a>
    </div>
</div>