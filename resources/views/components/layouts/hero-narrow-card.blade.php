@component('bully::components.hero')
  @slot('class', 'is-fullheight')

  <div class="container">
    <div class="columns is-centered">
      <div class="column {{ $columnWidth or 'is-one-quarter' }}">

        <h1 class="title is-1 has-text-centered">{{ $title or 'Login' }}</h1>

        <div class="card block">
          <div class="card-content">
            {{ $slot }}
          </div>
        </div>

        @isset ($foot)
          <div class="block has-text-centered">
            {{ $foot }}
          </div>
        @endisset

      </div>
    </div>
  </div>
@endcomponent
