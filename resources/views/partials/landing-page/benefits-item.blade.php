<div class="flex flex-col sm:flex-row my-7">
    <div class="mx-auto sm:m-5">
        @include('icons.' . $icon)
    </div>
    <div class="mx-9">
        <h3 class="text-center sm:text-left my-4 text-2xl font-bold">{{ $label }}</h3>
        <p class="text-center sm:text-left text-sm font-normal">{{ $description }}</p>
    </div>
</div>