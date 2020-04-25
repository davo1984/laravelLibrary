@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <div class="column">
      @foreach ($book->checkouts as $checkout)
        {{ $checkout->patron->name }}
      @endforeach
      <li>{{ $book->checkouts }}, {{ $book->title }}, {{ $book->checkouts[0]->patron->name }}</li>
    </div>
  </div>
</div>

@endsection