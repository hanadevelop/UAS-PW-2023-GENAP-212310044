@extends('layout/template')
<link rel="stylesheet" href="verifbio.css">


@section('isi')

<article>
    <div class="verif">
    <div class="row-verif">
      <div class="left">
        <div class="content">
            <form>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama" required>
                </div>
                
                <div class="mb-3">
                  <label for="paket" class="form-label">Pilih Paket</label>
                  <select id="paket" class="form-select">
                    <option>Paket Pertama</option>
                    <option>Paket Kedua</option>
                  </select>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control @error('confirm') is-invalid @enderror" placeholder="Jumlah Orang" id="jumlah">
                  </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date">
                </div>
              </form>
        </div>
        
      </div>
    

    <div class="right">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Total Harga</h5>
              <div style="display: flex; align-items: center;">
                <img src="/Assets/LogoSituGede.png" style="width: 20%; margin-left: 10%; margin-right: 15px">
                <div>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Tiket Masuk</h6>
                  <p class="card-text">Rp. 10.000</p>
                </div>
              </div>
            </div>
          </div>

          <div class="bayar" style="margin-top: 10%;">
          <h4>Pilih Pembayaran </h4>
          
          <div class="btn-group py-1" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-light" for="btnradio1"><i class="bi bi-bank"></i> Bank</label>
          
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-light" for="btnradio2"><i class="bi bi-cash-stack"></i> Dana</label>
          
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-light" for="btnradio3"><i class="bi bi-wallet2"></i> Gopay</label>
          </div>
          
          {{-- <div class="form-check my-2">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              <i class="bi bi-bank"></i> Bank
            </label>
          </div>

          <div class="form-check my-2">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              <i class="bi bi-cash-stack"></i> Dana
            </label>
          </div>

          <div class="form-check my-2">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              <i class="bi bi-wallet2"></i> Gopay
            </label>
          </div> --}}

          <div class="d-grid gap-1 col-6 my-3">
          <a href="/pesan" class="btn btn-primary " onclick="alert('Apakah Data Sudah Benar?')">Submit</a>
          </div>
          </div>
    </div>


  </article>

@endsection
