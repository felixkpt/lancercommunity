<?php 
$items = $categories;
foreach($items as $key =>  $category): ?>
<div class="row shadow p-1 mt-2">
    <div class="col-12 col-md-2 overflow-hidden">
        <div style="width: 100px ;" class="mx-auto">
            <a href="{{ url('categories/'.$category->slug) }}">
                <img style="width: 100%;" class="mx-auto rounded" src="{{ $category->image ?? asset('images/default-company.png') }}" alt="{{ $category->name }} logo" style="height: 120px;width:auto;">
            </a>
        </div>
    </div>
    <div class="col-12 col-md-10">
        <h4><a href="{{ url('categories/'.$category->slug) }}">{{ $category->name }}</a></h4>
        <a style="font-size:24px" class="" href="{{ url('categories/'.$category->slug) }}">{{ $category->title }}</a>
        {{ Str::limit(strip_tags($category->description), 100) }}
    </div>
</div>
<?php endforeach; ?>
@if(count($items) < 1)
<div class="h3 text-muted">
    No categories
</div>
@endif
@include('/components/pagination')