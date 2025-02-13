<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
        <title>{{ app('Translate')->translate('Berita') }}</title>
        <link rel="icon" href="images/logoset.png" type="image/png">
          
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>      
      
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        
      </head>
<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a class="logo">
                      <img src="/images/logo.png" alt="Logo" class="logo-image">
                      <h1>LP2M</h1>
                  </a>
                  <div class="service-hours">
                      <span>{{ app('Translate')->translate('Jam layanan: 07.00 - 15.00') }}</span>
                  </div>
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="{{ url('home') }}">{{ app('Translate')->translate('Beranda') }}</a></li>
                      <li class="scroll-to-section"><a href="{{ url('pusat') }}">{{ app('Translate')->translate('Pusat') }}</a></li>
                      <li class="scroll-to-section"><a href="{{ url('beritaslide') }}" >{{ app('Translate')->translate('Berita') }}</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ app('Translate')->translate('Fakultas - Fakultas') }}
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="https://fah.uinsgd.ac.id/">{{ app('Translate')->translate('Adab dan Humaniora') }}</a></li>
                          <li><a class="dropdown-item" href="https://fdk.uinsgd.ac.id/">{{ app('Translate')->translate('Dakwah dan Komunikasi') }}</a></li>
                          <li><a class="dropdown-item" href="https://febi.uinsgd.ac.id/">{{ app('Translate')->translate('Ekonomi dan Bisnis Islam') }}</a></li>
                          <li><a class="dropdown-item" href="https://fisip.uinsgd.ac.id/">{{ app('Translate')->translate('Ilmu Sosial dan Ilmu Politik') }}</a></li>
                          <li><a class="dropdown-item" href="https://psi.uinsgd.ac.id/">{{ app('Translate')->translate('Psikologi') }}</a></li>
                          <li><a class="dropdown-item" href="https://fst.uinsgd.ac.id/">{{ app('Translate')->translate('Sains dan Teknologi') }}</a></li>
                          <li><a class="dropdown-item" href="https://fsh.uinsgd.ac.id/">{{ app('Translate')->translate('Syariah dan Hukum') }}</a></li>
                          <li><a class="dropdown-item" href="https://ftk.uinsgd.ac.id/">{{ app('Translate')->translate('Tarbiyah dan Keguruan') }}</a></li>
                          <li><a class="dropdown-item" href="https://fu.uinsgd.ac.id/">{{ app('Translate')->translate('Ushuluddin') }}</a></li>
                          
                        </ul>
                      </li>
                      <li class="language-dropdown-container dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          {{ app()->getLocale() == 'id' ? 'Bahasa' : (app()->getLocale() == 'en' ? 'English' : 'العربية') }}
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('changeLang', ['lang' => 'id']) }}">{{ app('Translate')->translate('Indonesia') }}</a></li>
                          <li><a class="dropdown-item" href="{{ route('changeLang', ['lang' => 'en']) }}">{{ app('Translate')->translate('Inggris') }}</a></li>
                          <li><a class="dropdown-item" href="{{ route('changeLang', ['lang' => 'ar']) }}">{{ app('Translate')->translate('Arab') }}</a></li>
                          
                        </ul>
                      </li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

    
  <!-- ***** Content Berita Start ***** -->
  <div class="py-4">
      <div class="content-wrappercb">
          <!-- Main Content -->
          <div class="main-contentcb">
              <!-- Headline -->
              <div class="headline">
                <h4>{{ app('Translate')->translate($berita->title ?? 'Judul tidak tersedia') }}</h4>
                <span>
                      <strong>{{ $berita->author ?? 'Penulis tidak tersedia' }}</strong> | 
                      {{ $berita->date ? \Carbon\Carbon::parse($berita->date)->format('d/m/Y') : 'Tanggal tidak tersedia' }}
                    </span>
              </div>
              
              <!-- Gambar Berita -->
              <img 
                  src="{{ $berita->image ? asset('storage/' . $berita->image) : asset('images/default.jpg') }}" 
                  alt="{{ $berita->title ?? 'Gambar berita' }}" 
                  class="berita-image"
              />

              <!-- Konten Berita -->
              <div class="mt-5">
                <p>{!! app('Translate')->translate($berita->content ?? 'Konten tidak tersedia') !!}</p>
              </div>
          </div>
      </div>
  </div>

          
    <div class="containernews">
    <div class="headernews">
      <h1>Berita Terbaru</h1>
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
                {{ $berita->date ? \Carbon\Carbon::parse($berita->date)->format('d/m/Y') : 'Tanggal tidak tersedia' }}
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
  <!-- ***** Content Berita end ***** -->

    
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
  <script src="{{ asset('vendorBoostrap/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendorBoostrap/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/counter.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  
</body>
</html>
