<section class="hero {{ $color or '' }} {{ $class or '' }}">
  @isset ($head)
    <header class="hero-head">
      {{ $head }}
    </header>
  @endisset

  <div class="hero-body">
    {{ $slot }}
  </div>

  @isset ($foot)
    <footer class="hero-foot">
      {{ $foot }}
    </footer>
  @endisset
</section>
