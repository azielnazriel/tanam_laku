    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #468277 ;">
        <div class=" container px-4 px-lg-5">
            <a class="navbar-brand" id="ketik" href="#!">Tanam-Laku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item me-4"><a class="button nav-link active" aria-current="page" id="ketik" href="{{url('')}}">Beranda</a></li>
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