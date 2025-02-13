<!DOCTYPE html>
<html lang="id">

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
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>
  <!-- ***** Header Area Start ***** -->
  @include('components.navbarview')
  <!-- ***** Header Area End ***** -->


  <!-- ***** Berita Terbaru ***** -->
  <section class="containerbs">
      <div class="judulbs text-center mb-4">
        <h2>{{__('message.tittleberitaslide')}}</h2>
      </div>
      <div class="news-gridbs">
          @foreach ($berita_terbaru as $item)
          <div class="news-itembs">
              <a href="{{ url('contentberita/' . $item->slug) }}">
                  <div class="news-imagebs">
                      <img alt="Image" height="200" src="{{ asset('storage/' . $item->image) }}" width="300"/>
                  </div>
                  <div class="news-contentbs">
                      <div class="news-titlebs">
                        {{ app('Translate')->translate($item->title ?? 'Judul tidak tersedia') }}

                      </div>
                      <div class="news-metabs">
                        <strong>{{ $item->author ?? 'Penulis tidak tersedia' }}</strong> | 
                        {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
                        </div>
                  </div>
              </a>
          </div>
          @endforeach
      </div>
      <!-- Pagination -->
      <div class="paginationbs text-center mt-4">
          <ul class="pagination">
              {{ $berita_terbaru->links('pagination::bootstrap-5') }}
          </ul>
      </div>
  </section>
           
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