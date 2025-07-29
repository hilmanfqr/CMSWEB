@extends('layouts.website')

@section('content')
<!-- Hero Section -->
<section class="hero-area d-flex align-items-center justify-content-center overly position-relative" style="height: 520px; background: linear-gradient(120deg, #6a11cb 0%, #2575fc 100%), url('{{ asset('assets/website/images/home/slider-5.jpg') }}') center/cover no-repeat;">
  <div class="block text-center" style="position:relative; z-index:2; color:#fff; text-shadow:0 2px 8px rgba(0,0,0,0.5);">
    <div class="mb-2 text-uppercase letter-spacing-2" style="font-size:1.1rem; opacity:0.85;">Welcome to</div>
    <h1 class="display-3 mb-2 animate__animated animate__fadeInDown fw-bold" id="hero-title">Vaganza Digital</h1>
    <p class="lead animate__animated animate__fadeInUp mb-4" id="hero-desc">The modern way to manage your website content, fast and easy.</p>
    <a href="#features" class="btn btn-light btn-lg mt-2 fw-bold px-4 smooth-scroll">Explore More <i class="ion-chevron-down"></i></a>
  </div>
</section>

<!-- Features Section -->
<section class="container py-5" id="features">
  <div class="row text-center mb-4">
    <h2 class="fw-bold mb-2">Vaganza CMS Features</h2>
    <p class="text-muted">The best solution to manage your website</p>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="card fitur-card shadow-sm border-0 h-100 text-center p-4">
        <div class="mb-3"><i class="ion-speedometer display-3 text-primary"></i></div>
        <h5 class="fw-bold fs-4">Fast & Easy</h5>
        <p class="text-muted">Manage your content in seconds with a user-friendly interface.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card fitur-card shadow-sm border-0 h-100 text-center p-4">
        <div class="mb-3"><i class="ion-android-lock display-3 text-success"></i></div>
        <h5 class="fw-bold fs-4">Secure</h5>
        <p class="text-muted">Your data is protected with the latest security technology.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card fitur-card shadow-sm border-0 h-100 text-center p-4">
        <div class="mb-3"><i class="ion-paintbrush display-3 text-warning"></i></div>
        <h5 class="fw-bold fs-4">Modern Design</h5>
        <p class="text-muted">Enjoy a beautiful, professional, and responsive website look.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="container py-5" id="whyus">
  <div class="row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0 text-center">
      <img src="https://undraw.co/api/illustrations/website.svg" alt="Why Choose Us" class="img-fluid" style="max-height:260px;">
    </div>
    <div class="col-md-6">
      <h2 class="fw-bold mb-3">Why Choose Vaganza?</h2>
      <ul class="list-unstyled fs-5">
        <li class="mb-3"><i class="ion-checkmark-circled text-success me-2"></i> Intuitive dashboard for all users</li>
        <li class="mb-3"><i class="ion-checkmark-circled text-success me-2"></i> Flexible content management</li>
        <li class="mb-3"><i class="ion-checkmark-circled text-success me-2"></i> 24/7 support and regular updates</li>
      </ul>
    </div>
  </div>
</section>

<div class="page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- Latest Posts Section -->
        <div class="row text-center mb-4">
          <h2 class="fw-bold">Latest Posts</h2>
          <p class="text-muted">Stay updated with the latest news and information</p>
        </div>
        @if (count($posts) > 0)
          <div class="row">
          @foreach ($posts as $post)
          <div class="col-md-6 mb-4">
            <div class="card post-card h-100 shadow-sm border-0 position-relative">
              <div class="overflow-hidden rounded-top">
                <img src="{{ $post->gallery->image }}" class="card-img-top post-img-hover" alt="Post Image">
              </div>
              <div class="position-absolute top-0 start-0 m-2">
                <span class="badge bg-primary">{{ $post->category->name ?? 'Category' }}</span>
              </div>
              <div class="position-absolute top-0 end-0 m-2">
                <span class="badge bg-dark">{{ date('d M Y', strtotime($post->created_at)) }}</span>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('website.posts.show', $post->id) }}">{{ $post->title }}</a></h5>
                <p class="card-text text-muted">{!! Str::limit($post->description, 80) !!}</p>
                <a href="{{ route('website.posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>
          </div>
          @endforeach
          </div>
        @else
          <div class="text-center my-5">
            <img src="https://undraw.co/api/illustrations/empty.svg" alt="No Posts" style="max-width:220px;">
            <h4 class="text-muted mt-3">No Post Added Yet</h4>
          </div>
        @endif
        <nav aria-label="Page navigation example">
          <ul class="pagination post-pagination">
            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>

        <!-- Testimonials Section (Carousel) -->
        <section class="container py-5">
          <div class="row text-center mb-4">
            <h2 class="fw-bold">What Our Users Say</h2>
            <p class="text-muted">Testimonials from Vaganza CMS users</p>
          </div>
          <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="card shadow border-0 h-100 text-center p-4">
                      <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mx-auto mb-3" width="80" height="80" alt="User">
                      <blockquote class="blockquote mb-2">"This CMS really helps my work!"</blockquote>
                      <footer class="blockquote-footer">John</footer>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="card shadow border-0 h-100 text-center p-4">
                      <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle mx-auto mb-3" width="80" height="80" alt="User">
                      <blockquote class="blockquote mb-2">"The design is cool and easy to use."</blockquote>
                      <footer class="blockquote-footer">Sarah</footer>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="card shadow border-0 h-100 text-center p-4">
                      <img src="https://randomuser.me/api/portraits/men/65.jpg" class="rounded-circle mx-auto mb-3" width="80" height="80" alt="User">
                      <blockquote class="blockquote mb-2">"Complete features and fast support!"</blockquote>
                      <footer class="blockquote-footer">Andrew</footer>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>

        <!-- Call to Action -->
        <section class="call-to-action text-center" style="background: linear-gradient(120deg, #6a11cb 0%, #2575fc 100%); color:#fff; border-radius:24px; margin-bottom:32px;">
          <div class="container py-5">
            <h2 class="mb-4 fw-bold">Ready to Manage Your Website Easily?</h2>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg fw-bold px-4">Sign Up Now</a>
          </div>
        </section>
      </div>
      <div class="col-lg-4">
        <div class="pl-0 pl-xl-4">
          <aside class="sidebar pt-5 pt-lg-0 mt-5 mt-lg-0">
            <!-- Widget Latest Posts -->
            <div class="widget widget-latest-post">
              <h4 class="widget-title">Latest Posts</h4>
              @if (count($latestPosts) > 0)
                @foreach ($latestPosts as $post)
                <div class="media">
                  <a class="pull-left" href="{{ route('website.posts.show', $post->id) }}">
                      <img class="media-object" src="{{ $post->gallery->image }}" style="width:50px" alt="Image">
                  </a>
                  <div class="media-body">
                      <h4 class="media-heading"><a href="{{ route('website.posts.show', $post->id) }}">{{ $post->title }}</a></h4>
                  </div>
                </div>
                @endforeach
              @else
              <h6 class="text-center text-danger">No Post Added</h6>
              @endif
            </div>
            <!-- End Latest Posts -->
            <!-- Widget Category -->
            <div class="widget widget-category">
              <h4 class="widget-title">Categories</h4>
              @if (count($categories) > 0)
                <ul class="widget-category-list">
                  @foreach ($categories as $category)
                    <li><a href="#">{{ $category->name }}</a></li>
                  @endforeach
                </ul>
              @else
              <h6 class="text-center text-danger" style="text-decoration: none">No Category added</h6>
              @endif
            </div> <!-- End category  -->
            <!-- Widget tag -->
            <div class="widget widget-tag">
              <h4 class="widget-title">Tag Cloud</h4>
              <ul class="widget-tag-list">
                  <li><a href="#">Animals</a></li>
                  <li><a href="#">Landscape</a></li>
                  <li><a href="#">Portrait</a></li>
                  <li><a href="#">Wild Life</a></li>
                  <li><a href="#">Video</a></li>
              </ul>
            </div> <!-- End tag  -->
          </aside>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection