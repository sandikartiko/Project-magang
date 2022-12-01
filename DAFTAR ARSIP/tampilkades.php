<?php
        include "../koneksi.php";
        ?>

<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsip Digital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/download.jpg" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <style>
    #header.header-scrolled {
  background: rgb(137 11 27);
}
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent header-scrolled  ">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- memberikan logo pada arsip-->
      <div class="logo">
        <h1 style="color: white ;"><img src="../assets/img/logo.png" alt="" class="img-fluid"> E-ARSIP</h1>
      </div>

      <!-- membuat dropdown daftar arsip -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../dashboard.php">HOME</a></li>
          <li class="dropdown"><a class="nav-link scrollto active" href="#hero"><span>DAFTAR ARSIP</span> <i
                class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a  href="tampildata.php">Surat Masuk</a></li>
              <li><a href="tampilsuratkeluar.php">Surat Keluar</a></li>
              <li><a href="tampilsuratkeputusan.php">Surat Keputusan</a></li>
              <li><a href="tampilinventaris.php">Inventaris Barang</a></li>
              <li><a href="tampilaperdes.php"><span>Peraturan Desa</span> <i></i></a>
              <li><a class="nav-link scrollto active" href="tampilkades.php"><span>Peraturan Kades</span> <i></i></a>
              </li>    
            </ul>
          </li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- akhir membuat dropdown -->
  <!-- akhir header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center" style=" background: linear-gradient(127deg, rgb(137 11 27) 0%, rgb(202 10 10) 100%); ">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container" style="height: 38vh;">
          <h2 class="animate__animated animate__fadeInDown" style="font-size: 35px;">Daftar Peraturan Kades</h2>
          <p class="animate__animated fanimate__adeInUp">Berisikan Dokumen Arsip Penting Desa TunjungTirto</p>
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section>

  <!-- awal buat tabel suratmasuk-->
  <section id="services" class="services">
    <div class="container">
      <section class="content card" style="padding: 10px 10px 10px 10px ">
      <div class="row">
          <div class="col">
            <center>
            <h1><i class="nav-icon fas fa-envelope my-1 btn-sm-1"></i> Peraturan Kades</h1>
            </center>
          </div>
        </div>
        <br>
        <div class="position-relativ">
        <div class="position-absolute top-0 end-0">
        <div class="row">
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading"><b>Pencarian</b></div>
              <div class="panel-body">
                <form class="form-inline">
                  <div class="form-group">
                    <select class="form-control" id="Kolom" name="Kolom" required="">
                      <?php
                        $kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                       ?>
                      <option value="tentang" <?php if ($kolom=="tentang") echo "selected";?>>Tentang</option>
                      <option value="tanggalkesepakatan" <?php if ($kolom=="tanggalkesepakatan") echo "selected";?>>Tanggal</option>
                    </select>
                    <br>
                  </div>
                  <div class="form-group" style="padding-bottom: 8px;">
                    <input type="text" class="form-control" id="KataKunci" name="KataKunci" placeholder="Kata kunci.."
                      required="" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Cari</button>
                  <a href="tampilkades.php" class="btn btn-danger">Reset</a>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        <br>
        <br>
        <div class="col">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahModal" ><i class="bi bi-person-plus-fill"> Tambah Data</i></button>
          ||
            <a href="../CETAK DATA/cetakkades.php" class="btn btn-success" target="_blank"><i class="bi bi-printer-fill"> PRINT </a></i>
        </div>
        <br>
        <div class="row table-responsive">
          <div class="col">
            <table class="table table-dark table-striped">
              <thead>
                <tr class="bg-light">
                  <th>No</th>
                  <th>Jenis Perkades</th>
                  <th>No dan Tanggal Ditetapkan</th>
                  <th>Tentang</th>
                  <th>Uraian</th>
                  <th>Tanggal Kesepakatan Perdes</th>
                  <th>No dan Tanggal Dilaporkan</th>
                  <th>No dan Tanggal Diundangkan Lembaran Desa</th>
                  <th>No dan Tanggal Diundangkan Berita Desa</th>
                  <th>Keterangan</th>
                  <th>File Document</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <?php 
                 $SqlQuery= mysqli_query($kon, "SELECT * FROM perkades ORDER BY tanggalkesepakatan ");
                 $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
                 $kolomCari=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                 $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

                 // Jumlah data per halaman
                 $limit = 5;
                 $limitStart = ($page - 1) * $limit;
                 
                 //kondisi jika parameter pencarian kosong
                 if($kolomCari=="" && $kolomKataKunci==""){
                   $SqlQuery = mysqli_query($kon, "SELECT * FROM perkades ORDER BY tanggalkesepakatan LIMIT ".$limitStart.",".$limit);
                 }else{
                   //kondisi jika parameter kolom pencarian diisi
                   $SqlQuery = mysqli_query($kon, "SELECT * FROM perkades  WHERE $kolomCari LIKE '%$kolomKataKunci%' LIMIT ".$limitStart.",".$limit);
                 }
                 $no = $limitStart + 1;
                 

                 while($data = mysqli_fetch_array($SqlQuery)){ 
                 ?>
              <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data['jenisperkades'] ?></td>
                <td><?php echo $data['tglditetapkan'] ?></td>
                <td><?php echo $data['tentang'] ?></td>
                <td><?php echo $data['uraian'] ?></td>
                <td><?php echo $data['tanggalkesepakatan'] ?></td>
                <td><?php echo $data['tgllapor'] ?></td>
                <td><?php echo $data['tgllembardesa'] ?></td>
                <td><?php echo $data['tglberitadesa'] ?></td>
                <td><?php echo $data['keterangan'] ?></td>
                <td><a href="../TAMPIL PDF/tampilpdfkades.php?id=<?=$data['id']?>"><?php echo $data['file_document']?></a>
                  </td>
                </td>
                
                <td>
                  <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Ubah</a>    
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
                </td>
              </tr>
              <!-- Membuat modal ubah -->
              <div class="modal fade" id="modalUbah<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="../CRUD/aksi_crud_kades.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['id']?>">
                        <div class="form-group">
                          <label class="control-label">Jenis Perkades</label>
                          <input type="text" name="adjp" value="<?=$data['jenisperkades']?>" class="form-control"
                            required>
                        </div>
                        <div>
                        <label class="control-label">No dan Tanggal Ditetapkan</label>
                          <input type="text" name="adntd" value="<?=$data['tglditetapkan']?>" class="form-control"
                            required>
                        </div>
                        <div>
                        <label class="control-label">Tentang</label>
                          <input type="text" name="adt" value="<?=$data['tentang']?>" class="form-control"
                            required>
                        </div>
                        <div>
                        <label class="control-label">Uraian</label>
                          <input type="text" name="adu" value="<?=$data['uraian']?>" class="form-control"
                            required>
                        </div>
                        <div class="form-group">
                        <label class="control-label">Tanggal Sepakat</label>
                          <input type="date" name="adtkp" value="<?=$data['tanggalkesepakatan']?>" class="form-control"
                            required>
                        </div>
                        <div>
                        <label class="control-label">No dan Tanggal Dilaporkan</label>
                          <input type="text" name="adntdl" value="<?=$data['tgllapor']?>" class="form-control"
                            required>
                        </div>
                        <div>
                        <label class="control-label">No dan Tanggal Diundangkan Lembaran Desa</label>
                          <input type="text" name="adntdld" value="<?=$data['tgllembardesa']?>" class="form-control"
                            required>
                        </div>
                        <div>
                        <label class="control-label">No dan Tanggal Diundangkan Berita Desa</label>
                          <input type="text" name="adntdbd" value="<?=$data['tglberitadesa']?>" class="form-control"
                            required>
                        </div>
                        <div>
                        <label class="control-label">Keterangan</label>
                          <input type="text" name="adk" value="<?=$data['keterangan']?>" class="form-control"
                            required>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Upload file</label>
                          <input type="file" name="adfile" value="<?=$data['file_document']?>" class="form-control"
                            >
                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                          <button type="submit" class="btn btn-success" name="bubah">Ubah</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div> 
               <!--  selesai Membuat modal ubah -->

                <!-- Membuat modal hapus -->
              <div class="modal fade" id="modalHapus<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="../CRUD/aksi_crud_kades.php">
                        <input type="hidden" name="id" value="<?= $data['id']?>">

                          <h5 class="text-center"> Apakah Anda Yakin Akan Menghapus Data Ini ? <br>
                            <span class="text-danger"><?=$data['jenisperkades']?></span>
                            </span>
                        </h5>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Jangan !</button>
                          <button type="submit" class="btn btn-success" name="bhapus"> Ya Hapus Saja !</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
               <!--  selesai Membuat modal hapus -->
               <?php } ?>
            </table>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <?php
                     // Jika page = 1, maka LinkPrev disable
                     if($page == 1){ 
                   ?>
                    <!-- link Previous Page disable -->
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <?php
                    }
                     else{ 
                           $LinkPrev = ($page > 1)? $page - 1 : 1;  
                           if($kolomCari=="" && $kolomKataKunci==""){
                     ?>
                          <li class="page-item"><a class="page-link" href="tampilkades.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>

                    <?php     
                     }else{
                    ?>
                          <li><a href="tampilkades.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>">Previous</a></li>
                    <?php
                     } 
                   }
                   ?>
                   <?php
                    //kondisi jika parameter pencarian kosong
                    if($kolomCari=="" && $kolomKataKunci==""){
                    $SqlQuery = mysqli_query($kon, "SELECT * FROM perkades");
                    }else{
                          //kondisi jika parameter kolom pencarian diisi
                           $SqlQuery = mysqli_query($kon, "SELECT * FROM perkades WHERE $kolomCari LIKE '%$kolomKataKunci%'");
                    }     
      
                     //Hitung semua jumlah data yang berada pada tabel Sisawa
                     $JumlahData = mysqli_num_rows($SqlQuery);
        
                     // Hitung jumlah halaman yang tersedia
                     $jumlahPage = ceil($JumlahData / $limit); 
        
                     // Jumlah link number 
                     $jumlahNumber = 1; 

                     // Untuk awal link number
                     $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
        
                    // Untuk akhir link number
                    $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
        
                    for($i = $startNumber; $i <= $endNumber; $i++){
                    $linkActive = ($page == $i)? ' class="active"' : '';

                    if($kolomCari=="" && $kolomKataKunci==""){
                    ?>
                        <li class="page-item" <?php echo $linkActive; ?>><a class="page-link"href="tampilkades.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                   <?php
                    }else{
                    ?>
                <li class="page-item" <?php echo $linkActive; ?>><a class="page-link"
                    href="tampilkades.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
                <?php
                  }
               }
                 ?>
                <!-- link Next Page -->
                <?php       
                 if($page == $jumlahPage){ 
                 ?>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                <?php
                }
                else{
                     $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
                if($kolomCari=="" && $kolomKataKunci==""){
                ?>
                    <li class="page-item"><a class="page-link" href="tampilkades.php?page=<?php echo $linkNext; ?>">Next</a>
                </li>
                <?php     
                 }else{
                 ?>
                  <li class="page-item"><a class="page-link"
                    href="tampilkades.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>">Next</a>
                  </li>
                <?php
                  }
                }
                ?>
                </li>
              </ul>
            </nav>

            <!-- membuat modal tambah data -->
            <div class="modal fade" id="TambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukan Data Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="../CRUD/aksi_crud_kades.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label">Jenis Perkades</label>
                        <input type="text" name="adjp" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">No dan Tanggal Ditetapkan</label>
                        <input type="text" name="adntd" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tentang</label>
                        <input type="text" name="adt" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Uraian</label>
                        <input type="text" name="adu" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal Kesepakatan Perdes</label>
                        <input type="date" name="adtkp" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">No dan Tanggal Dilaporkan</label>
                        <input type="text" name="adntdl" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">No dan Tanggal Diundangkan Lembaran Desa</label>
                        <input type="text" name="adntdld" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">No dan Tanggal Diundangkan Berita Desa</label>
                        <input type="text" name="adntdbd" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Keterangan</label>
                        <input type="text" name="adk" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">File Document</label>
                        <input type="file" name="adfile" class="form-control">
                      </div>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <input type="submit" class="btn btn-success" name="bsimpan" value="Simpan">
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>
            <!-- selesai membuat modal tambah -->
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" style="padding: 4px 0; background: rgb(137 11 27) ;">
    <div class="container">
      <h2>Kantor Desa TunjungTirto</h2>
      <p>Jl. Raya Bunut Wetan No.5, Bunder, Tanjungtirto, Kec. Singosari, Kabupaten Malang, Jawa Timur 65153</p>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>