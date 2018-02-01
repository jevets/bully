@extends('bully::layouts.app')

@section('content')
  <section class="section">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-half">
          <h1 class="title is-1">Dashboard</h1>
          <div class="card">
            <div class="card-content">
              @if (session('status'))
                <div class="notification is-success">
                  {{ session('status')}}
                </div>
              @endif
              <p>You are logged in!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
