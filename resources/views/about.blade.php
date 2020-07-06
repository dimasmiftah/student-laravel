<!-- use layout/main.blade.php as parent -->
@extends('layout.main')

<!-- declare what is will fill the title section -->
@section('title', 'About')
<!-- declare what is will fill the container section -->
@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">My name is {{$nama}}!</h1>
    </div>
  </div>
</div>
@endsection