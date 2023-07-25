@extends('layout/template')

@section('isi')
    {{-- Carousel --}}
    <section>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item ">
              <img src="https://cdn2.tstatic.net/travel/foto/bank/images/danau-situ-gede-rabu-1512020.jpg" class="d-block w-100" style="height: 700px" alt="...">
            </div>
            <div class="carousel-item active">
              <img src="https://cdn-2.tstatic.net/travel/foto/bank/images/situ-gede-bogor-jawa-barat.jpg" class="d-block w-100" style="height: 700px" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://radarmajalengka.disway.id/upload/5b474c3ac3df843d478647c0dfed13dd.jpeg" class="d-block w-100" style="height: 700px" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  </section>


  {{-- bagian tiket --}}
  <section>
      <div class="rectangle shadow" style="width: 800px; height: 100px; background-color: #ffffff; justify-content: center; align-items: center; display: flex; margin-left: 20%; margin-top: 4%; border-radius: 8px;">
          <h4><b>BELI TIKET SEKARANG :</b></h4>
          <a href="/tiket" class="btn btn-secondary btn-sm" style="margin-left: 2%; margin-bottom: 1%"> Beli Tiket</a>
      </div>
  </section>


  <article>
    <div class="history">
    <div class="row-history">
      <div class="left">
        <div class="content">
          <h1>SituGede Bogor</h1>
          <p>Tidak banyak memang destinasi wisata alam yang disuguhkan Kota Bogor untuk memanjakan dan menarik minat wisatawan. Satu di antara yang dimiliki kota ini adalah Situ Gede yang berlokasi di Kelurahan Situ Gede, Kecamatan Bogor Barat, Kota Bogor.
          </p>
  
          <p>Destinasi wisata ini mengandalkan pesona telaga situ yang menjadi nilai jualnya, selain keasrian alam sekitarnya yang ditumbuhi rimbunan pepohonan besar yang akan memberikan kenyamanan dan kesejukan serta sesuatu yang berbeda kepada siapapun yang mengunjunginya.</p>
        </div>
        
      </div>
    

    <div class="right">
      <img src="/Assets/situgede.png" alt="">
      </div>
    </div>
  </div>
  </article>


  <section>
    <div>
    <h1 class="text-center fw-bold" >Kenapa Harus Ke SituGede</h1>
    {{-- <h5 class="text-center"> Yang Diberikan Oleh SituGede</h5> --}}
    </div>
    
    <div class="service">
      <div class="container-service">
        <div class="box-service">
          <div class="box mx-5">
            <i class="fa-solid fa-coins"></i>
            <h4>Harga terjangkau</h4>
            <p>Wisata SituGede Memberikan Tiket Yang Murah Dan Aman Untuk Kantong.</p>
          </div>

          <div class="box mx-5">
            <i class="bi bi-patch-check-fill"></i>
            <h4>Sudah Terverifikasi</h4>
            <p>Wisata SituGede Ini Sudah Terverifikasi Atau Diakui Oleh Pemerintah.</p>
          </div>

          <div class="box mx-5">
            <i class="fa-solid fa-people-roof"></i>
            <h4>Aman dan Ramah</h4>
            <p>Jika Anda Membawa Anak Tidak Perlu khawatir Karena Disana Permainan Atau Atraksi Sudah Terjamin Aman.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- Atraksi Wisata --}}
  <article>
    <div class="container-fluid my-5 mt-16">
      <h1 id="1" class="text-center fw-bold display-7 mb-3 ">Atraksi Wisata</h1>
      <h5 class="text-center">Atraksi Yang Terdapat Pada SituGede Bogor</h5>
      <div class="row mt-5 mx-4">
        <div class="owl-carousel owl-theme">
            
          <div class="item mb-4">
                <div class="card border-0 shadow">
                    <img src="/Assets/perahubebek.png" alt="bebek" class="card-img-top">
                    <div class="card-body">
                        <h4>Perahu Bebek</h4>
                        <p>Wisata danau di Indonesia biasanya tidak akan lengkap kalau tidak ada wahana perahu bebek atau perahu kayuh yang menemani liburan wisata anda. </p>
                        <a class="Selengkapnya-link" aria-current="page" href="/bebek">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="item mb-4">
              <div class="card border-0 shadow">
                  <img src="/Assets/kano.png" alt="bebek" class="card-img-top">
                  <div class="card-body">
                      <h4>Perahu Kano</h4>
                      <p>Wisata danau di Indonesia biasanya tidak akan lengkap kalau tidak ada wahana perahu bebek atau perahu kayuh yang menemani liburan wisata anda. </p>
                      <a class="Selengkapnya-link" aria-current="page" href="/kano">Selengkapnya</a>
                  </div>
              </div>
          </div>

          <div class="item mb-4">
            <div class="card border-0 shadow">
                <img src="/Assets/perahu.png" alt="bebek" class="card-img-top">
                <div class="card-body">
                    <h4>Perahu</h4>
                    <p>Wisata danau di Indonesia biasanya tidak akan lengkap kalau tidak ada wahana perahu bebek atau perahu kayuh yang menemani liburan wisata anda. </p>
                    <a class="Selengkapnya-link" aria-current="page" href="/home/perahubebek">Selengkapnya</a>
                </div>
            </div>
          </div>
          
      </div>
  
      </div>
    </div>
  </article>

        {{-- 1. owl carousel min .js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        {{-- init owl carousel  --}}

        <script>
                var owl = $ ('.owl-carousel');
                owl.owlCarousel({
                    items:3,
                    loop:true,
                    margin:7,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true
                });
                $('.play').on('click',function(){
                    owl.trigger('play.owl.autoplay',[1000])
                })
                $('.stop').on('click',function(){
                    owl.trigger('stop.owl.autoplay')
              })
          </script>


  {{-- Fasilitas --}}
    <article class="fasilitas">
        <div class="judul" style="padding-bottom: 30px">
        <h1>Fasilitas</h1>
        <p>Fasilitas Apa Saja Yang Terdapat Pada SituGede Bogor</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach($Data as $fasilitas)
            <div class="col">
              <div class="card">
                <img src="{{asset('storage/'.$fasilitas->gambar)}}" alt="">
                <div class="card-body">
                  <h3>{{$fasilitas->judul}}</h3>
                  <p>{{$fasilitas->isi}}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        
    </article>


  <section style="margin-top:%">
    
        <div class="maps" style="padding-bottom: 20%">
            <h1 class="text-center fw-bold" style="margin-top: 5%" >Maps</h1>
            <h5 class="text-center" style="margin-bottom: 5%">Rute Menuju Wisata SituGede Bogor</h5>
        
        <div class="row-maps">
            <div class="left-maps">
              <div class="content">
                
                <h5><b>Alamat Utama</b></h5>
                <p>Jl. Tambakan No.01, Kelurahan Situ Gede Kecamatan Bogor Barat , Kota Bogor Jawa Barat 16115.</p>

                <h5><b>Telephone</b></h5>
                <p>0895705513448</p>
               
                <h5><b>Email</b></h5>
                <p>situgedecifor@gmail.com</p>

                <div class="sosmed">
                <a href="https://www.instagram.com/ekowisata_situgede/"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                </div>

              </div>
                
            </div>
          
      
          <div class="right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15854.99147944293!2d106.73602774808262!3d-6.553481895032245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4a20534f649%3A0xd1776f510c54cce1!2sSitugede%2C%20Bogor%20Barat%2C%20Bogor%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1685624706343!5m2!1sen!2sid" width="580" height="350" frameborder="5" style="border:0; margin-left: 15%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
  </section>

    <section id="testimoni">
      <div class="testimoni-heading">
        <span>Apa Kata Mereka</span>
        <h1>Pendapat Mereka</h1>
      </div>

      <div class="testimoni-box-container">

          <div class="testimoni-box shadow">
              <div class="box-top">
                  <div class="profile">
                      <div class="profile-img">
                        <img src="/Assets/ridwankamil.png" alt="">
                      </div>
                      <div class="name-user">
                        <strong>Ridwan Kamil</strong>
                        <span>Gubernur Jawa Barat</span>
                      </div>
                  </div>
              </div>

                <div class="client-comments">
                  <p>"Silakan manfaatkan Situ Gede yang sudah direvitalisasi oleh Provinsi untuk peningkatan ekonomi dan pariwisata, 
                  <br>
                  Tidak banyak kota-kota yang punya danau, jadi betul-betul ini harus dijadikan tempat yang luar biasa. Kalau masih kurang nanti kita bikin sesuatu yang viral. Mudah-mudahan membawa kemaslahatan buat masyarakat"</p>
                </div>
          </div>

          <div class="testimoni-box shadow">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                      <img src="/Assets/kano.png" alt="">
                    </div>
                    <div class="name-user">
                      <strong>Rizal Choirul</strong>
                      <span>Pengunjung</span>
                    </div>
                </div>
            </div>

              <div class="client-comments">
                <p>Mau refreshing yg murah meriah, ke sini aja. Suasana alamnya dapet, bisa lihat danau dan hutan CIFOR. Hanya saja perlu pengelolaan untuk kebersihannya, karena klo dilihat2 kurang terawat fasilitas yg adanya. Dan yg bersih2 hutannya jg para penjual yg buka lapak di sana</p>
              </div>
        </div>

        <div class="testimoni-box shadow">
          <div class="box-top">
              <div class="profile">
                  <div class="profile-img">
                    <img src="/Assets/kanoo.png" alt="">
                  </div>
                  <div class="name-user">
                    <strong>Ridwan Kamil</strong>
                    <span>Gubernur Jawa Barat</span>
                  </div>
              </div>
          </div>

            <div class="client-comments">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ullam corporis fuga soluta qui harum laudantium esse explicabo vel nam? Ratione, optio ex ipsa eius totam quae adipisci nesciunt amet.</p>
            </div>
      </div>

      <div class="testimoni-box shadow">
        <div class="box-top">
            <div class="profile">
                <div class="profile-img">
                  <img src="/Assets/kanoo.png" alt="">
                </div>
                <div class="name-user">
                  <strong>Ridwan Kamil</strong>
                  <span>Gubernur Jawa Barat</span>
                </div>
            </div>
        </div>

          <div class="client-comments">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ullam corporis fuga soluta qui harum laudantium esse explicabo vel nam? Ratione, optio ex ipsa eius totam quae adipisci nesciunt amet.</p>
          </div>
    </div>
      </div>
    </section>


@endsection
    
    

 
