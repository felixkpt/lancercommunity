<div class="row mb-2">
    <div class="col-12 col-md-8 text-center text-md-start">
        @if($review->rating > 0)
        <small>
            <?php
            $stars_count = App\Settings\Reviews::stars();
            $ratings = range(1, $stars_count);
            ?>
            @foreach($ratings as $rat)
            <i style="font-size: 120%" class="ti-star <?php if ($rat <= $review->rating) echo 'text-lc-warning' ?>"></i>
            @endforeach
        </small> {{ $review->rating }}/{{ count($ratings) }}
        @else
        <small class="text-lc-warning">No rating</small>
        @endif
    </div>
    <div class="col-12 col-md-4 text-center text-md-start">
        <span class="text-muted"> @if(!isset($shorten) || !$shorten) Reviewed @endif{{ $review->updated_at->diffForHumans() }}</span>
    </div>
</div>