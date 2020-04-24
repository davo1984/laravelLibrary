@extends('layout')

@section('content')

<div class="container">
  <h2>Welcome</h2>
  <br>
  <form action="/patron/checkedOut">
    <label for="libraryCard">Library Card #</label>
    <input type="text" id="libraryCard" name="libraryCard" value=""><br><br><br>
    <input type="submit" value="Submit">
  </form>
</div>

  <a href="/patron/viewAll" class="btn">View All Books</a>
  <!-- <a href="/patron/checkedOut" class="btn">Your Checked Out Books</a> -->

</div>
@endsection