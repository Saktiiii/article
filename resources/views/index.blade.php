<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords"
    content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
  <link rel="shortcut icon" href="{{ asset('sandbox/sandbox/dist') }}/assets/img/favicon.png">
  <link rel="stylesheet" href="{{ asset('sandbox/sandbox/dist') }}/assets/css/plugins.css">
  <link rel="stylesheet" href="{{ asset('sandbox/sandbox/dist') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('sandbox/sandbox/dist') }}/assets/css/colors/pink.css">
  <link rel="preload" href="{{ asset('sandbox/sandbox/dist') }}/assets/css/fonts/urbanist.css" as="style"
    onload="this.rel='stylesheet'">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-gray">
      <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{ asset('sandbox/sandbox/dist') }}/index.html">
              <img src="{{ asset('sandbox/sandbox/dist') }}/assets/img/logo-dark.png"
                srcset="{{ asset('sandbox/sandbox/dist') }}/assets/img/logo-dark@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Art-cle</h3>
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
                  <a class="nav-link dropdown-toggle {{ request()->is('blog/kategori/*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">
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
            
              <!-- Mobile footer -->
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
            
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item">
                <nav class="nav social social-muted justify-content-end text-end">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                  <a href="#"><i class="uil uil-instagram"></i></a>
                </nav>
                <!-- /.social -->
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
    </header>
    <!-- /header -->
    <section class="wrapper bg-gray">
      <div class="container pt-10 pb-14 pb-md-16">
        <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-lg="2"
          data-items-md="1" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              @foreach ($artikels as $artikel)
                <div class="swiper-slide">
                  <figure class="overlay caption caption-overlay rounded mb-0">
                    <a href="{{ url('blog/' . $artikel->id) }}">
                      <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" />
                    </a>
                    <figcaption>
                      <span
                        class="badge badge-lg bg-white text-uppercase mb-3">{{ $artikel->kategori->nama ?? 'Uncategorized' }}</span>
                      <h2 class="post-title h3 mt-1 mb-3">
                        <a href="{{ url('blog/' . $artikel->id) }}">{{ $artikel->judul }}</a>
                      </h2>
                      <ul class="post-meta text-white mb-0">
                        <li class="post-date"><i
                            class="uil uil-calendar-alt"></i><span>{{ $artikel->created_at->format('d M Y') }}</span></li>
                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span> Comments</span></a>
                        </li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-xl-10 col-xxl-8 mx-auto text-center">
            <h2 class="display-5 text-center mt-4 mb-10">Hello! I'm Caitlyn. Welcome to my blog. Here on this blog you
              will be able to find travel diary with traveling tips.</h2>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 text-center">
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h4 class="mb-0">About Me</h4>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h4 class="mb-0">Destinations</h4>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h4 class="mb-0">Instagram</h4>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 mt-17">
          <div class="col-lg-8">
            <div class="blog classic-view">

              @foreach ($artikels as $artikel)
                <article class="post">
                  <div class="card shadow-lg">
                    <figure class="card-img-top overlay overlay-1">
                      <a href="{{ route('blog.show', $artikel->id) }}">
                        @if($artikel->gambar)
                          <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" />
                        @else
                          <img src="{{ asset('sandbox/sandbox/dist/assets/img/photos/default.jpg') }}" alt="default" />
                        @endif
                      </a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <div class="post-category">
                          <a href="#" class="hover link-grape"
                            rel="category">{{ $artikel->kategori->nama ?? 'Uncategorized' }}</a>
                        </div>
                        <h2 class="post-title mt-1 mb-0">
                          <a class="link-navy" href="{{ route('blog.show', $artikel->id) }}">{{ $artikel->judul }}</a>
                        </h2>
                      </div>
                      <div class="post-content">
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($artikel->isi), 150, '...') }}</p>
                      </div>
                    </div>
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i
                            class="uil uil-calendar-alt"></i><span>{{ $artikel->created_at->format('d M Y') }}</span></li>
                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Admin</span></a></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>0<span> Comments</span></a>
                        </li>
                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>0</a></li>
                      </ul>
                    </div>
                  </div>
                </article>
              @endforeach

            </div>

            <!-- Pagination -->
            <nav class="d-flex" aria-label="pagination">
              {{ $artikels->links('pagination::bootstrap-4') }}
            </nav>
          </div>

          <aside class="col-lg-4 sidebar mt-8 mt-lg-0">
            <div class="widget">
              <h4 class="widget-title mb-3">About Me</h4>
              <figure class="rounded mb-4"><img class="img-fluid"
                  src="{{ asset('sandbox/sandbox/dist/assets/img/photos/f1.jpg') }}" alt="About Me" /></figure>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit
                libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
              <nav class="nav social">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
            </div>

            <div class="widget">
              <h4 class="widget-title mb-3">Popular Posts</h4>
              <ul class="image-list">
                {{-- Contoh hardcode, bisa diganti dengan query populer --}}
                <li>
                  <figure class="rounded"><a href="#"><img
                        src="{{ asset('sandbox/sandbox/dist/assets/img/photos/a4.jpg') }}" alt="Popular Post 1" /></a>
                  </figure>
                  <div class="post-content">
                    <h6 class="mb-2"><a class="link-dark" href="#">Magna Mollis Ultricies</a></h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="#"><img
                        src="{{ asset('sandbox/sandbox/dist/assets/img/photos/a5.jpg') }}" alt="Popular Post 2" /></a>
                  </figure>
                  <div class="post-content">
                    <h6 class="mb-2"><a class="link-dark" href="#">Ornare Nullam Risus</a></h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="#"><img
                        src="{{ asset('sandbox/sandbox/dist/assets/img/photos/a6.jpg') }}" alt="Popular Post 3" /></a>
                  </figure>
                  <div class="post-content">
                    <h6 class="mb-2"><a class="link-dark" href="#">Euismod Nullam Fusce</a></h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>5</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

            <div class="widget">
              <h4 class="widget-title mb-3">Categories</h4>
              <ul class="unordered-list bullet-primary text-reset">
                @foreach($kategoris as $kategori)
                  <li><a href="#">{{ $kategori->nama }} ({{ $kategori->artikels_count ?? 0 }})</a></li>
                @endforeach
              </ul>
            </div>

            <div class="widget">
              <h4 class="widget-title mb-3">Tags</h4>
              <ul class="list-unstyled tag-list">
                {{-- Bisa diganti dinamis --}}
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Still Life</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Urban</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Landscape</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Macro</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Fun</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Workshop</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Photography</a></li>
              </ul>
            </div>

            <div class="widget">
              <h4 class="widget-title mb-3">Archive</h4>
              <ul class="unordered-list bullet-primary text-reset">
                <li><a href="#">February 2019</a></li>
                <li><a href="#">January 2019</a></li>
                <li><a href="#">December 2018</a></li>
                <li><a href="#">November 2018</a></li>
                <li><a href="#">October 2018</a></li>
              </ul>
            </div>
          </aside>
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
          <h4 class="widget-title text-white mb-3">Popular Posts</h4>
          <ul class="image-list">
            <li>
              <figure class="rounded"><a href="{{ asset('sandbox/sandbox/dist') }}/blog-post.html"><img
                    src="{{ asset('sandbox/sandbox/dist') }}/assets/img/photos/a4.jpg" alt="" /></a></figure>
              <div class="post-content">
                <h6 class="mb-2"> <a class="link-dark" href="{{ asset('sandbox/sandbox/dist') }}/blog-post.html">Magna
                    Mollis Ultricies</a> </h6>
                <ul class="post-meta">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2022</span></li>
                </ul>
                <!-- /.post-meta -->
              </div>
            </li>
            <li class="mt-5">
              <figure class="rounded"> <a href="{{ asset('sandbox/sandbox/dist') }}/blog-post.html"><img
                    src="{{ asset('sandbox/sandbox/dist') }}/assets/img/photos/a5.jpg" alt="" /></a></figure>
              <div class="post-content">
                <h6 class="mb-2"> <a class="link-dark" href="{{ asset('sandbox/sandbox/dist') }}/blog-post.html">Ornare
                    Nullam Risus</a> </h6>
                <ul class="post-meta">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb 2022</span></li>
                </ul>
                <!-- /.post-meta -->
              </div>
            </li>
            <li class="mt-5">
              <figure class="rounded"><a href="{{ asset('sandbox/sandbox/dist') }}/blog-post.html"><img
                    src="{{ asset('sandbox/sandbox/dist') }}/assets/img/photos/a6.jpg" alt="" /></a></figure>
              <div class="post-content">
                <h6 class="mb-2"> <a class="link-dark" href="{{ asset('sandbox/sandbox/dist') }}/blog-post.html">Euismod
                    Nullam Fusce</a> </h6>
                <ul class="post-meta">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan 2022</span></li>
                </ul>
                <!-- /.post-meta -->
              </div>
            </li>
          </ul>
          <!-- /.image-list -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Tags</h4>
            <ul class="list-unstyled tag-list">
              <li><a href="#" class="btn btn-soft-ash text-white  btn-sm rounded-pill">Still Life</a></li>
              <li><a href="#" class="btn btn-soft-ash text-white  btn-sm rounded-pill">Urban</a></li>
              <li><a href="#" class="btn btn-soft-ash text-white  btn-sm rounded-pill">Nature</a></li>
              <li><a href="#" class="btn btn-soft-ash text-white  btn-sm rounded-pill">Landscape</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Categories</h4>
            <ul class="unordered-list text-reset bullet-white ">
              <li><a href="#">Lifestyle (21)</a></li>
              <li><a href="#">Photography (19)</a></li>
              <li><a href="#">Journal (16)</a></li>
            </ul>
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
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Elsewhere</h4>
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
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled text-reset mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Need Help?</h4>
            <ul class="list-unstyled text-reset mb-0">
              <li><a href="#">Support</a></li>
              <li><a href="#">Get Started</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
      <p class="mt-6 mb-0 text-center">© 2023 Sandbox. All rights reserved.</p>
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