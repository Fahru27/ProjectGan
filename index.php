<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="style2.css">
    <title>ProjectGan</title>
</head>

<body>
    <header>
        <div>
            <nav class="navbar navbar-expand-md navbar-light mr-auto fixed-top">
                <a class="navbar-brand text-dark font-weight-bold" href="#">ProjectGan</a>
                <button class="navbar-toggler" type="button" data-bs-target="#overlayNav" aria-controls="overlayNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" onclick="openNav()"></span>
                </button>
                <div class="container-fluid">
                    <div id="overlayNav" class="overlay" style="margin-left: auto;">
                        <a href="index.php" class="closebtn" onclick="closeNav()">&times;</a>
                        <ul id="overlayContent" class="navbar-nav overlay-content">
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold link-item" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold link-item" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold link-item" href="#tim">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold link-item" href="#contactUs">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div id="text">
                <h1>Build your website<br>with "project gan"</h1>
                <p>Providing good result with fair price</p>
                <a href="" class="order">order now</a>
            </div>
            <div>
                <img src="images/app_development_PNG.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <section id="about">
            <article id="tentang">
                <h2>Tentang ProjectGan</h2>
                <p>Project Gan terbentuk dari sekelompok mahasiswa gabut jurusan informatika Universitas Islam Indonesia. Kami menawarkan jasa pembuatan web dengan harga yang dapat anda atur sendiri. Hanya disini anda bisa mendapatkan jasa pembuatan web dengan harga sesuai keinginan anda.</p>
            </article>
            <h2>Mengapa ProjectGan?</h2>
            <article id="mengapa">
                <div>
                    <img src="images/Online payment _Two Color (3).png" alt="">
                    <div>
                        <h3>Harga Bersahabat</h3>
                        <p>Dengan harga yang dijamin lebih murah dari yang lain, anda bisa mendapatkan website dengan kualitas dan keamanan terjamin.</p>
                    </div>
                </div>
                <div>
                    <img id="g1" src="images/Fast Working_Monochromatic (1).png" alt="">
                    <div>
                        <h3>Pengerjaan Cepat</h3>
                        <p>Satu project dikerjakan dengan 4 developer sehingga waktu pengerjaan lebih cepat dan efisien.</p>
                    </div>
                    <img id="g2" src="images/Fast Working_Monochromatic (1).png" alt="">
                </div>
                <div>
                    <img src="images/Security_Isometric (2).png" alt="">
                    <div>
                        <h3>Keamanan Terjamin</h3>
                        <p>Tentu saja dengan menggunakan ssl, anda akan lebih aman untuk menyimpan data pribadi di website anda.</p>
                    </div>
                </div>
            </article>
        </section>

        <section id="tim" class="px-4">
            <h2>Tim Kami</h2>
            <div class="container-fluid mb-5">
              <div class="row">
                <div class="col-6 col-md-3">
                  <div>
                      <img src="https://cdn11.bigcommerce.com/s-dl22izwaan/images/stencil/1280x1280/products/671/10689/apizaqhdp__82079.1605627908.jpg?c=1" alt="">
                      <p>Alif Maulana R.</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div>
                      <img src="https://cdn11.bigcommerce.com/s-dl22izwaan/images/stencil/1280x1280/products/671/10689/apizaqhdp__82079.1605627908.jpg?c=1" alt="">
                      <p>Fahrudin Nasikh A.</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div>
                      <img src="https://cdn11.bigcommerce.com/s-dl22izwaan/images/stencil/1280x1280/products/671/10689/apizaqhdp__82079.1605627908.jpg?c=1" alt="">
                      <p>M. Ilham Rizkyakbar</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div>
                      <img src="https://cdn11.bigcommerce.com/s-dl22izwaan/images/stencil/1280x1280/products/671/10689/apizaqhdp__82079.1605627908.jpg?c=1" alt="">
                      <p>Naufal Yusran</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-lg-6">
                <p>Kami semua merupakan mahasiswa informatika dari salah satu universitas di Yogyakarta. Kami siap memberikan layanan terbaik kepada anda.</p>
              </div>
            </div>
        </section>

        <section class="bg-light p-5 mt-4">
          <div class="container-fluid text-center">
            <h2>Punya Pertanyaan?</h2>
            <h5 class="mb-4 fw-normal">Tanyakan Saja</h5>
            <form>
              <div class="row justify-content-center mb-3">
                <div class="col-sm-10 col-md-8 col-lg-6">
                  <div class="form-group text-start">
                    <label for="name" class="fw-normal fs-6">Nama</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                </div>
              </div>
              <div class="row justify-content-center mb-3">
                <div class="col-sm-10 col-md-8 col-lg-6">
                  <div class="form-group text-start">
                    <label for="email" class="fw-normal fs-6">Email</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                </div>
              </div>
              <div class="row justify-content-center mb-3">
                <div class="col-sm-10 col-md-8 col-lg-6">
                  <div class="form-group text-start">
                    <label for="message" class="fw-normal fs-6">Pesan</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-6 mb-4">
                  <a href="#" class="btn fs-6 submit-question-btn">Submit Pertanyaan</a>
                </div>
              </div>
            </form>
          </div>
        </section>
    </main>

    <footer class="bg-footer px-5">
      <div class="py-5 container">
        <div class="row">
          <div class="col-sm-10 col-lg-8 col-xl-9">
            <h4>ProjectGan</h4>
            <p class="fw-normal">Jl. Kaliurang KM 12.5, Sardonoharjo, Nganglik, Sleman, D.I Yogyakarta.</p>
            <p class="fw-normal mb-0">WA/Telp: 082238248899 <br>Email: projectgan@gmail.com</p>
          </div>
          <div class="col-sm-10 col-lg-4 col-xl-3 mt-5 mt-lg-0">
            <h4>Contact Us</h4>
            <div id="contactUs" class="d-inline-block pt-2 pb-1 medsos-container">
              <a href="#"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
              <a href="#"><i class="fab fa-whatsapp fa-2x text-success mx-3"></i></a>
              <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
              <a href="#"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
    <script>
        function openNav() {
            document.getElementById("overlayNav").style.width = "50%";
        }

        function closeNav() {
            document.getElementById("overlayNav").style.width = "0%";
        }
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 55);
        });
    </script>
</body>

</html>
