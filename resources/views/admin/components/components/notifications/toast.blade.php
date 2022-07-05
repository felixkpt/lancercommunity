@if (session()->has('status'))
<div id="toast-status" class="bg-teal-200 absolute z-50 top-2 right-2 transition-opacity duration-1000 ease-out flex items-center w-full max-w-sm p-3 rounded-lg shadow" role="alert">
    @include('/admin/components/notifications/components/status')
    <?php $dismissTarget = '#toast-status'; ?>
    @include('/admin/components/notifications/components/dismiss')
</div>
@endif
@if (session()->has('success'))
<div id="toast-success" class="bg-[#2a9d2a] absolute z-50 top-2 right-2 transition-opacity duration-1000 ease-out flex items-center w-full max-w-sm p-3 rounded-lg shadow" role="alert">
    @include('/admin/components/notifications/components/success')
    <?php $dismissTarget = '#toast-success'; ?>
    @include('/admin/components/notifications/components/dismiss')
</div>
@endif
@if (session()->has('warning'))
<div id="toast-warning" class="bg-yellow-300 absolute z-50 top-2 right-2 flex items-center w-full max-w-sm p-3 rounded-lg shadow" role="alert">
    @include('/admin/components/notifications/components/warning')
    <?php $dismissTarget = '#toast-warning'; ?>
    @include('/admin/components/notifications/components/dismiss')
</div>
@endif
@if (session()->has('danger'))
<div id="toast-danger" class="bg-[#d22e4d] absolute z-50 top-2 right-2 transition-opacity duration-1000 ease-out flex items-center w-full max-w-sm p-3 rounded-lg shadow" role="alert">
    @include('/admin/components/notifications/components/danger')
    <?php $dismissTarget = '#toast-danger'; ?>
    @include('/admin/components/notifications/components/dismiss')
</div>
@endif
@if($errors->any())
<div id="toast-errors" class="bg-[#d22e4d] absolute z-50 top-2 right-2 transition-opacity duration-1000 ease-out flex items-center w-full max-w-sm p-3 rounded-lg shadow" role="alert">
    <div class="flex flex-col">
        @foreach ($errors->all() as $error)
        @include('/admin/components/notifications/components/danger')
        @endforeach
    </div>
    <?php $dismissTarget = '#toast-errors'; ?>
    @include('/admin/components/notifications/components/dismiss')
</div>
@endif