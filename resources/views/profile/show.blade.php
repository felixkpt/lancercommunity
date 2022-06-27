@include('/templates/header')
<div class="col">
    <div class="card">
        <h1 class="col">{{ $title }}</h1>
        @include('/profile/components/member-heading')
        <div class="col">
            <div class="row">
                <div class="col-12">
                    @if(count($reviews) > 0)
                    @include('/profile/components/reviews')
                    @else 
                    <div><span class="fs-3">No reviews by {{ $user->name }}</span></div>
                    @endif
                </div>

                <div class="col-md-5 mx-md-auto my-3">
                    <a href="{{ url('authors/'.$user->slug) }}" class="nav-link btn secondary-outline-btn px-3 py-2 mt-3 mt-md-5 mb-3 mb-md-0">Companies reviewed by {{ $user->name }}</a>
                </div>

            </div>
        </div>
    </div>
</div>
@include('/templates/footer')