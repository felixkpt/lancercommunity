@include('/templates/header')
<div class="col">
    <div class="card mb-4 p-1 p-lg-3">
        <div class="row">
            <div class="col-12">
                <?php $posts = $results; ?>
                @if ($posts)
                <div class="space-y-4">
                    @if($posts->count())
                    <em>Found {{ $posts->total() }} results</em>
                    @foreach($posts as $post)
                    <div class="shadow-sm mb-5 row">
                        <div class="col-md-2">
                            <a href="{{ url('company/'.$post->slug) }}">
                                <img class="rounded-lg" src="{{ asset('').$post->image }}" alt="{{ $post->company_name }} logo" width="100%">
                            </a>
                        </div>
                        <div class="col-md-10">
                            <h4 class="mb-1">
                                <a href="{{ url('company/'.$post->slug) }}">
                                {{ $post->company_name }}
                                </a>
                            </h4>
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
                            <p>
                                {!! Str::limit(strip_tags($post->content->content), 150) !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    <?php $items = $posts ?>
                    @include('components/pagination')
                    @else
                    <p>No results found</p>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@include('/templates/footer')