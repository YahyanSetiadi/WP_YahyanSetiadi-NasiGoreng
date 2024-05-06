<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nasi Goreng</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/favicon.ico") ?> />
        <!-- Bootstrap icons-->
        <link href="<?php echo base_url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?> rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url("css/styles.css") ?>" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Kelompok 1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li> -->
                        
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a href="<?php echo base_url('welcome/tampil') ?>" class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <?php 
                                $query = $this->db->get('menu');
                                $total_pesanan = $query->num_rows();
                            ?>
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $total_pesanan; ?></span>
                        </a>
                    </form>

                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Nasi Goreng Mang Yadi</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Murah, Enak, Mantap</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url("assets/kambing.jpeg") ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nasi Goreng Kambing</h5>
                                    <!-- Product price-->
                                    Rp.30.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><button type="button" class="btn-outline-dark mt-auto" data-toggle="modal" data-target="#exampleModalLong">Add to Cart</button></div> -->
                            </div>
                        </div>
                    </div>               
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url("assets/jawa.jpeg") ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nasi Goreng Jawa</h5>
                                    <!-- Product price-->
                                    Rp.25.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url("assets/udang.jpg") ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nasi Goreng Udang</h5>
                                    <!-- Product price-->
                                    Rp.35.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url("assets/spesial.jpg") ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nasi Goreng Spesial</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    Rp.40.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url("assets/petai.jpeg") ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nasi Goreng Petai</h5>
                                    <!-- Product price-->
                                    Rp.20.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url("assets/rebus.jpeg") ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Kwetiau Kuah Udang</h5>
                                    <!-- Product price-->
                                    Rp.15.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url("assets/goreng.jpeg") ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Kuetiau Goreng</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    Rp.18.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url("assets/capcai.jpg") ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Capcai Rebus</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    Rp.30.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center"><button type="button" class="btn-outline-dark" data-toggle="modal" data-target="#exampleModalLong">Add to Cart</button></div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nasi Goreng Mang Yadi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url('welcome/tambah_pesanan') ?>" method="post">
            <div class="form-group">
                <label for="jenis">Menu</label>
                <select class="form-control" id="jenis" name="jenis" required>
                    <option value="">Pilih Jenis</option>
                    <option value="Nasi Goreng Biasa">Nasi Goreng Kambing</option>
                    <option value="Nasi Goreng Seafood">Nasi Goreng Jawa</option>
                    <option value="Nasi Goreng Spesial">Nasi Goreng Udang</option>
                    <option value="Nasi Goreng Spesial">Nasi Goreng Spesial</option>
                    <option value="Nasi Goreng Spesial">Nasi Goreng Petai</option>
                    <option value="Nasi Goreng Spesial">Kuetiau Kuah Udang</option>
                    <option value="Nasi Goreng Spesial">Kuetiau Goreng</option>
                    <option value="Nasi Goreng Spesial">Kuetiau Rebus</option>
                    <option value="Nasi Goreng Spesial">Capcai Rebus</option>
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

                
            </div>
            </div>
        </div>
        </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Kelompok1 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="<?php echo base_url("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js") ?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url("js/scripts.js") ?> "></script>
        <!-- modal -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
