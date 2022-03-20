
@extends('layouts.app')
@section('title', 'Buat Post Baru')
@section('content')
<div class="wrapper">
  <h1>Tambah Buku Baru</h1>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form method="POST" action="/store" enctype="multipart/form-data">
    @csrf
    <input name="judulBuku" type="text" placeholder="Judul Buku..."> 
    <input name="author" type="text" placeholder="Body...">
    <input name="penerbit" type="text" placeholder="Penerbit...">
    <input name="tahunTerbit" type="text" placeholder="Tahun Terbit...">
    <input name="sinopsis" type="text" placeholder="Sinopsis...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
