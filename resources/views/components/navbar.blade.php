@php
$color = $color ?? 'is-light';
@endphp
<nav class="navbar">
  @isset ($brand)
    <div class="navbar-brand {{ $color }}">
      <a href="{{ $brandUrl or url('/') }}" class="navbar-item {{ $brandClass or '' }}">
        {{ $brand }}
      </a>
      <button class="button navbar-burger {{ $color }}">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  @endisset

  <div class="navbar-menu">
    @isset ($start)
      <div class="navbar-start">
        {{ $start }}
      </div>
    @endisset
    @isset ($end)
      <div class="navbar-end">
        {{ $end }}
      </div>
    @endisset
  </div>
</nav>
