<div class="row p-1 p-lg-3">
    <div class="col-md-9">
        @include('/posts/components/list-detailed')
        <div class="col-md-4 mx-md-auto">
            <a href="{{ url('company') }}" class="nav-link btn secondary-outline-btn px-3 py-2 mt-3 mt-md-5 mb-3 mb-md-0">View All</a>
        </div>
    </div>
    <div class="col-md-3">
        @include('/templates/sidebar')
    </div>
</div>