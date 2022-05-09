@include('/templates/header')
<div class="flex flex-col w-full">
    <h1 class="flex justify-start px-1 w-full">All Posts</h1>
    <div class="mt-2 p-1 bg-gray-100">
            @include('/posts/components/posts-list')
    </div>
</div>
@include('/templates/footer')