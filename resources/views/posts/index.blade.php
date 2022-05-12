@include('/templates/header')
<div class="col">
    <div class="card">
        <h1 class="col">{{ $title }}</h1>
        <div class="col">
            @include('/posts/components/list')
        </div>
    </div>
</div>
@include('/templates/footer')