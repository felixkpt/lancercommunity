<footer class="text-light">
    <section class="footer container-fluid py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5><b>Company</b></h5>
                    <p>{{ \SiteInfo::description() }}</p>
                </div>
                <div class="col-6 col-md-3">
                    <h5><b>Resources</b></h5>
                    <p>
                        <a href="{{ url('reviews') }}"><small><i class="ti-control-record mr-2"></i></small> Reviews </a>
                        <br><a href="{{ url('pages/disclaimer') }}"><small><i class="ti-control-record mr-2"></i></small> Disclaimer </a>
                        <br><a href="{{ url('pages/top-writing-services') }}"><small><i class="ti-control-record mr-2"></i></small> Top Writing Services </a><br>
                        <a href="{{ url('pages/terms-of-use') }}"><small><i class="ti-control-record mr-2"></i></small> Terms of Use </a>
                    </p>
                </div>
                <div class="col-6 col-md-3">
                    <h5><b>Categories</b></h5>
                    <p>
                        @foreach (\App\Models\Category::latest()->limit(5)->get() as $cat)
                        <a href="{{ url('categories/'.$cat->slug) }}"><small><i class="ti-control-record mr-2"></i></small> {{ Str::limit($cat->name, 30, '') }} </a>
                        <br>
                        @endforeach
                    </p>
                </div>
                <div class="col-md-3">
                    <h5><b>Contact us</b></h5>
                    <p>
                        <a href="#"><small><i class="ti-control-record mr-2"></i></small> +123 456 7890 </a><br>
                        <a href="#"><small><i class="ti-control-record mr-2"></i></small> Use our live chat </a><br>
                        <a href="mailto:info@lancercommunity.com"><small><i class="ti-control-record mr-2 contact-us-mails"></i></small> info@lancercommunity.com </a><br>
                        <a href="mailto:support@lancercommunity.com"><small><i class="ti-control-record mr-2 contact-us-mails"></i></small> support@lancercommunity.com </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-3 my-md-0">
                    <p class="mb-0">© {{ date('Y') }} {{ \SiteInfo::name() }}. All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-md-right my-3 my-md-0">
                    <p class="mb-0">
                        <a href="#" class="ml-md-4"><i class="ti-facebook"></i></a>
                        <a href="#" class="ml-4"><i class="ti-twitter"></i></a>
                        <a href="#" class="ml-4"><i class="ti-instagram"></i></a>
                        <a href="#" class="ml-4"><i class="ti-linkedin"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>