<div class="col-md-2">
    <img src="{{ asset('').$post->featured_image }}" alt="{{ $post->company_name }} logo" width="100%">
</div>
<div class="col-md-7">
    <h4 class="mb-1">{{ $post->company_name }}</h4>
    <p class="mb-0">
        <?php $ratings = range(1,10);
        $arr = json_decode(json_encode($post->reviews), true); 
        $reviews = array_reduce($arr, function($out, $curr) {
                if ($curr['rating'] > 0) {
                    $out ++;
                }
                return $out;
        }, 0);
        
        $ct = count($post->reviews); $total = 0; 
        foreach($post->reviews as $review) { $total +=$review->rating; } 
        $av = $av_echo = 0;
        if ($total > 0) {
            $av = $total/$reviews;
            
            $parts = explode('.', $av);

            $decimal = isset($parts[1]) ? '.'.substr($parts[1], 0, 1) : null;
            $av_echo = $parts[0].$decimal;

        }
        ?>
        <small>
            @foreach($ratings as $rating)
            <i class="ti-star {{ $rating <= $av ? 'text-lc-warning' : '' }}"></i>
            @endforeach
        </small>{{ $av_echo }} /10 <span class="ml-3"> ( {{ $ct }} Customer Review{{ $ct > 1 ? "s" : "" }} ) </span>
    </p>
</div>
<div class="col-md-3">
    <a href="{{ $post->company_url }}" target="_blank" class="btn main-btn btn-block"> Visit site <i class="ti-new-window ml-2"></i></a>
</div>