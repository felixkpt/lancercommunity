@foreach ($posts as $item)
<div class="row flex-column justify-content-between px-1">
    <div class="col-12">
        <div class="row w-100">
            <div class="pl-1 rounded col-4 col-sm-3 col-md-12 col-xl-5 nx-auto overflow-hidden">
                <a href="{{ url('company/'.$item->slug) }}" class="block w-100">
                    <div class="thumb-image-wrapper-sm">
                        <img class="w-100 h-100" src="{{ isset($item->image) ? $item->image : asset('images/default-company.png') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="pl-1 col-8 col-sm-9 col-md-12 col-xl-7 text-left text-xlg-center m-auto"><a style="font-size: 16px" href="{{ url('company/'.$item->slug) }}">{{ $item->company_name }}</a></div>
        </div>
        <div class="row my-2">
            <a class="text-dark" href="{{ url('company/'.$item->slug) }}">
                <?php $post = $item ?>
                @include('/reviews/components/stars-only')
                <i class="ti-plus"></i>
            </a>
        </div>
    </div>
</div>
<hr>
@endforeach