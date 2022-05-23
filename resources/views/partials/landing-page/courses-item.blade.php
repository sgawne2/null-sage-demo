<div class="bg-white text-center rounded-2xl w-72 cursor-pointer flex flex-col justify-between">
  
  <div class="inline-block mx-auto">
    <div class="absolute m-2 py-0.5 px-4 bg-white text-sm font-normal text-black rounded-xl">{{ $category }}</div>
    <img src="@asset('images/' . $image)">
  </div> 

  <div class="py-4 px-6">
    <p class="text-navy-blue text-2xl font-bold">{{ $label }}</p>
    <p class="text-sm font-normal">{{ $blurb }}</p>
  </div>
  
  <div class="px-6 flex flex-row justify-between justify-self-end">
    <div>
      @include('icons.arrow-right')
      <span class="pl-1 text-navy-blue text-sm font-bold">{{ $lesson_count }}x Lessons</span>
    </div>
    
    <div class="rounded-lg px-3 bg-violet-blue-2 text-white text-sm font-normal">
      <span>{{ $review_avg }}</span>
      @include('icons.star')
    </div>

  </div>
</div>