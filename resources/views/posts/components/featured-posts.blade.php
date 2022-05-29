@foreach ($posts as $item)
<div class="d-flex flex-column align-items-start justify-content-between">
    <div class="d-flex">
        <div class="rounded" style="width: 40px">
            <a href="{{ url('company/'.$item->slug) }}">
                <img class="rounded" style="width:100%;height:40px" src="{{ isset($item->image) ? $item->image : asset('images/default-company.png') }}" alt="">
            </a>
        </div>
        <div class="pl-1"><a style="font-size: 16px" href="{{ url('company/'.$item->slug) }}">{{ $item->company_name }}</a></div>
    </div>
    <div class="d-flex">
        <a class="text-dark" href="{{ url('company/'.$item->slug) }}">
            <?php $post = $item ?>
            @include('/reviews/components/stars-only')
            <i class="ti-plus"></i>
        </a>
    </div>
</div>
<hr>
@endforeach
