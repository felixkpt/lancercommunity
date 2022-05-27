    <div class="card pt-3 px-2 pb-2">
        @if (Route::current()->getName() == 'posts.show')
        @include('/posts/components/services-offered')
        @else
        <div>
            <h4>Recently reviewed</h4>
            <ul class="list-unstyled">
                @foreach(App\Models\Post::where('post_type', 'post')->where('published', 'published')->latest()->limit(5)->get() as $post_temp)
                <li class="py-1 bg-light my-1">
                    <a class="d-block" style="font-size:16px;
    white-space: nowrap;
    font-size: 16px;
    text-overflow: ellipsis;
    overflow: hidden;" href="{{ url('company/'.$post_temp->slug) }}">
                        <span class="mx-2" style="width:30px;height:30px;display:inline-block">
                            <img class="rounded-lg" style="width:30px;height:30px" src="{{ isset($post_temp->image) ? $post_temp->image : asset('images/default-company.png') }}">
                        </span>{{ $post_temp->company_name }}
                    </a>
                </li>
                @endforeach
            </ul>

        </div>

        @endif
    </div>
    <div class="card mt-4 pt-3 px-4 pb-2">
        @if(Route::current()->getName() == 'posts.show')
        @include('/posts/components/similar-companies')
        @elseif(Route::current()->getName() == 'categories.show')
        @include('/categories/components/more-categories')
        @else
        <div>
            <h4>Featured Companies</h4>

            <?php $posts = \App\Models\Post::limit(10)->get() ?>
            @include('/posts/components/featured-posts')



        </div>
        @endif
    </div>