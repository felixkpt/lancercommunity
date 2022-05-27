<div class="d-flex justify-content-between">
    <h4 class="mb-0">Similar Companies</h4><i class="fas fa-hand-sparkles"></i>
</div>
<hr>
    <?php 
    $categories = $post->categories->toArray();
    if ($categories) {
        $posts = \App\Models\Post::whereHas('categories', function ($q) use($categories, $post) { 
            $q->whereIn('post_category.category_id', array_column($categories, 'id'))->where('posts.id', '!=', $post->id);
        })->limit(10)->get();
        ?>
        @include('/posts/components/featured-posts')
        <?php 
    }
    ?>