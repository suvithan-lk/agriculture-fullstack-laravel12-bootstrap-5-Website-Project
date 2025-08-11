@include('layouts.header')

<body class="products-page">

    {{-- main --}}
    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="AgriCulture">
            </a>
            @include('layouts.navbar')
        </div>
    </header>
    {{-- main --}}

    {{-- main --}}
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url(assets/img/page-title-bg.webp);">
            <div class="container position-relative">
                <h1>Our Fresh Products</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Products</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <!-- Product Categories -->
        <section id="product-categories" class="product-categories section">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Product Categories</h2>
                    <p>Browse our fresh farm products</p>
                </div>

                <div class="row gy-4 text-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="category-item p-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                            <div class="icon-box">
                                <i class="fa-solid fa-leaf fa-2x text-success"></i>
                            </div>
                            <h3>Vegetables</h3>
                            <a href="#vegetables" class="btn btn-outline-success btn-sm">View All</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="category-item p-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                            <div class="icon-box">
                                <i class="fa-solid fa-apple-whole fa-2x text-success"></i>
                            </div>
                            <h3>Fruits</h3>
                            <a href="#fruits" class="btn btn-outline-success btn-sm">View All</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="category-item p-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                            <div class="icon-box">
                                <i class="fa-solid fa-cheese fa-2x text-success"></i>
                            </div>
                            <h3>Dairy</h3>
                            <a href="#dairy" class="btn btn-outline-success btn-sm">View All</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="category-item p-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                            <div class="icon-box">
                                <i class="fa-solid fa-wheat-awn fa-2x text-success"></i>
                            </div>
                            <h3>Grains</h3>
                            <a href="#grains" class="btn btn-outline-success btn-sm">View All</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Products Section -->
        <section id="products" class="products section">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Featured Products</h2>
                    <p>Fresh from our farm to your table</p>
                </div>

                <div class="row gy-4">
                    <!-- Product 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-item position-relative h-100">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/products/tomatoes.jpg') }}" class="img-fluid" alt="Organic Tomatoes">
                                <div class="product-badge bg-success">Organic</div>
                            </div>

                            <div class="product-content d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="product-title">Organic Tomatoes</h3>
                                    <div class="product-price">$3.99/lb</div>
                                </div>
                                <p class="product-description">Freshly picked vine-ripened tomatoes, grown without
                                    pesticides.</p>
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div class="product-rating">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                        <span class="ms-1">(24)</span>
                                    </div>
                                    <button class="btn btn-success btn-sm">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End product item -->

                    <!-- Product 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-item position-relative h-100">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/products/carrots.jpg') }}" class="img-fluid" alt="Fresh Carrots">
                                <div class="product-badge bg-success">Organic</div>
                            </div>

                            <div class="product-content d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="product-title">Fresh Carrots</h3>
                                    <div class="product-price">$2.49/lb</div>
                                </div>
                                <p class="product-description">Sweet and crunchy, perfect for snacks or cooking.</p>
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div class="product-rating">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <span class="ms-1">(18)</span>
                                    </div>
                                    <button class="btn btn-success btn-sm">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End product item -->

                    <!-- Product 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-item position-relative h-100">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/products/apples.jpg') }}" class="img-fluid" alt="Organic Apples">
                                <div class="product-badge bg-info">Seasonal</div>
                            </div>

                            <div class="product-content d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="product-title">Organic Apples</h3>
                                    <div class="product-price">$1.99/lb</div>
                                </div>
                                <p class="product-description">Crisp and juicy, available in several varieties.</p>
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div class="product-rating">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span class="ms-1">(32)</span>
                                    </div>
                                    <button class="btn btn-success btn-sm">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End product item -->

                    <!-- Product 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-item position-relative h-100">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/products/eggs.jpg') }}" class="img-fluid" alt="Farm Eggs">
                                <div class="product-badge bg-success">Free Range</div>
                            </div>

                            <div class="product-content d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="product-title">Farm Eggs</h3>
                                    <div class="product-price">$4.99/dozen</div>
                                </div>
                                <p class="product-description">Free-range eggs from happy, pasture-raised chickens.</p>
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div class="product-rating">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                        <span class="ms-1">(27)</span>
                                    </div>
                                    <button class="btn btn-success btn-sm">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End product item -->

                    <!-- Product 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-item position-relative h-100">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/products/honey.jpg') }}" class="img-fluid" alt="Raw Honey">
                                <div class="product-badge bg-warning">Limited</div>
                            </div>

                            <div class="product-content d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="product-title">Raw Honey</h3>
                                    <div class="product-price">$8.99/jar</div>
                                </div>
                                <p class="product-description">Pure, unfiltered honey from our local beehives.</p>
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div class="product-rating">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span class="ms-1">(41)</span>
                                    </div>
                                    <button class="btn btn-success btn-sm">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End product item -->

                    <!-- Product 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-item position-relative h-100">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/products/bread.jpg') }}" class="img-fluid" alt="Artisan Bread">
                                <div class="product-badge bg-info">Fresh</div>
                            </div>

                            <div class="product-content d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="product-title">Artisan Bread</h3>
                                    <div class="product-price">$5.99/loaf</div>
                                </div>
                                <p class="product-description">Freshly baked sourdough using traditional methods.</p>
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div class="product-rating">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <span class="ms-1">(15)</span>
                                    </div>
                                    <button class="btn btn-success btn-sm">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End product item -->
                </div>
            </div>
        </section>
        <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->
        <!-- Farm Promise Section -->
        <section id="farm-promise" class="farm-promise section bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/img/farm-about.jpg') }}" class="img-fluid rounded" alt="Our Farm">
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-5">
                            <h2>Our Farm Promise</h2>
                            <p>We are committed to sustainable farming practices that respect the land and produce the
                                highest quality organic produce.</p>

                            <div class="promise-item d-flex">
                                <div class="icon-box me-3">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                </div>
                                <div>
                                    <h4>Certified Organic</h4>
                                    <p>All our products meet strict organic certification standards.</p>
                                </div>
                            </div>

                            <div class="promise-item d-flex">
                                <div class="icon-box me-3">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                </div>
                                <div>
                                    <h4>Locally Grown</h4>
                                    <p>We support our local community and reduce food miles.</p>
                                </div>
                            </div>

                            <div class="promise-item d-flex">
                                <div class="icon-box me-3">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                </div>
                                <div>
                                    <h4>Sustainable Practices</h4>
                                    <p>We use methods that protect the environment for future generations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Section -->
        <section id="newsletter" class="newsletter section light-background">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3>Join Our Farm Community</h3>
                        <p class="opacity-50">
                            Subscribe to get updates on seasonal products, farm events, and special offers.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" class="form-subscribe">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your email address">
                                <button class="btn btn-success" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- main --}}

    {{-- footer --}}
    @include('layouts.footer')

    <!-- Add this CSS to your stylesheet -->
    <style>
        .products-page .product-item {
            border: 1px solid #e9ecef;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
        }

        .products-page .product-item:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .product-img {
            height: 220px;
            width: 100%;
            object-fit: cover;
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            border-radius: 20px;
            color: white;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-content {
            padding: 20px;
        }

        .product-title {
            font-size: 1.2rem;
            margin-bottom: 0;
        }

        .product-price {
            font-weight: 600;
            color: var(--success);
        }

        .product-description {
            color: #6c757d;
            font-size: 0.9rem;
            margin: 10px 0;
        }

        .category-item {
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .category-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .category-item .icon-box {
            font-size: 2.5rem;
            color: var(--success);
            margin-bottom: 15px;
        }

        .promise-item {
            margin-bottom: 20px;
        }

        .promise-item .icon-box {
            font-size: 1.5rem;
        }
    </style>
