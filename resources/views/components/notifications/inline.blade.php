@if (session()->has('status'))
<div class="m-1 bg-teal-200 border border-teal-500 text-gray-700 p-3 rounded relative" role="alert">
    @include('/components/notifications/components/status')
</div>
@endif
@if (session()->has('success'))
<div class="m-1 bg-[#31940a] border border-green-700 text-gray-100 p-3 rounded relative" role="alert">
    @include('/components/notifications/components/success')
</div>
@endif
@if (session()->has('warning'))
<div class="m-1 bg-yellow-300 border border-gray-500 text-gray-700 p-3 rounded relative" role="alert">
    @include('/components/notifications/components/warning')
</div>
@endif

@if (session()->has('danger'))
<div class="m-1 bg-[#d93353] border border-gray-400 text-gray-100 p-3 rounded relative" role="alert">
    @include('/components/notifications/components/danger')
</div>
@endif

@if($errors->any())
@foreach ($errors->all() as $error)
<div class="m-1 bg-[#d93353] border border-gray-400 text-gray-100 p-3 rounded relative" role="alert">
    @include('/components/notifications/components/danger')
</div>
@endforeach
@endif