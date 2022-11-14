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

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #468277 ;">
        <div class=" container px-4 px-lg-5">
            <a class="navbar-brand" id="ketik" href="#!">Tanam-Laku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item me-4"><a class="button nav-link active" aria-current="page" id="ketik" href="#!">Beranda</a></li>
                    <li class="nav-item me-4"><a class="nav-link" id="ketik" href="/tanam">Jual</a></li>
                    <li class="nav-item me-4"><a class="nav-link" id="ketik" href="#!">Chat</a></li>
                    <li class="nav-item dropdown me-4" id="ket">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown-ket" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="ket">Kategori</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" id="ketik" href="#!">Dewasa</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" id="ketik" href="#!">Bibit</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" id="ketik" href="#!">Benih</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" id="ketik" href="#!">Media Tanam</a></li>
                        </ul>
                    </li>

                    <!-- menu search -->
                    <div id="search-box" class="me-2">
                        <input type="text" list="input" placeholder="Type to search...">
                        <datalist id="input">
                            <option value="Bunga Mawar">Bunga Mawar </option>
                            <option value="Rama Gay">Rama Gay</option>
                            <option value="Anggrek">Anggrek</option>
                            <option value="Bunga Matahari">Bunga Matahari</option>
                            <option value="Janda Bolong">Janda Bolong</option>
                            <option value="Follow IG azielnazriel_">Follow IG azielnazriel_</option>
                            <option value="Follow IG bernardinoadi_">Follow IG bernardinoadi_</option>
                            <option value="Follow IG ramaditya7">Follow IG ramaditya7</option>
                        </datalist>
                        <!-- <div id="search-button">
                    <i class="fas fa-search"></i>
                </div> -->
                        <!-- <div id="cancel-button">
                    <i class="fas fa-times"></i>
                </div> -->
                    </div>
                    <script>
                        const searchBtn = document.querySelector("#search-btn");
                        const cancelBtn = document.querySelector("#cancel-btn");
                        // const searchBtn = document.querySelector("#search-btn");
                        const search, box;
                        document.querySelector("#search-box");
                        searchBtn.onclick = () => {
                            searchBox.classList.add("active");
                        }
                    </script>

                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-success " type="submit">
                        <i class="bi-cart-fill-success bi bi-heart me-1"></i>
                        Suka
                        <span class="badge bg-success text-white rounded-pill">0</span>
                    </button>
                </form>

                <i class="ms-3 me-3 bi bi-bell" style="color: #468277;"></i>

                <div class="d-flex">
                    <button class="btn btn-outline-success me-2" id="kamu" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi-cart-fill-success "></i>
                        Masuk
                        <span class="badge bg-success text-white rounded-pill"></span>
                    </button>
                </div>
                <form class="d-flex">
                    <button class="btn btn-outline-success " id="kamu" type="submit">
                        <i class="bi-cart-fill-success " href="/daftar"></i>
                        Daftar
                        <span class="badge bg-success text-white rounded-pill"></span>
                    </button>
                </form>

                <!-- <form>
                    <div class="row d-flex ">
                        <li class=" col-6 ketik list-unstyled ms" id="kamu" href="#!">Masuk</i>
                        <li class=" col-6 ketik list-unstyled" id="kamu" href="#!">Daftar</i>
                    </div>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- Header-->
    <!-- <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5" id="nazril">         
            <div class="text-center text-success">
                <h1 class="display-4 fw-bolder">Belanja Tanaman Di Sini</h1>
                <p class="lead fw-normal text-success-50 mb-0">Cari Tanaman Yang Anda Inginkan</p>
            </div>
        </div>
    </header> -->

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