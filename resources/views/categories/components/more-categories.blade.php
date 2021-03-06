<div class="d-flex justify-content-between">
    <h4 class="mb-0">{{ isset($cats_heading) ? $cats_heading : 'More Categories' }}</h4><i class="fas fa-hand-sparkles"></i>
</div>
<hr>
<?php
$limit = isset($cats_limit) ? $cats_limit : 5;
$categories = \App\Models\Category::where('id', '>', 0);
if (isset($category->id)) {
    $categories = $categories->where('id', '!=', $category->id)->orderby('created_at', 'DESC')->limit($limit)->get();
} else {
    $categories = $categories->orderby('created_at', 'DESC')->limit($limit)->get();
}
?>
@foreach ($categories as $item)
<div class="d-flex flex-column justify-content-between px-1">
    <div class="row">
        <div class="pl-1 rounded col-4 col-md-12 col-xl-5 nx-auto overflow-hidden">
            <a href="{{ url('categories/'.$item->slug) }}" class="block w-100">
                <div class="thumb-image-wrapper-sm">
                    <img class="rounded w-100 h-100" src="{{ isset($item->image) ? $item->image : asset('images/default-category.png') }}" alt="">
                </div>
            </a>
        </div>
        <div class="pl-1 col-8 col-md-12 col-xl-7 text-left text-xlg-center"><a style="font-size: 16px" href="{{ url('categories/'.$item->slug) }}">{{ $item->name }}</a></div>
    </div>
</div>
<hr>
@endforeach