<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/css/warna.css" rel="stylesheet" />
</head>

<body>
    <section class="w-40">

        <div class="container py-5 h-100">
            <h1 id="judul" class="text-center">TanamLaku</h1>
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">

                    <img src="img/logo.png" class="img-fluid " id="gbr1" alt="Phone image">
                </div>
                <div class="w-50 center border rounded px-3 py-3">
                    <h2 class="text-center">Daftar Sekarang</h2>
                    <P class="text-center">Sudah punya akun TanamTumbuh? <a href="#!">Masuk</p>

                    <form action="/login/login" method="post">

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color:#000000 ;">Phone number or Email</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <P style="color:#000000 ;">Example: email@tanamtumbuh.com<a href="#!"></a></p>
                        <div class="mb-3 d-grid">
                            <button type="submit" name="submit" class="btn btn-success">Daftar</button>
                        </div>
                        <h6 class="text-center">Dengan mendaftar, saya menyetujui </h6>
                        <h6 class="text-center" id="judul">syarat dan ketentuan serta kebijakan privasi</h6>
                    </form>
                </div>
    </section>
</body>

</html>