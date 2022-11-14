<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Marketplace Tanaman </title>
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <!-- Bootstrap icons-->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/warna.css" rel="stylesheet" />
</head>

<body>

    <!-- Modal login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog pe-5">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title mt-4" style="font-size:30px;">
                        Masuk
                    </h5>
                    <button type="button" class="btn-close me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- <h6 class="text-end modal-title mt-4" style="font-size:15px;">
                        Daftar
                    </h6> -->
                </div>
                <form class="d-flex">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Nomer HP atau Email</label>
                            <input class="form-control form-control-sm" style="width: 425px; height: 50px;" name="email" type="email" placeholder="Masukan Nomer HP/Email Disini">
                            <p style="font-size: 12px;">Example: email@tanamtumbuh.com</p>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control form-control-sm" style="width: 425px; height: 50px;" name="password" type="password" placeholder="Masukan Password Disini">
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" style="width: 425px; height: 50px;" name="submit" class="btn btn-success">Masuk</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <section class="section">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/iklan.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/iklan3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/iklan2.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!-- <div class="slider">
            <div class="slide">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3"> -->
        <!-- <img id="slider-1" src="/img/iklan.jpg" class="img-fluid" />
                <img id="slider-2" src="/img/iklan2.png" class="img-fluid w-100 gbr" />
                <img id="slider-3" src="/img/iklan3.png" class="img-fluid w-100 gbr" /> -->
        <!-- <div class="st first">
                    <img src="/img/iklan.jpg" alt=""> -->
        <!-- <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a> -->
        <!-- </div>

                <div class="st first">
                    <img src="/img/iklan2.png" alt="">
                </div>

                <div class="st first">
                    <img src="/img/iklan3.png" alt="">
            </div>
                <div class="nav-auto">
                    <div class="a-b1"></div>
                    <div class="a-b2"></div>
                    <div class="a-b3"></div>
                </div>
            </div>
            <div class="nav m">
                <label for="radio1" class="m-btn"></label>
                <label for="radio2" class="m-btn"></label>
                <label for="radio3" class="m-btn"></label>
            </div>
        </div> -->
    </section>

    <!-- Section-->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($data as $produk)
                <div class="col-md-4">
                <div class="card">
                    <img src="{{ url('foto') }}/{{ $produk->foto }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $produk->nama_tanam }}</h5>
                        <p class="card-text">
                        <strong>Harga : </strong>Rp.{{ $produk->harga }} <br>
                        <strong>Stok :</strong> {{ $produk->stok }} <br>
                        <hr>
                        <strong>Keterangan :</strong><br>
                        {{ $produk->kategori }}
                        </p>
                      <a href="#" style="margin-right: 5px" class="btn btn-primary bi bi-heart"> Suka</a><a href='{{ url('tanam/'.$produk->id_tanam) }}' class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <!-- <div class="container"><p class="m-0 text-center text-white">Copyright &copy; BY Nazril 2022</p></div> -->
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
</body>
</html>