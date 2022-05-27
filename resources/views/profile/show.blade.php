@include('/templates/header')
<div class="col">
    <div class="card">
        <h1 class="col">{{ $title }}</h1>
        @include('/profile/components/member-heading')
        <div class="row">
            <div class="col-12">
                @if(count($reviews) > 0)
                @include('/profile/components/reviews')
                @else 
                <div><span class="fs-3">No reviews by {{ $user->name }}</span></div>
                @endif
            </div>

        </div>
    </div>
</div>
@include('/templates/footer')