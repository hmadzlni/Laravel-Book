
@extends('layouts.app')
@section('title', 'Post Edit')
@section('content')
<div class="wrapper">
  <h1>Edit Buku</h1>
  
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
  
  <form method="POST" action="/update/{{ $post->id }}">
    @csrf
    @method('POST')
    <input name="judulBuku" value="{{ $post->judulBuku }}" type="text" placeholder="judulBuku..."> 
    <input name="author" value="{{ $post->author }}" type="text" placeholder="author...">
    <input name="penerbit" value="{{ $post->penerbit }}" type="text" placeholder="penerbit...">
    <input name="tahunTerbit" value="{{ $post->tahunTerbit }}" type="text" placeholder="tahunTerbit...">
    <input name="sinopsis" value="{{ $post->sinopsis }}" type="text" placeholder="sinopsis...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
