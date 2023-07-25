@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
         
          <form enctype="multipart/form-data" method="POST" action="/post">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control" id="title" name="judul">
            </div>
            <div class="mb-3">
              <label for="isi" class="form-label">Isi</label>
              <input type="text" class="form-control" id="isi" name="isi">
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
          </form>
          
          
          
      
        </table>
      </div>
@endsection