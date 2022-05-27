<div class="d-flex justify-content-between">
    <h4 class="mb-0">{{ isset($cats_heading) ? $cats_heading : 'More Categories' }}</h4><i class="fas fa-hand-sparkles"></i>
</div>
<hr>
<?php 
$limit = isset($cats_limit) ? $cats_limit : 10;
$categories = \App\Models\Category::where('id', '>', 0);
if (isset($category->id)) {
    $categories = $categories->where('id', '!=', $category->id)->orderby('created_at', 'DESC')->limit($limit)->get();
}else {
    $categories = $categories->orderby('created_at', 'DESC')->limit($limit)->get();
}
?>
@foreach ($categories as $item)
<div class="d-flex flex-column align-items-start justify-content-between">
    <div class="d-flex">
        <div class="rounded">
            <a href="{{ url('categories/'.$item->slug) }}">
                <img class="rounded" style="width:100%;height:40px" src="{{ isset($item->image) ? $item->image : asset('images/default-category.png') }}" alt="">
            </a>
        </div>
        <div class="pl-1"><a style="font-size: 16px" href="{{ url('categories/'.$item->slug) }}">{{ $item->name }}</a></div>
    </div>
    <div class="d-flex">
        <a class="text-dark" href="{{ url('categories/'.$item->slug) }}">
            {{ Str::limit(strip_tags($item->description), 50) }}
        </a>
    </div>
</div>
<hr>
@endforeach
