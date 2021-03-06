<div 
    id="bg-container" 
    class="bg-white bg-no-repeat mx-auto max-w-screen-2xl" 
    style="background-image: url(@asset('images/bg-top.png')), url(@asset('images/bg-bottom.png')); background-position: center top, center bottom; background-size: 1600px;"
    {{-- TODO: read about best practices for when to prefer inline styles over tailwind classes. seems like a good idea here? --}}
  >

  @include('sections.header')
  
  <main id="main" class="main font-lato">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

  @include('sections.footer')
  
</div>