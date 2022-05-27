@include('/templates/header')
<div class="col">
    <div class="card mb-4 p-1 p-lg-3">
        <div class="col-12 bg-light rounded mb-5">
            @include('/components/search')
        </div>
        <div class="row">
            
            <div class="col-12">
                <?php $posts = $results; ?>
                @if($posts && $posts->count())
                <div class="space-y-4">
                    <div class="mb-2">
                        <em class="">Found {{ $posts->total() }} results</em>
                    </div>
                    <?php $items = $posts ?>
                    @include('/posts/components/list-detailed')
                    @include('components/pagination')
                </div>
                @else
                <p style="font-size: large;">No results found</p>
                @endif
            </div>
        </div>
    </div>
</div>
@include('/templates/footer')