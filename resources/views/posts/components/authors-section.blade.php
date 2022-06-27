<div class="flex flex-wrap w-full text-lg m-1 pl-1 border-l-2 border-gray-400 h-max">
    <?php 
    $authors = json_decode(json_encode($post->mainAuthors), true);
    
    usort($authors, function($a, $b) {
        if ($a['id'] == $a['pivot']['manager_id']) {
            return 0;
        }
        return 1;
    });
    ?>
    @foreach($authors as $author)
        <a class="text-muted underline-none pl-1" href="{{ url('authors/'.Str::slug($author['name'])) }}">
            <div style="width: 36px;height:36px;" class="d-inline rounded-circle">
                <img style="width: 36px;height:36px;" class="d-inline rounded-circle" src="{{ $author['avatar'] ?? asset('images/default-user.png') }}" alt="">
            </div>
            {{ $author['name'] }}
        </a>@if(isset($authors[$loop->index+1])) @endif
    @endforeach
    <span class="ml-2 pl-1 text-muted">{{ $post->created_at->diffForHumans() }}</span>
</div>