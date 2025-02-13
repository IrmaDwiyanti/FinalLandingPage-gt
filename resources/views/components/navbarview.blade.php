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