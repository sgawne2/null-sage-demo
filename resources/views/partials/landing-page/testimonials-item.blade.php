<div class="flex flex-row items-center relative p-4 mx-auto testimonial-item active rounded-2xl border-4 border-pale-violet max-w-lg" data-position="{{ $pos }}">
  <img class="-ml-[74px] border-[6px] border-pale-violet rounded-full cursor-pointer" src="@asset('images/' . $image)" alt="">
  <div class="mb-6 mx-4">
    <span class="text-xl font-normal">{{ $review_text }}</span>
    <span class="absolute right-6 bottom-2.5 text-2xl font-semibold">-{{ $reviewer }}</span>
  </div>
</div>