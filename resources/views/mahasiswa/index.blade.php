<!-- use layout/main.blade.php as parent -->
@extends('layout.main')

<!-- declare what is will fill the title section -->
@section('title', 'Daftar Mahasiswa')
<!-- declare what is will fill the container section -->
@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Daftar Mahasiswa</h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- display mahasiswa data revieved from props -->
          @foreach($mahasiswa as $item)
          <tr>
            <th scope="row">{{$loop -> iteration}}</th>
            <td>{{$item -> nama}}</td>
            <td>{{$item -> nim}}</td>
            <td>{{$item -> email}}</td>
            <td>{{$item -> jurusan}}</td>
            <td>
              <a href="" class="badge badge-primary badge-pill">edit</a>
              <a href="" class="badge badge-danger badge-pill">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection