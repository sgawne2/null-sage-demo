<div class="bg-white text-center border border-violet-blue-2 rounded-2xl w-72">
    {{ $category }}
    <div class="inline-block mx-auto"><img src="@asset('images/' . $image)"></div> 
    <p class="text-navy-blue text-2xl font-bold">{{ $label }}</p>
    <p class="text-sm font-normal">{{ $blurb }}</p>
    <p class="text-navy-blue text-sm font-bold">{{ $lesson_count }}</p>
    <p class="bg-violet-blue-2 text-white text-sm font-normal">{{ $review_avg }}</p>
</div>