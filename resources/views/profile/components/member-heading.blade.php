<?php $user = isset($user) ? $user : $author ?>
<div class="bg-light m-2 d-flex justify-content-center space-y-3 px-1 pb-4 rounded">
    <div class="col-12 col-md-6">
        <div class="d-flex flex-wrap justify-content-center">
            <div class="p-2">
                <div class="bg-light rounded-circle" style="max-width: 120px;height: 120px">
                    <img style="height: 100%;width:100%;" class="mx-auto rounded-circle border-1 border-gray-100" src="{{ $user->avatar ? $user->avatar : asset('images/default-user.png') }}">
                </div>
                <p class="fs-2 text-center">{{ $user->name }}</p>
            </div>
        </div>
    </div>
</div>