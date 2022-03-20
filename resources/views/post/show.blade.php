@extends('layouts.app')
@section('title', 'Post Edit')
@section('content')
    <!-- Modal -->
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
<head>
  <style>
    .modal-header{
      padding-bottom: 5px;
     border-bottom: 2px solid #444;
     margin-top: 0;
     margin-bottom: 10px;
    }
    tr, td {
  border: 1px solid black;
  border-radius: 10px;
}
  </style>
</head>
<div class="modal fade" {{ $post->id }} tabindex="-1" >
    
        <div class="modal-header">
          <h1 >Detail Buku </h5>
        </div>

        <table>
        <div class="modal-body">
            <div class="form-group">
                <tr><td><label for="judul">Judul Buku</label></td>
                <td><input type="text"  value="{{ $post->judulBuku }}" readonly> </td>
              </tr>
            </div>

            <div class="form-group">

              <tr> <td> <label for="author">Author</label></td>
                <td><input type="text"  value="{{ $post->author }}" readonly></td>
              </tr>
            </div>
            
            <div class="form-group">
                <tr><td><label for="penerbit">Penerbit</label></td>
                <td><input type="text"  value="{{ $post->penerbit }}" readonly></td>
              </tr>
            </div>

            <div class="form-group">
                <tr><td><label for="tahunTerbit">Tahun Terbit</label></td>
                <td><input type="text"  value="{{ $post->tahunTerbit }}" readonly></td>
              </tr>
            </div>

            <div class="form-group">
                <tr><td><label for="sinopsis">Sinopis</label></td>
               <td><textarea name="sinopsis"  placeholder="Masukkan Sinopsis Buku" readonly>{{ $post->sinopsis }}</textarea></td> 
              </tr></div>
        </div>
      </table>
      </div>
 

@endsection