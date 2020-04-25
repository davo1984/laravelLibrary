@extends('layout')

@section('content')

  <div class="container">
    <div class="row">
      <div class="column">
        @foreach ($books as $book)
          <li>{{ $book->title }}</li>
        @endforeach
        <!-- <a href="#" class="btn">Button</a> -->
      </div>
    </div>
  </div>

@endsection