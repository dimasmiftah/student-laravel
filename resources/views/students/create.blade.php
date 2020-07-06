<!-- use layout/main.blade.php as parent -->
@extends('layout.main')

<!-- declare what is will fill the title section -->
@section('title', 'Student Form')
<!-- declare what is will fill the container section -->
@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="my-3">Student Form</h1>
      
      <form method="post" action="/students">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
          @error('nama')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="number" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM" name="nim" value="{{old('nim')}}">
          @error('nim')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
          @error('email')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{old('jurusan')}}">
          @error('jurusan')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save Data</button>
      </form>

    </div>
  </div>
</div>
@endsection