<?php
$reviews_segments = [];
$max_segments = 3;
$per_segment = 3;

$counter = 0;
$temp = [];
for ($i = 0; $i < count($reviews); $i++) {
    $review = $reviews[$i];

    if (count($reviews_segments) >= $max_segments) {
        break;
    }

    if ($counter <= $per_segment) {
        $temp[] = $review;
        $counter++;
    }

    if ($counter === $per_segment) {
        $reviews_segments[] = $temp;
        $counter = 0;
        $temp = [];
    }
}
// dealing with remainance
if ($temp) {
    $reviews_segments[] = $temp;
}
?>
<div class="col-12 my-5 bg-white">
    <div class="col-12 px-2">
        <h2>Recent Reviews</h2>
    </div>
    <style>
        .carousel.reviews {
            height: 300px;
        }

        @media screen and (max-width: 768px) {
            .carousel.reviews {
                height: 100%;
            }
        }
    </style>
    <div id="carouselExampleDark" class="carousel carousel-dark slide w-100 reviews" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            @foreach ($reviews_segments as $key => $review_seg)
            <div class="carousel-item h-100 <?php if ($key === 0) {
                                                echo "active";
                                            } ?>" data-bs-interval="7000">
                <div class="row h-100 p-4">
                    @foreach ($review_seg as $review)
                    <div class="col-12 p-2 col-md-4 h-100">
                        <div class="p-1 bg-light rounded border border-secondary border-1 h-100 overflow-hidden">
                            <div class="col-12 mt-3">
                                <?php
                                $user = App\Models\User::where('id', $review->user_id)->first();
                                $image = $user->avatar ? $user->avatar : asset('images/default-user.png');
                                ?>
                                <a href="{{ url('profile/'.$user->slug) }}" class="d-block">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="bg-light rounded-circle" style="max-width: 40px;height: 40px">
                                                <img style="height: 100%;width:100%;" class="mx-auto rounded-circle" src="{{ $image }}" alt="{{ $user->name }} logo">
                                            </div>
                                        </div>
                                        <div class="col-8 align-self-center">
                                            <span>{{ $user->name }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4 class="text-center text-md-start">{{ $review->title }}</h4>
                            <?php $shorten = true ?>
                            @include('/reviews/components/review-stars')
                            <p class="text-center text-md-start py-2 overflow-hidden">{{ Str::limit(strip_tags($review->content), 250 ) }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <style>
            .carousel-control-next,
            .carousel-control-prev {
                width: 7% !important;
            }

            @media screen and (max-width: 768px) {
                .carousel-control-next,
                .carousel-control-prev {
                    width: 18% !important;
                }
            }
        </style>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="position-relative bg-white" style="min-height:40px">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        </div>
    </div>
</div>