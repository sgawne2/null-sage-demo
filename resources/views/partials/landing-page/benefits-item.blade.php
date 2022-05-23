<div class="flex flex-row my-7">
    <div class="m-5">
        @include('icons.' . $icon)
    </div>
    <div class="mx-9">
        <h3 class="my-4 text-2xl font-bold">{{ $label }}</h3>
        <p class="text-sm font-normal">{{ $description }}</p>
    </div>
</div>