@include('/templates/header')
<div class="col">
    <div class="row justify-content-center p-3">
        <div class="col-12 col-md-6 col-lg-5 bg-white shadow-md rounded m-4 py-3">
            @include('/components/notifications/inline')
            <div class="row">
                <div id="account-chooser" class="col-12 col-md-8 mx-auto">
                    <div>
                        <h2 class="text-center pb-3">Account login</h2>
                    </div>
                    <div id="email-auth">
                        <form method="POST" action="{{ url('login/email') }}">
                            @csrf
                            <!-- Email Address -->
                            <div class="mb-4">
                                <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required="required" autofocus="autofocus" placeholder="Username or Email">
                            </div>
                            <div class="mb-5">
                                <button type="submit" class="w-100 btn px-2 secondary-btn">
                                    Login with Email
                                </button>
                            </div>
                        </form>
                        <div class="mb-5">
                            <div class="h-divider">
                                <div class="h-inner">
                                    <span class="h-content">or</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="w-100">
                                <a href="{{ route('google.login') }}" type="button" class="btn px-2 btn-danger text-white w-100">
                                    <svg style="width:auto;height:20px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                                        <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                    </svg>
                                    Login with Google
                                </a>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="h-divider">
                                <div class="h-inner">
                                    <span class="h-content">Don't have an account?</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('register') }}" class="w-100 btn d-block secondary-outline-btn px-3 btn-important">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('/templates/footer')