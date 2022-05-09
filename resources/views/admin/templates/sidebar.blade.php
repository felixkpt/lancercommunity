<div class="h-screen overflow-y-auto" style="position:sticky;top: 37px;;width:210px">
    <div class="flex flex-col overflow-x-hidden h-screen py-2 px-1 justify-between">
        <div class="flex items-center justify-between text-gray-600 text-2xl">
            <b><a class="block w-full font-bold text-gray-500 hover:text-gray-200" href="{{ url('admin') }}">Dashboard</a></b>
        </div> 

        <div class="flex flex-col flex-auto">
 
            <div class="">
                <div class="flex flex-row py-1 pl-1">
                <a class="block w-full font-bold text-gray-500 border-l-2 border-gray-800 hover:text-gray-200 hover:border-l-2 hover:border-blue-400 px-1 link rounded" href="{{ url('admin/posts') }}">Posts</a>
                </div>
            </div>
            
            <div class="">
                <div class="flex flex-row py-1 pl-1">
                <a class="block w-full font-bold text-gray-500 border-l-2 border-gray-800 hover:text-gray-300 hover:border-l-2 hover:border-blue-400 px-1 link rounded" href="{{ url('admin/reviews') }}">Reviews</a>
                </div>
            </div>
            
            <div class="">
                <div class="flex flex-row py-1 pl-1">
                <a class="block w-full font-bold text-gray-500 border-l-2 border-gray-800 hover:text-gray-300 hover:border-l-2 hover:border-blue-400 px-1 link rounded" href="{{ url('admin/pages') }}">Pages</a>
                </div>
            </div>
            
            <div class="">
                <div class="flex flex-row py-1 pl-1">
                <a class="block w-full font-bold text-gray-500 border-l-2 border-gray-800 hover:text-gray-300 hover:border-l-2 hover:border-blue-400 px-1 link rounded" href="{{ url('admin/users') }}">Users</a>
                </div>
            </div>
            
        </div>

        <!-- Button (Logout) -->
        <div class="flex flex-col">
            <form class="flex w-full" action="{{ route('logout') }}" method="post">
                @csrf
                <button class="w-full rounded-full bg-pink-600 hover:bg-pink-800 py-2 text-white text-lg text-center">Logout</buttion>
            </form>
        </div>
    </div>

<script>
    const url = window.location.href.split('?')[0].split('#')[0];
    let links = document.getElementById('left-nav-menu').getElementsByClassName('link');
        for(let i=0; i<links.length; i++) {
            let link = links[i];
            href = link.getAttribute('href');
            if (url == href) {
                link.classList.add('active');
            }
    }
    links = document.getElementById('primary-nav').getElementsByClassName('link');
    for(let i=0; i<links.length; i++) {
        let link = links[i];
        href = link.getAttribute('href');
        if (url == href || url == href+'/') {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page')
        }
    }
</script>
<!-- Sidebar End component -->
</div>