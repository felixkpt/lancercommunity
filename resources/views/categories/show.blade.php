@include('/templates/header')
<div class="col">
    <div class="card p-2">
        <h1>{{ $title }}</h1>
        <p> {!! $category->description !!}</p>
        <div class="col">
            @include('/posts/components/list')
        </div>
    </div>
</div>
@include('/templates/footer')