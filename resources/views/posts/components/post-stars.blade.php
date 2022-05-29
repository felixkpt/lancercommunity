<h4 class="mb-1 text-center text-md-left">{{ $post->company_name }}</h4>
@if (isset($show_exercept))
<h6>{{ Str::limit($post->title, 50) }}</h6>
@endif
<hr />
<div class="row mb-2">
    <div class="col-12 col-xl-7 text-center text-md-left">
        @include('/reviews/components/stars-only')
    </div>
    <div class="col-12 col-xl-5 text-center text-md-left">
        <span class="text-muted"> ( {{ $post->reviews }} Customer Review{{ $post->reviews > 1 ? "s" : "" }} )</span>
    </div>
</div>