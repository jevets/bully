@extends('bully::layouts.master')

@section('content')
  @section('navbar')
    @include('bully::partials.navbar')
  @show

  @yield('content')
@overwrite
