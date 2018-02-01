@extends('bully::layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('bully/css/dashboard.css') }}">
@endpush

@section('content')
<div class="l-dashboard">
  <div class="columns is-gapless">
    <div class="column is-hidden-mobile is-one-quarter-tablet is-one-fifth-widescreen is-2-fullhd l-sidebar">
      <div class="inner">
        @section('sidebar')
          @include('bully::partials.menu')
        @show
      </div>
    </div>
    <div class="column l-main">
      <div class="inner">
        @yield('content')
      </div>
    </div>
  </div>
</div>
@overwrite
