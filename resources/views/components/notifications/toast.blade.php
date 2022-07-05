@if (session()->has('status'))
<div id="toast-status" class="absolute z-50 top-2 right-2 transition-opacity duration-1000 ease-out flex items-center w-full max-w-xs bg-teal-200 p-3 rounded-lg shadow" role="alert">
    @include('/components/notifications/components/status')
    <?php $dismissTarget = '#toast-status'; ?>
    @include('/components/notifications/components/close-btn')
</div>
@endif
@if (session()->has('success'))
<div id="toast-success" class="absolute z-50 top-2 right-2 transition-opacity duration-1000 ease-out flex items-center w-full max-w-xs bg-[#31940a] p-3 rounded-lg shadow" role="alert">
    @include('/components/notifications/components/success')
    <?php $dismissTarget = '#toast-success'; ?>
    @include('/components/notifications/components/close-btn')
</div>
@endif
@if (session()->has('warning'))
<div id="toast-warning" class="absolute z-50 top-2 right-2 flex items-center w-full max-w-xs bg-yellow-300 text-gray-700 p-3 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    @include('/components/notifications/components/warning')
    <?php $dismissTarget = '#toast-warning'; ?>
    @include('/components/notifications/components/close-btn')
</div>
@endif
@if (session()->has('danger'))
<div id="toast-danger" class="absolute z-50 top-2 right-2 transition-opacity duration-1000 ease-out flex items-center w-full max-w-xs bg-[#d93353] text-gray-200 p-3 rounded-lg shadow" role="alert">
    @include('/components/notifications/components/danger')
    <?php $dismissTarget = '#toast-danger'; ?>
    @include('/components/notifications/components/close-btn')
</div>
@endif