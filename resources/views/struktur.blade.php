<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
        <title>{{ app('Translate')->translate('Struktur') }}</title>
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
                      <li class="scroll-to-section"><a href="home">{{ app('Translate')->translate('Beranda') }}</a></li>
                      <li class="scroll-to-section"><a href="pusat">{{ app('Translate')->translate('Pusat') }}</a></li>
                      <li class="scroll-to-section"><a href="beritaslide" >{{ app('Translate')->translate('Berita') }}</a></li>
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
    
<!-- ***** Struktur start ***** -->
<section class="struktur-section">
  <h1 class="title-sectionstr">{{__('message.pimpinan')}}</h1>
  <div class="struktur-list">
      <div class="namestr">
          <img src="/images/profile.png" alt="Ketua Lembaga Penelitian dan Pengabdian Masyarakat (LP2M)" class="name-img">
          <div class="name-infostr">
              <h2>Dr. H. Setia Gumilar, S.Ag., M.Si.</h2>
              <p>{{ __('message.ketua') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="Sekretaris LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Dr. H. Sarbini, M.Ag</h2>
              <p>{{ __('message.sekretaris') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="Kepala Pusat Pengabdian Kepada Masyarakat" class="name-img">
          <div class="name-infostr">
              <h2>Dr. H. Aep Kusnawan, M.Ag</h2>
              <p>{{ __('message.kepala_pusat_pengabdian') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="Kepala Pusat Penelitian dan Penerbitan" class="name-img">
          <div class="name-infostr">
              <h2>Dr. H. Deni Miharja, M.Ag</h2>
              <p>{{ __('message.kepala_pusat_penelitian') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="Kepala Pusat Gender dan Anak" class="name-img">
          <div class="name-infostr">
              <h2>Irma Riyani, Ph.D.</h2>
              <p>{{ __('message.kepala_pusat_gender') }}</p>
          </div>
      </div>
  </div>

  <h1 class="title-sectionstr">{{ __('message.tata_usaha') }}</h1>

  <div class="struktur-list">
      <div class="namestr">
          <img src="/images/profile.png" alt="Analis Keuangan LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Deni Wahyu Ramdhani, S.Pd.I</h2>
              <p>{{ __('message.analis_keuangan') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="PRANATA KEUANGAN APBN PENYELIA TATA USAHA LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Desi Mulyani, SE.</h2>
              <p>{{ __('message.pranata_keuangan') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="OPERATOR LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Gilang Aditya Purba, ST.</h2>
              <p>{{ __('message.operator_lp2m') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="STAF HUMAS LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Asep Hilmi, S.Sos.</h2>
              <p>{{ __('message.staf_humas') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="STAF PKM LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Khoirul Aziz, S.Sy</h2>
              <p>{{ __('message.staf_pkm') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="STAF PUSLITPEN LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Abdul Wasik.,S.Ag.,M.Ag</h2>
              <p>{{ __('message.staf_puslitpen') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="STAF ARSIPARIS LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Zaenal Muttaqin</h2>
              <p>{{ __('message.staf_arsiparis') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="STAF PERENCANAAN LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Linda Fu'adah, SE.</h2>
              <p>{{ __('message.staf_perencanaan') }}</p>
          </div>
      </div>

      <div class="namestr">
          <img src="/images/profile.png" alt="STAF PSGA LP2M" class="name-img">
          <div class="name-infostr">
              <h2>Nurlina, S.Ag.</h2>
              <p>{{ __('message.staf_psga') }}</p>
          </div>
      </div>

  </div>
</section>
<!-- ***** Struktur end ***** -->
    
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
</body>
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
</html>
