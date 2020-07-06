<!-- use layout/main.blade.php as parent -->
@extends('layout.main')

<!-- declare what is will fill the title section -->
@section('title', 'Student List')
<!-- declare what is will fill the container section -->
@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="my-3">Student List</h1>

      <a href="/students/create" class="btn btn-primary my-3">Add new student</a>

      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif

      <ul class="list-group">
        @foreach($students as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{$item->nama}}
          <a href="/students/{{$item->id}}" class="badge badge-primary badge-pill">detail</a>
        </li>
        @endforeach
      </ul>

    </div>
  </div>
</div>
@endsection