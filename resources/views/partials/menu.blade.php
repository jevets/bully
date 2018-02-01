@php
$menu = $menu ?? null;
@endphp

@isset ($menu['items'])
<aside class="menu">

  @isset ($menu['label'])
    <p class="menu-label">{{ $menu['label'] }}</p>
  @endisset

  @if (isset($menu['items']) && count($menu['items']))
    <ul class="menu-list">
      @foreach ($menu['items'] as $item)
        <li>
          <a href="{{ $item['url'] }}" class="{{ Request::is($item['url']) ? 'is-active' : '' }}">
            {{ $item['label'] }}
          </a>
        </li>
      @endforeach
    </ul>
  @endif

  {{--
  <p class="menu-label">Sidebar Menu</p>
  <ul class="menu-list">
    @foreach ([1, 2, 3, 4, 5] as $item)
      <li>
        <a class="{{ $item == 1 ? 'is-active' : '' }}" href="#{{ $item }}">Item {{ $item }}</a>
      </li>
    @endforeach
  </ul>
  --}}
</aside>
@endisset
