<div class="container-fluid bg-light list-businesses py-3 py-lg-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2>Browse businesses by more categories</h2>
                <p class="lead"> We have over 50 categories to search through which makes it easy to find the business you need </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 mt-md-4">
            @foreach($categories as $category)
            <div class="col h-100 p-2">
                <div class="">
                    <a href="{{ url('categories/'.$category->slug) }}" class="list-products card px-3 py-4 text-dark text-decoration-none">
                        <span class="">
                            <p class="listing-icon"><img class="rounded" style="width:70px ;height:70px" src="{{ $category->image ?? asset('images/default-category.png') }}" alt=""></p><h6 style="font-size: 105%">{{ $category->name }}</h6>
                        </span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
