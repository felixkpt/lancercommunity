@foreach($posts as $post)
<div class="card mb-4 p-3">
    <div class="row text-center text-lg-start">
        <div class="col-md-3 overflow-hidden">
            <div class="d-flex justify-content-center">
                <a href="{{ url('company/'.$post->slug) }}">
                <div class="bg-light thumb-image-wrapper-md">
                    <?php 
                    $image = isset($post->image) ? $post->image : asset('images/default-company.png');
                     ?>
                    <img class="h-100 w-100" src="{{ $image }}" alt="{{ $post->company_name }} logo">
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 bg-white text-center text-md-start">
            <?php $show_exercept = true; ?>
            @include('/posts/components/post-stars')
        </div>
        <div class="col-md-3 border-start">
            <a href="{{ $post->company_url }}" target="_blank" class="btn main-btn d-block mb-2"> Visit site <i class="ti-new-window ml-2"></i></a>
            <a href="{{ url('company/'.$post->slug) }}" class="btn secondary-outline-btn d-block mb-2"> Read Reviews <i class="ti-comments-smiley ml-2"></i></a>
        </div>
    </div>
</div>
@endforeach