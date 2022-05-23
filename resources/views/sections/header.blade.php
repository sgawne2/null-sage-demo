<header 
    id="top-nav" 
    class="px-2 py-8 sticky z-50 top-0 shadow-lg bg-no-repeat font-lato"
    style="background-image: url(@asset('images/bg-top.png')); background-position: center top; background-size: 1600px;"
  >
  <div class="container max-w-screen-lg mx-auto px-5 flex flex-wrap justify-between items-center">
    <a class="brand w-5/12" href="{{ home_url('/') }}">
      <img src="@asset('images/logo.png')" alt="{!! $siteName !!}" class="h-16">
    </a>

    {{-- mobile --}}
    <button data-collapse-toggle="menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200">
      @include('icons.hamburger')
    </button>

    {{-- navigation --}}
    <nav class="nav-primary hidden w-full md:block md:w-7/12" id="menu">
      @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav header-nav flex flex-row justify-between text-white list-none text-xl', 'echo' => false]) !!}
      @else
        <div class="menu-menu-1-container">
          <ul id="menu-menu-1" class="nav header-nav flex flex-row justify-between text-white list-none text-xl">
            <li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="#">Courses</a></li>
            <li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16"><a href="#">Platforms</a>
              <ul class="sub-menu">
                <li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#">Platform 1</a></li>
                <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20"><a href="#">Platform 2</a></li>
                <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22"><a href="#">Platform 3</a></li>
              </ul>
            </li>
            <li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="#">Resources</a></li>
            <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="#">About</a></li>
          </ul>
        </div>
      @endif
    </nav>
  </div>
</header>