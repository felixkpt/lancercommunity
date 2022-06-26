<style>
    .thumb-image {
        min-width:6.5rem;
        height:5rem;
    }
</style>
@foreach ($posts as $item)
<div class="row flex-column align-items-start justify-content-between">
    <div class="col-12">
        <div class="row w-100">
            <div class="pl-1 rounded col-4 col-sm-3 col-md-12 col-xl-4 nx-auto overflow-hidden">
                <a href="{{ url('company/'.$item->slug) }}" class="block w-100">
                    <div class="thumb-image">
                        <img class="rounded w-100 h-100" src="{{ isset($item->image) ? $item->image : asset('images/default-company.png') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="pl-1 col-8 col-sm-9 col-md-12 col-xl-8 text-left text-xlg-center"><a style="font-size: 16px" href="{{ url('company/'.$item->slug) }}">{{ $item->company_name }}</a></div>
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