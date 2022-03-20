
@extends('layouts.app')
@section('title', 'Semua Post')
@section('content')

<div class="wrapper">
  <h1 style="text-align: center;">Semua Post</h1>
  
  @if ($message = Session::get('success'))
  <div class="alert-success" role="alert">
    <p>{{ $message }}</p>
  </div>
  
  @endif
  <a style="margin-bottom:10px" href="/create" class="btn-blue">Tambah</a>
  <table style="width:100%">
    <thead>
      <tr>
        <th>Judul Buku</th>
        <th>Author</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Simopsis</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td style="width: 15%" ><a href="/show/{{ $post ->id }}">{{ $post->judulBuku}}</td></a>
        <td style="width: 15%" >{{ $post->author }}</td>
        <td style="width: 13%" >{{ $post->penerbit }}</td>
        <td style="width: 7%" >{{ $post->tahunTerbit }}</td>
        <td style="width: 30%" >{{ $post->sinopsis }}</td>
        <td style="width: 100px"><a href="/edit/{{ $post ->id }}" class="btn-green">Edit</a></td>
        <form method="POST" action="{{ url('posts', $post->id ) }}">
            @csrf
            @method('DELETE')
            <td style="width: 100px"><button class="btn-red">Hapus</button></td>
          </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
