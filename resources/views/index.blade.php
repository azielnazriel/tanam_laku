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
                            <option value="Nazril terbaik">Nazril terbaik </option>
                            <option value="Rama Gay">Rama Gay</option>
                            <option value="Anggrek">Anggrek</option>
                            <option value="Bunga Matahari">Bunga Matahari</option>
                            <option value="Janda Bolong">Janda Bolong</option>
                            <option value="Nazril Ganteng">Nazril Ganteng</option>
                            <option value="Nazril Baik">Nazril Baik</option>
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

                <i class="ms-3 me-3 bi bi-bell"></i>

                <div class="d-flex">
                    <button class="btn btn-outline-success me-2" id="kamu" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi-cart-fill-success "></i>
                        Masuk
                        <span class="badge bg-success text-white rounded-pill"></span>
                    </button>
                </div>
                <form class="d-flex">
                    <button class="btn btn-outline-success " id="kamu" type="submit">
                        <i class="bi-cart-fill-success "></i>
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
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="/card-img-top" src="/https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                Rp 40.000 - Rp 80.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">Rp 20.000</span>
                                Rp 18.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="row">
                                <div class="text-center col-8"><a class="btn btn-outline-dark mr-3" href="#">Add to Favorite</a></div>
                                <div class="text-center col-4"><a class="btn btn-outline-dark me-8" href="#">Chat</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">Rp 50.000</span>
                                RP 25.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to Favorite</a></div>
                            <div class="text-center"><a class="btn btn-outline-dark ms-2" href="#">Chat</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                Rp 40.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            <div class="text-center"><a class="btn btn-outline-dark ms-2" href="#">Chat</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">Rp 50.000</span>
                                Rp 25.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            <div class="text-center"><a class="btn btn-outline-dark ms-2" href="#">Chat</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                RP 120.000 - Rp280.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">RP 20.000</span>
                                Rp 18.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            <div class="text-center"><a class="btn btn-outline-dark ms-2" href="#">Chat</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                Rp 40.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            <div class="text-center"><a class="btn btn-outline-dark ms-2" href="#">Chat</a></div>
                        </div>
                    </div>
                </div>
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