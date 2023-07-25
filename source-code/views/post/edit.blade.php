@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            
          <form enctype="multipart/form-data" method="POST" action="{{ route('post.update', ['post' => $post->id]) }}">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control" id="title" name="judul" value="{{$post->judul}}">
            </div>
            <div class="mb-3">
              <label for="isi" class="form-label">Isi</label>
              <input type="text" class="form-control" id="isi" name="isi" value="{{$post->isi}}">
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
          
          
          
      
        </table>
      </div>
@endsection