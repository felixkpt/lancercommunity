@if (session()->has('status'))
<div class="m-1 bg-teal-200 border border-teal-500 p-3 rounded relative" role="alert">
    @include('/admin/components/notifications/components/status')
</div>
@endif
@if (session()->has('success'))
<div class="m-1 bg-[#2a9d2a] border border-green-700 p-3 rounded relative" role="alert">
    @include('/admin/components/notifications/components/success')
</div>
@endif
@if (session()->has('warning'))
<div class="m-1 bg-yellow-300 border border-gray-500 p-3 rounded relative" role="alert">
    @include('/admin/components/notifications/components/warning')
</div>
@endif

@if (session()->has('danger'))
<div class="m-1 bg-[#d22e4d] border border-gray-400 p-3 rounded relative" role="alert">
    @include('/admin/components/notifications/components/danger')
</div>
@endif

@if($errors->any())
<div class="m-1 bg-[#d22e4d] border border-gray-400 p-3 rounded relative" role="alert">
    <div class="flex flex-col ">
        @foreach ($errors->all() as $error)
        @include('/admin/components/notifications/components/danger')
        @endforeach
    </div>
</div>
@endif