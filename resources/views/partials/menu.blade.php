<aside class="menu">
  <p class="menu-label">Sidebar Menu</p>
  <ul class="menu-list">
    @foreach ([1, 2, 3, 4, 5] as $item)
      <li>
        <a class="{{ $item == 1 ? 'is-active' : '' }}" href="#{{ $item }}">Item {{ $item }}</a>
      </li>
    @endforeach
  </ul>
</aside>
