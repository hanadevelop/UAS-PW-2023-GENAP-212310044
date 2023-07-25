@extends('layout/template')

@section('isi')
    
<style>
  .container tkt{
            display: grid;
            place-items: center;
            height: 100vh;
        }
</style>

<section>
    <div class="judul" style="justify-content: left; display: flex; margin-top: 8%; margin-left: 9%"><h5>Beli Tiket</h5></div>
    <div class="subjdul" style="margin-top: 1%; margin-left: 9%"><h1><b>SituGede Bogor</b></h1></div>
</section>

<section>
        <div class="row">
            <div class="col-sm-5 mb-3 mb-sm-0" style="margin-left: 9%; margin-top: 6%; margin-bottom: 30%">
              <div class="card">
                <img src="/Assets/situ.jpg" class="img-fluid rounded-start" style="background-size: cover; height: 200px;" alt="cafe">
                <div class="card-body">
                  <h5 class="card-title">Tiket Masuk</h5>
                  <p class="card-text">Dapatkan Tiket Masuk SituGede 
                    Disini</p>
                  <a href="/verifbio" class="btn btn-primary">Beli Tiket</a>
                </div>
              </div>
            </div>
            
            <div class="col-sm-5" style="margin-top: 6%; margin-bottom: 30%">
              <div class="card">
                <img src="/Assets/situgede.png" class="img-fluid rounded-start" style="background-size: cover; height: 200px;" alt="cafe">
                <div class="card-body">
                  <h5 class="card-title">Tiket Masuk Rombongan</h5>
                  <p class="card-text">Beli Tiket Masuk Untuk Rombongan Sekolah, Kantor, Keluarga</p>
                  <a href="/verifbio" class="btn btn-primary">Beli Tiket</a>
                </div>
              </div>
            </div>
            

            {{-- <div class="judul" style="justify-content: left; display: flex; margin-top: 5%; margin-left: 9%;"><h5>Beli Tiket</h5></div>
            <div class="subjdul" style="margin-top: 1%; margin-left: 9%"><h1><b>Paketan SituGede Bogor</b></h1></div>

            <div class="col-sm-5" style="margin-top: 2%; margin-left: 9%">
              <div class="card">
                <img src="/Assets/situgede.png" class="img-fluid rounded-start" style="background-size: cover; height: 200px;" alt="cafe">
                <div class="card-body">
                  <h5 class="card-title">Tiket Masuk Paket 1</h5>
                  <p class="card-text">Beli Tiket Masuk Untuk Rombongan Sekolah, Kantor, Keluarga</p>
                  <a href="/verifbio" class="btn btn-primary">Beli Tiket</a>
                </div>
              </div>
            </div>

            <div class="col-sm-5" style="margin-top: 2%; margin-bottom: 2%">
              <div class="card">
                <img src="/Assets/situgede.png" class="img-fluid rounded-start" style="background-size: cover; height: 200px;" alt="cafe">
                <div class="card-body">
                  <h5 class="card-title">Tiket Masuk Paket 2</h5>
                  <p class="card-text">Beli Tiket Masuk Untuk Rombongan Sekolah, Kantor, Keluarga</p>
                  <a href="/verifbio" class="btn btn-primary">Beli Tiket</a>
                </div>
              </div>
            </div> --}}
        </div>
           
        
            
@endsection
