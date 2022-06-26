@include('/templates/header')
<div class="col">
    <div class="row justify-content-center p-3">
        <div class="col-12 col-md-6 col-lg-5 bg-white shadow-md rounded m-4 py-3">
            @include('/components/notification')
            <div class="row">
                <div id="account-chooser" class="col-12 col-md-8 mx-auto">
                    <div>
                        <h2 class="text-center pb-3">Welcome back!</h2>
                    </div>
                    <div id="email-auth">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <div class="mb-4">
                                <h5 class="text-center">{{ $email }}</h5>
                                <input type="hidden" name="email" value="{{ $email }}">
                            </div>
                            <div class="mb-4">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="required" autocomplete="current-password">
                            </div>
                            <div class="mb-5 d-flex justify-content-between">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                </label>
                                @if (Route::has('password.request'))
                                <a class="text-end text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                            </div>
                            <div class="mb-5">
                                <button type="submit" class="w-100 btn px-2 secondary-btn">
                                    Login in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('/templates/footer')