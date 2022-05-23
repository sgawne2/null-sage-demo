<div class="mt-14 mb-44">
  <div class="mb-20 mx-auto max-w-[27rem] text-center">
    <h2 class="text-navy-blue text-4xl font-extrabold">Our Popular Courses</h2>
    <p class="my-4 text-outer-space text-sm font-normal">Lorem ipsum dolor sit amet, in sed integer. Scelerisque nam evget imperdiet accumsan, ipsum  turpis cursus. In elit amet, tortor nunc.</p>
  </div>

  <div class="flex flex-row text-outer-space mx-auto max-w-[60rem] justify-center lg:justify-between">
    <div>
      @include('partials.landing-page.courses-item', [
        'category' => 'Creative',
        'image' => 'courses-1.png',
        'label' => 'Creative Writing',
        'blurb' => 'Creative Writing : Creative writing is any writing that goes outside the bounds of normal professional',
        'lesson_count' => '12',
        'review_avg' => '4.9',
      ])
    </div>
    <div class="hidden lg:block">
      @include('partials.landing-page.courses-item', [
        'category' => 'Creative',
        'image' => 'courses-2.png',
        'label' => 'Web Development',
        'blurb' => 'Web development refers in general to the tasks associated with developing websites for hosting via intranet or internet.',
        'lesson_count' => '12',
        'review_avg' => '4.9',
      ])
    </div>
    <div class="hidden lg:block">
      @include('partials.landing-page.courses-item', [
        'category' => 'Creative',
        'image' => 'courses-3.png',
        'label' => 'Graphic Design',
        'blurb' => 'Graphic design is a craft where professionals create visual content to communicate messages.',
        'lesson_count' => '12',
        'review_avg' => '4.9',
      ])
    </div>
  </div>
</div>