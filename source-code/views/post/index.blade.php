@extends('layouts.main')

@section('container')
    <div class="d-flex col-md-12">
    <div class="col-md-6">
        <h1 class="mt-3 fw-bold">Dashboard</h1>
    </div>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    {{-- start table --}}
    <div class="col-md-10">
        <div class="card-body mt-3">
            <div class="table-responsive col-lg-12">
                <table class="table table-striped">
                    <thead class="fs-6 fw-bold bg-light">
                        <tr class="fs-6">
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-6 text-secondary">
                        @if(count($Posts)>0)
                        @foreach($Posts as $post)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('storage/'.$post->gambar)}}" style="width: 30%" alt=""></td>
                            <td>{{ $post->judul}}</td>
                            <td>{{ $post->isi}}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="/post/{{$post->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm bg-danger text-white rounded" onclick="return confirm('Apakah kamu yakin? ')">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-sm bg-primary text-white" type="button">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="{{ route('post.show', ['post' => $post->id]) }}" class="btn btn-sm bg-success text-white" type="button">
                                        <i class="bi bi-send-fill"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7">No record Found</td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- end table --}}
@endsection