@php
$toggleTargetId = $toggleTargetId ?? str_random();
@endphp
<nav class="navbar {{ $color or '' }} {{ $class or '' }}">
  @isset ($brand)
    <div class="navbar-brand">
      <a href="{{ $brandUrl or url('/') }}" class="navbar-item {{ $brandClass or '' }}">
        {{ $brand }}
      </a>
      <button class="button navbar-burger {{ $color or '' }}" data-target="{{ $toggleTargetId }}">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  @endisset

  <div class="navbar-menu" id="{{ $toggleTargetId }}">
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
