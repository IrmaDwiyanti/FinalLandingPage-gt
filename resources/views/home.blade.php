<!DOCTYPE html>
<html lang="id">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <title>{{ app('Translate')->translate('Home') }}</title>
  <link rel="icon" href="images/logoset.png" type="image/png">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>      

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/owl.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>

<body>
  <!-- ***** Header Area Start ***** -->
  @include('components.navbarview')


  <!--main banner start-->
  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">{{__('message.pusathome.puslitpenlang.tittle')}}</span>
                <h2>{{__('message.pusathome.puslitpenlang.kepanjangan')}}</h2>
                <p>{{__('message.descriptionbanner.despuslitpen')}}</p>
                
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">{{__('message.pusathome.pkmlang.tittle')}}</span>
                <h2>{{__('message.pusathome.pkmlang.kepanjangan')}}</h2>
                <p>{{__('message.descriptionbanner.despkm')}}</p>
                
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">{{__('message.pusathome.pgsalang.tittle')}}</span>
                <h2>{{__('message.pusathome.pgsalang.kepanjangan')}}</h2>
                <p>{{__('message.descriptionbanner.despgsa')}}</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Main banner end-->

  <!--visi misi sejarah struktur start-->
  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="/images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>{{ __('message.services.visi_misi.title') }}</h4>
              <p>{{ __('message.services.visi_misi.description') }}</p>
              <div class="main-button">
                <a href="visimisi">{{ __('message.services.button')}}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="/images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>{{ __('message.services.sejarahlang.title') }}</h4>
              <p>{{ __('message.services.sejarahlang.description') }}</p>
              <div class="main-button">
                <a href="sejarah">{{ __('message.services.button')}}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>{{ __('message.services.strukturlang.title') }}</h4>
              <p>{{ __('message.services.strukturlang.description') }}</p>
              <div class="main-button">
                <a href="struktur">{{ __('message.services.button')}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--visi misi sejarah struktur end-->

  <!--pusat pusat lp2m start-->
  <section class="pusathome">
    <div class="contentpusat">
      <h1>{{__('message.pusathome.tittle')}}</h1>
      <p>{{__('message.pusathome.description')}}</p>
    </div>
    <div class="grid-container">
      <a href="{{ url('puslitpen') }}" class="grid-item">
        <img alt="Puslitpen" src="/images/1.jpeg" />
        <p><strong>{{__('message.pusathome.puslitpenlang.tittle')}}</strong></p>
        <p>{{__('message.pusathome.puslitpenlang.kepanjangan')}}</p>
      </a>
      <a href="{{ url('pkm') }}" class="grid-item">
        <img alt="PKM" src="/images/2.jpg" />
        <p><strong>{{__('message.pusathome.pkmlang.tittle')}}</strong></p>
        <p>{{__('message.pusathome.pkmlang.kepanjangan')}}</p>
      </a>
      <a href="{{ url('pgsa') }}" class="grid-item">
        <img alt="PGSA" src="/images/8.jpg" />
        <p><strong>{{__('message.pusathome.pgsalang.tittle')}}</strong></p>
        <p>{{__('message.pusathome.pgsalang.kepanjangan')}}</p>
      </a>
    </div>
  </section>
  <!--pusat lp2m end-->

<!-- Berita Terbaru Start -->
<div class="containernews">
  <div class="headernews">
    <h1>{{__('message.beritaterbaru')}}</h1>
  </div>
  <div class="news-container">
    
    @foreach ($berita_terbaru as $item)
    <div class="side-news">
      <a href="{{ url('contentberita/' . $item->slug) }}">
        <div class="side-news-item">
          <img 
            alt="{{ $item->title ?? 'Gambar tidak tersedia' }}" 
            height="100" 
            src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/default.jpg') }}" 
            width="100" 
          />
          <div class="text">
            <div class="title">
              <a href="{{ url('contentberita/' . $item->slug) }}">
                {{ app('Translate')->translate($item->title ?? 'Judul tidak tersedia') }}
              </a>
            </div>
            <div class="details">
              {{ $item->date ? \Carbon\Carbon::parse($item->date)->format('d/m/Y') : 'Tanggal tidak tersedia' }} 
              | By {{ $item->author ?? 'Penulis tidak diketahui' }}
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
    <a class="read-more" href="{{ url('beritaslide') }}">
      {{ app('Translate')->translate('Berita Selengkapnya') }}
      <i class="fas fa-arrow-right"></i>
    </a>
  </div>
</div>
<!--berita terbaru end-->

<!-- ***** Footer start ***** -->
<footer class="footer">
  <div class="footer-left">
    <img src="/images/logo.png" alt="Logo UIN" />
  </div>
  <div class="footer-center">
    <p>Jl. A.H. Nasution No. 105, <br> Cibiru, Bandung 40614</p>
    <p class="footer-copyright">&copy; 2024 - UIN SGD Bandung</p>
  </div>
  <div class="footer-right">
    <p class="footer-about">Sosial Media</p>
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <p>Email: <a href="mailto:lp2m@uinsgd.ac.id">lp2m@uinsgd.ac.id</a></p>
    <p>(022) 7800525</p>
  </div>
</footer>
 <!-- ***** Footer start End ***** -->

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendorBoostrap/jquery/jquery.min.js"></script>
<script src="vendorBoostrap/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/isotope.min.js"></script>
<script src="/js/owl-carousel.js"></script>
<script src="/js/counter.js"></script>
<script src="/js/custom.js"></script>
<script type="text/javascript">
 // Sesuaikan URL untuk perubahan bahasa dengan menambahkan parameter `lang` ke URL
 var url = "{{ route('changeLang', ['lang' => ':lang']) }}"; // Placeholder :lang

 $(".changeLang").change(function() {
     // Ambil nilai bahasa yang dipilih
     var lang = $(this).val();
     // Gantilah placeholder :lang dengan nilai yang dipilih
     window.location.href = url.replace(':lang', lang);
 });
</script>

  </body>


</html>