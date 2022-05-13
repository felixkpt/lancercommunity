<div class="col-md-2">
    <img class="rounded-lg" src="{{ asset('').$post->image }}" alt="{{ $post->company_name }} logo" width="100%">
</div>
<div class="col-md-7">
    <h4 class="mb-1">{{ $post->company_name }}</h4>
    <p class="mb-0">
        <?php 
        $ratings = range(1,10);
        ?>
        <small>
            @foreach($ratings as $rat)
            <i class="ti-star {{ $rat <= $post->rating ? 'text-lc-warning' : '' }}"></i>
            @endforeach
        </small>{{ $post->rating }} /10 <span class="ml-3"> ( {{ $post->reviews }} Customer Review{{ $post->reviews > 1 ? "s" : "" }} ) </span>
    </p>
</div>
<div class="col-md-3">
    <a href="{{ $post->company_url }}" target="_blank" class="btn main-btn btn-block"> Visit site <i class="ti-new-window ml-2"></i></a>
</div>
