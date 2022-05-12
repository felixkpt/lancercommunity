<div class="row p-1 p-lg-3">
    <div class="col-md-9">
        @foreach($posts as $post)
        <div>
            <div class="card mb-4 p-3">
                <div class="row">
                    <div class="col-md-3 col-lg-2 border-right">
                        <a href="{{ url('company/'.$post->slug) }}" class="d-block w-100 text-center">
                            <img class="rounded-lg" src="{{ asset($post->image) }}" alt="" style="width:150px;height:140px" />
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-7 bg-white text-center text-md-left">
                        <h4>{{ $post->company_name }}</h4>
                        <h6>{{ Str::limit($post->title, 50) }}</h6>
                        <hr />
                        <p class="mb-0">
                            <?php 
                            $ratings = range(1,10);
                            ?>
                            <small>
                                @foreach($ratings as $rat)
                                <i class="ti-star {{ $rat <= $post->rating ? 'text-lc-warning' : '' }}"></i>
                                @endforeach
                            </small>{{ $post->rating }} /10 <span class="ml-3"> ( {{ $post->reviews }} Customer Review {{ $post->reviews > 1 ? "s" : "" }} ) </span>
                        </p>
                    </div>
                    <div class="col-md-3 border-left">
                        <a href="{{ url('company/'.$post->slug) }}" class="btn main-btn btn-block"> Visit site <i class="ti-new-window ml-2"></i></a>
                        <a href="{{ url('company/'.$post->slug) }}#reviews" class="btn secondary-outline-btn btn-block"> Read Reviews <i class="ti-comments-smiley ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
        <div class="col-md-4 mx-md-auto">
            <a href="{{ url('company') }}" class="nav-link btn secondary-outline-btn px-3 mt-3 mt-md-5 mb-3 mb-md-0">View All</a>
        </div>
    </div>
    <div class="col-md-3">
        @include('/templates/sidebar')
    </div>
</div>