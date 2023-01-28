<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <div class="container">
    <main id="main" class="main">
      @yield('content')
    </main>

    <aside class="sidebar">
      {!! get_search_form(false) !!}
      @php(dynamic_sidebar('sidebar-primary'))
    </aside>
</div>

<footer class="footer-wrapper">
  @include('sections.footer')
</footer>
