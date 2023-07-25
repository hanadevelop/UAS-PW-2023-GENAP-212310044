<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');   
   
    .history{
     font-family: 'Poppins';
      width: 100%;
      min-height: 100vh;
      display: grid;
      place-items: center;
      margin-top: 20px;
      
    }
    
    .row-history{
      width: 80%;
      max-width: 1170px;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 50px 30px;
    }
    
    .row-history .left{
      overflow: hidden;
    }
    
    .row-history .left img{
      width: 80%;
      height: 90%;
      object-fit: cover;
      border-radius: 20px;
      margin-left: 100px;
    }
    
    .row-history .left{
      display: flex;
      align-items: center;
    }
    
    .row-history .right .content{
      padding-left: 20px;
    }
    
    .row-history .right .content p{
      font-size: 16px;
      line-height: 26px;
      padding-bottom: 15px;
    }
    
    .row-history .right .content h1{
      margin-bottom: 20px;
    }

    footer{
        background-color: #111;
    }

    .footerContainer{
        width: flex;
        padding: 70px 30px 20px;
    }

    .iconFooter{
        display: flex;
        justify-content: center;
    }

    .iconFooter p{
        text-align: center;
        font-size: 3em;
        justify-content: center;
        margin-left: 2%;
        margin-top: 2%;
        color: white;
    }

    .footerNav{
        margin: 30px 0;
    }

    .footerNav ul{
        display: flex;
        justify-content: center;
    }

    .footerNav ul li a{
        color: white;
        margin: 20px;
        text-decoration: none;
        font-size: 1.3em;
        opacity: 0.7;
        transition: 0.5s;
    }

    .footerNav ul li a:hover{
        opacity: 1;
    }

    .footerBottom{
        background-color: #000;
        padding: 20px;
        text-align: center;
    }

    .footerBottom p{
        color: white;
    }
    </style>
    
</head>
<body>
    <article>
       


        <div class="history">
        <div class="row-history">
          <div class="left">
            <img src="/Assets/bebek.png" alt="">
          </div>
        
    
        <div class="right">
            <div class="content">
                <h1>Atraksi Wisata Bebek Air</h1>
                <p>Wisata danau di Indonesia biasanya tidak akan lengkap kalau tidak ada wahana perahu bebek atau perahu kayuh. Di danau ini terdapat wahana yang saya sebutkan tadi, wisatawan bisa menyewa perahu bebek sekitar Rp 20.000 per unit. Maksimal penumpang yang disarankan sejumlah dua orang dewasa.
                </p>
        
                <p>Jika ingin mencoba wahana air, wisatawan harus mengikuti peraturan yang sudah dibuat oleh pihak pengelola. Hal tersebut demi keamanan dan menjaga agar tidak terjadi suatu hal yang tidak diinginkan. Karena menurut info, kedalaman Danau Situ Gede cukup dalam yakni berkisar 6 meter lebih.</p>

                <a href="/dashboard">Kembali Ke Beranda</a>
              </div>
          </div>
        </div>
      </div>
      </article>


      <footer>
        <div class="footerContainer">
          <div class="iconFooter">
            <img src="Assets/LogoSituGede.png" alt="logo" style="width: 100px; height: 130px">
            <p>SituGede</p>
          </div>
        </div>

        <div class="footerNav">
          <ul type="none">
            <li><a href="/dashboard">Beranda</a></li>
            <li><a href="/cekpesanan">Cek Pesanan</a></li>
            <li><a href="/konservasi">Konservasi</a></li>
            <li><a href="/tiket">Tiket</a></li>
          </ul>
        </div>

        <div class="footerBottom">
          <p>Copyright &copy;2023 <span class="situ">SituGede Bogor</span></p>
        </div>
    </footer>

</body>
</html>





