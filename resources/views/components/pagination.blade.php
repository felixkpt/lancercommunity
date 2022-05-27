@if (method_exists($items, 'links'))
<div class="row my-4 justify-center">
    <div class="col">
        {{ $items->links() }}
    </div>
</div>
@endif