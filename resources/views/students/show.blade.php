<!-- use layout/main.blade.php as parent -->
@extends('layout.main')

<!-- declare what is will fill the title section -->
@section('title', 'Student Detail')
<!-- declare what is will fill the container section -->
@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="my-3">Student Detail</h1>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$student->nama}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
          <p class="card-text">{{$student->jurusan}}</p>
          <p class="card-text">{{$student->email}}</p>

          <a href="{{$student->id}}/edit" class="btn btn-primary">Edit</a>
          <form action="{{$student->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/students" class="card-link">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection