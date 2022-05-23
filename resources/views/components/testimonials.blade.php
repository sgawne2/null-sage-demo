<div class="flex flex-col">
  <div class="mx-auto inline-block text-center max-w-xl">
    <h2 class="text-4xl my-11 sm:text-5xl text-navy-blue font-black">Student Testimonial</h2>
    <span>vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci</span>
  </div>

  <div id="testimonials-container" class="my-24 mx-16 relative xl:h-[520px]">
    @foreach($items as $pos => $item)
      @if($pos === 0)
        @include('partials.landing-page.testimonials-item', array_merge($item, ['pos' => $pos]))
      @else
        @include('partials.landing-page.testimonials-satellite', array_merge($item, ['pos' => $pos]))
      @endif
    @endforeach
  </div>
</div>