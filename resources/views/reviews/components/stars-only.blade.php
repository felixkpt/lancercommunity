<?php
$stars_count = App\Settings\Reviews::stars();

$ratings = range(1, $stars_count);
?>
@foreach($ratings as $rat)
<i style="font-size: 120%" class="ti-star {{ $rat <= $post->rating ? 'text-lc-warning' : '' }}"></i>
@endforeach
<span>{{ $post->rating }}/{{ $stars_count }} </span>