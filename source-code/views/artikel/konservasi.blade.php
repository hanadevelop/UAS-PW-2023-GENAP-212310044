@extends('layout/template')

@section('isi')

    <style>
        .gambar{
            justify-content: center;
            display: flex;
            
        }

        .gambar img{
            width: 70%;
            height: 30%;
        }

        .deskripsi p{
            margin-left: 15%;
            margin-top: 2%;
            margin-right: 15%;
            margin-bottom: 100%
        }
    </style>
    <article>
        <div class="judul" style="margin-bottom: 2%;  margin-top: 10%; text-align: center">
            <h1>Konservasi Rusa</h1>
        </div>
         
        <div class="gambar">
            <img src="Assets/rrusa.jpg" alt="konservasi" >
        </div>

        <div class="deskripsi">
            <p>Tak jauh dari Situ Gede yang berlokasi di wilayah Kecamatan Bogor Barat, Kota Bogor ada sebuah tempat penangkaran rusa atau Pusat Pengembangan Teknologi Penangkaran Rusa. Lantaran lokasinya tak jauh dari tempat wisata, Penangkaran Rusa kerap didatangi wisatawan untuk melihat Rusa Timor itu dari dekat. Bahkan beberapa anak-anak memberinya makan berupa sayur-sayuran yang didapatkannya dari pedagang di sekitar lokasi. <br>
            Jenis rusa yang diteliti di sini adalah jenis Rusa Sambar Sunda yang biasa ditemukan di Pulau Bali dan Timor. Fisiknya tidak jauh berbeda dengan kambing, sebab tak ada totol seperti rusa kebanyakan. Meskipun terletak di Bogor, namun tak ditemukan rusa totol yang merupakan simbol dari Kota Hujan ini. Di sini, rusa-rusa tersebut tidak dibiarkan hidup bebas layaknya di Istana Bogor.
            Lantaran sebagai lokasi penangkaran, rusa ditempatkan di dalam kandang. Makanan pun diberikan melalui lubang yang berada pada dinding bawah kandang.
            </p>
        </div>
    

    </article>

@endsection

