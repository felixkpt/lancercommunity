@include('/templates/header')
<div class="col">
    <div class="row justify-content-center p-3">
        <div class="col-12 col-md-6 col-lg-5 bg-white shadow-md rounded m-4 py-3">
            <div>
                <h2 class="text-center pb-3">Forgot Password</h2>
            </div>
            @include('/components/notifications/inline')

            <div class="col-12 col-lg-8 mx-auto">
                <div>
                    <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
                </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <input class="form-control" id="email" type="email" name="email" value="{{ old('email') ?? $email }}" required="required" autofocus="autofocus" placeholder="Enter email">
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="btn px-2 btn-danger text-white w-100">
                            Email Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('/templates/footer')