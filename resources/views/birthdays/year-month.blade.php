@include('/templates/header')
<div class="flex flex-col w-full">
    <div class="flex flex-wrap">
        @include('/birthdays/components/yyyy-mm')
    </div>
    @include('/people/components/people-header')
</div>
@include('/templates/footer')
