<?php $ratings = range(1,10) ?>
@foreach($ratings as $rat)
    <i style="font-size: 120%" class="ti-star {{ $rat <= $post->rating ? 'text-lc-warning' : '' }}"></i>
@endforeach
<span>{{ $post->rating }} /10 </span>