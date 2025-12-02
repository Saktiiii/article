
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
  <link rel="shortcut icon" href="{{ asset('sandbox/sandbox/dist') }}/assets/img/favicon.png">
  <link rel="stylesheet" href="{{ asset('sandbox/sandbox/dist') }}/assets/css/plugins.css">
  <link rel="stylesheet" href="{{ asset('sandbox/sandbox/dist') }}/assets/css/style.css">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img src="{{ asset('sandbox/sandbox/dist') }}/assets/img/logo.png" srcset="{{ asset('sandbox/sandbox/dist') }}/assets/img/logo@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Arti-cle</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
          
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
          
                <!-- Home -->
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                    Home
                  </a>
                </li>
          
                <!-- Blog -->
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">
                    Blog
                  </a>
                </li>
          
                <!-- Kategori Dropdown -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle {{ request()->is('blog/kategori/*') ? 'active' : '' }}"
                    href="#" data-bs-toggle="dropdown">
                    Kategori
                  </a>
                  <ul class="dropdown-menu">
                    @foreach($kategoris as $kategori)
                    <li>
                      <a class="dropdown-item" href="{{ route('blog.kategori', urlencode($kategori->nama)) }}">
                        {{ $kategori->nama }}
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </li>
          
                <!-- About -->
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    About
                  </a>
                </li>
          
                <!-- Contact -->
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Contact
                  </a>
                </li>
          
              </ul>
          
              <!-- Mobile Footer -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
              <li class="nav-item d-none d-md-block">
                <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
          <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
              <div class="post-header">
                <div class="post-category text-line">
                  {{-- Link ke kategori artikel --}}
                  <a href="{{ url('kategori/'.$artikel->kategori->id) }}" class="hover" rel="category">
                    {{ $artikel->kategori->nama }}
                  </a>
                </div>
                <!-- /.post-category -->
      
                {{-- Judul artikel --}}
                <h1 class="display-1 mb-4">{{ $artikel->judul }}</h1>
      
                <ul class="post-meta mb-5">
                  {{-- Tanggal publish --}}
                  <li class="post-date">
                    <i class="uil uil-calendar-alt"></i>
                    <span>{{ $artikel->created_at->format('d M Y') }}</span>
                  </li>
      
                  {{-- Author (kalau kamu ada relasi author, sesuaikan) --}}
                  <li class="post-author">
                    <a href="#">
                      <i class="uil uil-user"></i>
                      <span>By Sandbox</span> {{-- Bisa kamu ganti dinamis sesuai data --}}
                    </a>
                  </li>
      
                  {{-- Komentar & Likes, kalau ada data di database, ganti dinamis juga --}}
                  <li class="post-comments">
                    <a href="#">
                      <i class="uil uil-comment"></i>3<span> Comments</span>
                    </a>
                  </li>
                  <li class="post-likes">
                    <a href="#">
                      <i class="uil uil-heart-alt"></i>3<span> Likes</span>
                    </a>
                  </li>
                </ul>
                <!-- /.post-meta -->
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
              <div class="card">
                <figure class="card-img-top">
                    @if (!empty($artikel->gambar) && file_exists(storage_path('app/public/' . $artikel->gambar)))
                      <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" />
                    @else
                      <img src="{{ asset('sandbox/sandbox/dist/assets/img/photos/b1.jpg') }}" alt="Default Image" />
                    @endif
                  </figure>
                  
                  <div class="card-body">
                    <div class="classic-view">
                      <article class="post">
                        <div class="post-content mb-5">
                          <h2 class="h1 mb-4">{{ $artikel->judul ?? 'Judul Artikel' }}</h2>
                          <p>{!! $artikel->isi ?? 'Isi artikel belum tersedia' !!}</p>
                  
                          {{-- Jika galeri ada --}}
                          @if ($artikel->galeri && $artikel->galeri->count() > 0)
                            <div class="row g-6 mt-3 mb-10">
                              @foreach ($artikel->galeri as $gambar)
                                <div class="col-md-6">
                                  <figure class="hover-scale rounded cursor-dark">
                                    <a href="{{ asset('storage/' . $gambar->path) }}" data-glightbox="title: {{ $gambar->judul }};" data-gallery="post">
                                      <img src="{{ asset('storage/' . $gambar->thumbnail) }}" alt="{{ $gambar->judul }}" />
                                    </a>
                                  </figure>
                                </div>
                              @endforeach
                            </div>
                          @else
                            {{-- Contoh gambar statis kalau galeri kosong --}}
                            <div class="row g-6 mt-3 mb-10">
                              <div class="col-md-6">
                                <figure class="hover-scale rounded cursor-dark">
                                  <a href="{{ asset('sandbox/sandbox/dist/assets/img/photos/b8-full.jpg') }}" data-glightbox="title: Heading; description: Purus Vulputate Sem Tellus Quam" data-gallery="post">
                                    <img src="{{ asset('sandbox/sandbox/dist/assets/img/photos/b8.jpg') }}" alt="" />
                                  </a>
                                </figure>
                              </div>
                              <div class="col-md-6">
                                <figure class="hover-scale rounded cursor-dark">
                                  <a href="{{ asset('sandbox/sandbox/dist/assets/img/photos/b9-full.jpg') }}" data-glightbox data-gallery="post">
                                    <img src="{{ asset('sandbox/sandbox/dist/assets/img/photos/b9.jpg') }}" alt="" />
                                  </a>
                                </figure>
                              </div>
                              {{-- Tambahkan gambar lain sesuai kebutuhan --}}
                            </div>
                          @endif
                  
                          {{-- Lanjutkan dengan konten artikel lainnya seperti paragraf, blockquote, dsb --}}
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="{{ asset('sandbox/sandbox/dist') }}/assets/img/logo-light.png" srcset="{{ asset('sandbox/sandbox/dist') }}/assets/img/logo-light@2x.png 2x" alt="" />
            <p class="mb-4">© 2023 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
            <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a href="mailto:#">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
            <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">Email Address</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('sandbox/sandbox/dist') }}/assets/js/plugins.js"></script>
  <script src="{{ asset('sandbox/sandbox/dist') }}/assets/js/theme.js"></script>
</body>

</html>