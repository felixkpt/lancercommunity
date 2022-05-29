<div class="row mb-2">
    <div class="col-12 col-md-9 text-center text-md-left">
        @if($review->rating > 0)
        <small>
        <?php $ratings = range(1,10); ?>
        @foreach($ratings as $rat)
            <i style="font-size: 120%" class="ti-star <?php if ($rat <= $review->rating) echo 'text-lc-warning' ?>"></i>
        @endforeach
        </small>  {{ $review->rating }}/{{ count($ratings) }}
        @else
        <small class="text-lc-warning">No rating</small>
        @endif 
    </div>
    <div class="col-12 col-md-3 text-center text-md-left">
        <span class="text-muted"> Reviewed {{ $review->updated_at->diffForHumans() }}</span>
    </div>
</div>