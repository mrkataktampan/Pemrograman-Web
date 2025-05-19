<main>
    <!-- Hero Section -->
    <section
        class="hero-section"
        style="background: url('{{ asset('front/images/banner-bg.png') }}') no-repeat center center; background-size: cover; padding: 100px 0;"
    >
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 text-white">
            <h1 class="display-4 fw-bold">Kualitas Terjamin</h1>
            <h1 class="display-4 fw-bold">dan Terpercaya !</h1>
            <p class="lead">Hubungi Kami Jika Mencari Mobil Berkualitas</p>
            <a class="btn btn-primary mt-3" href="{{ url('/admin/login') }}">Klik Tombol Ini</a>
            </div>
        </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
            <img
                src="{{ asset('front/images/about-img.png') }}"
                alt="About Us"
                class="img-fluid rounded shadow"
            />
            </div>
            <div class="col-lg-6">
            <h2 class="fw-bold mb-3">About Us</h2>
            <p>
                Kami adalah platform manajemen kendaraan yang mengedepankan kemudahan, efisiensi, dan inovasi. Serta memberikan solusi untuk pengelolaan kendaraan yang bisa dimanfaatkan untuk penjualan dengan sistem modern dan terintegrasi
            </p>
            </div>
        </div>
        </div>
    </section>
  </main>