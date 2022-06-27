    <div class="card pt-3 px-2 pb-2 overflow-hidden">
        <div class="col-12">
            @if(Route::current()->getName() == 'posts.show')
            @include('/posts/components/similar-companies')
            @elseif(Route::current()->getName() == 'categories.show')
            @include('/categories/components/more-categories')
            @else
            <div>
                <h4>Follow us on social media</h4>
                <div class="fb-page" data-href="https://web.facebook.com/LancerCommunity" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://web.facebook.com/LancerCommunity" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/LancerCommunity">LancerCommunity</a></blockquote>
                </div>

            </div>

            @endif
        </div>
    </div>
    <div class="card mt-4 pt-3 px-1 pb-2">
        <div class="col-12">
            @if(Route::current()->getName() == 'posts.show')
            <?php $cats_heading = 'Popular Categories' ?>
            @include('/categories/components/more-categories')
            @else
            <h4>Featured Companies</h4>
            <?php $posts = \App\Models\Post::where([['post_type', '=', 'post'], ['published', '=', 'published']])->limit(5)->get() ?>
            @include('/posts/components/featured-posts')
            @endif
        </div>
    </div>