@include('/templates/header')
<div class="flex flex-col items-center">
    <div class="w-full sm:max-w-md m-4 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg">
        <div><h2 class="text-2xl text-left pb-3">Forgot Password</h2></div>
        @include('/components/notification')

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <label class="block font-medium text-sm text-gray-700" for="email">
                    Email
                </label>
                <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="email" type="email" name="email" value="{{ old('email') }}" required="required" autofocus="autofocus">
            </div>
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Email Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>
@include('/templates/footer')
