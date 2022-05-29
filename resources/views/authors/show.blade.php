@include('/templates/header')
<div class="col">
    <div class="card mb-4 p-1 p-lg-3">
        <div class="row">
            <div class="col-12">
                <h1>{{ $title }}</h1>
                @include('/profile/components/member-heading')
            </div>
            <div class="col-12">
                <div class="mt-2 p-1 bg-gray-100">
                @include('/posts/components/list')
                </div>
            </div>
            <div class="col-md-5 mx-md-auto my-3">
                <a href="{{ url('profile/'.$author->slug) }}" class="nav-link btn secondary-outline-btn px-3 mt-3 mt-md-5 mb-3 mb-md-0">Reviews by {{ $author->name }}</a>
            </div>
        </div>
    </div>
</div>
@include('/templates/footer')