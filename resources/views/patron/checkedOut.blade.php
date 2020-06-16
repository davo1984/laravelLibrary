@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <div class="column">
      @foreach ($patrons as $patron)
        <li>{{ $patron->name }}, {{ $patron->id }}</li>
      @endforeach
      <!-- <a href="#" class="btn">Button</a> -->
    </div>
  </div>
</div>

@endsection