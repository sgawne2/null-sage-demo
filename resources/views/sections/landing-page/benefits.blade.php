<div 
    class="bg-no-repeat flex flex-row items-center bg-deep-violet text-white mt-24"
    style="background-image: url(@asset('images/benefits-bg-1.png')), url(@asset('images/benefits-bg-2.png')); background-position: left top, right bottom; background-size: 150px, 200px"
  >
  <div class="hidden lg:block lg:w-7/12">
    <img class="-mt-8 -mb-16 mx-auto" src="@asset('images/benefits-1.png')" alt="">
  </div>
  <div class="w-full my-20 sm:m-20 lg:w-5/12 lg:m-auto lg:mr-20">
    <h2 class="text-4xl text-center sm:text-5xl sm:text-left font-black my-8">Benefits from our online learning</h2>
    @include('partials.landing-page.benefits-item', [
      'icon' => 'award',
      'label' => 'Online Degrees',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim',
    ])
    @include('partials.landing-page.benefits-item', [
      'icon' => 'load',
      'label' => 'Short courses',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim',
    ])
    @include('partials.landing-page.benefits-item', [
      'icon' => 'user',
      'label' => 'Expert Training',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim',
    ])
  </div>
</div>