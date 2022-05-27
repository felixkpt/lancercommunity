@include('/templates/header')
<div class="col">
    <div class="card mb-4 p-4">
        <div class="col-12">
        <h1 class="flex w-full">{{ $post->title }}</h1>
        </div>
        <div class="col-12 rounded">
            <div>
            {!! $post->content->content !!}
            </div>
        </div>
    </div>
</div>
@include('/templates/footer')