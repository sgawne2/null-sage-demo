<header 
    id="top-nav" 
    class="px-2 py-8 sticky top-0 shadow-lg bg-no-repeat"
    style="background-image: url(@asset('images/bg-top.png')); background-position: center top; background-size: 1600px;"
  >
  <div class="container max-w-screen-lg mx-auto flex flex-wrap justify-between items-center">
    <a class="brand w-5/12" href="{{ home_url('/') }}">
      <img src="@asset('images/logo.png')" alt="{!! $siteName !!}" class="h-16">
    </a>

    {{-- mobile --}}
    <button data-collapse-toggle="menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      @include('icons.hamburger')
    </button>

    {{-- navigation --}}
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary hidden w-full md:block md:w-7/12" id="menu" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav header-nav flex flex-row justify-between text-white list-none text-xl', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>