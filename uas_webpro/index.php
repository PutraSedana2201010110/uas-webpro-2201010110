<?php include_once("config.php");


$tampil = mysqli_query($mysqli, "SELECT * FROM tb_wisata");
$kendaraan = mysqli_query($mysqli, "SELECT * FROM tb_akomodasi where jenis ='kendaraan'");
$hotel = mysqli_query($mysqli, "SELECT * FROM tb_akomodasi where jenis ='hotel'");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
	<title>Wisata Pulau Bali</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Custom styles for this template -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css"  rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

		<style>
			.checked {
				color: orange;
			}
		</style>
		<style>
			.carousel-inner{
				width: 100%;
				max-height: 475px !important;
			}
			.card-img-top{
				max-height: 150px !important;
			}
		</style>

	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top" style="margin-top:20px">~Wisata Tabanan Bali~</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="#">Home</a>
						</li>
						<li>
							<a class="page-scroll" href="#wisata">Wisata</a>
						</li>
					
						<li>
							<a class="page-scroll" href="#akomodasi">Akomodasi</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->
		<header>
			<div class="container">
				<div class="slider-container">
					<div class="intro-text">
						<div class="intro-lead-in">Welcome To Tabanan City</div>
						<!-- <a href="#wisata" class="page-scroll btn btn-xl">Search</a> -->
					</div>
				</div>
			</div>
		</header>



		<section id="wisata" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Wisata</h2>
							<!-- 	<p>Our portfolio is the best way to show our work, you can see here a big range of our work. Check them all and you will find what you are looking for.</p> -->
						</div>
					</div>
				</div>
				<div class="row">
					<!-- start portfolio item -->

					<?php 

    while ($dt = $tampil->fetch_assoc()) :
    ?>
					<div class="col-md-4">
						<div class="ot-portfolio-item">
							<figure class="effect-bubba">
								<img src="images/<?= $dt['foto'] ?>" alt="img02" class="img-responsive" />
								<figcaption>
									<h2><?= $dt['nama_wisata'] ?></h2>
									<!-- <p>Branding, Design</p> -->
									<a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>

										<a href="#" class="btn btn-success" onclick="keterangan('<?= $dt['keterangan'] ?>','<?= $dt['nama_wisata'] ?>','<?= $dt['foto'] ?>')" data-toggle="modal" data-target="#Modal-1" style="width: 100%;">Boking</a>
                                                     
                                              	       

								</figcaption>
							</figure>
						</div>
					</div>
					  <?php
    endwhile;
    ?>
				</div>
			</div><!-- end container -->
		</section>



			<section id="akomodasi" class="light-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="section-title">
								<h2>Akomodasi</h2>

							</div>
						</div>
					</div>
					<main>


						<div class="shadow p-3 mb-5 bg-body rounded" style="margin-bottom: 10px">
							<div class="row">
								<div class="col-sm-3">
									<label for="exampleFormControlInput1" class="form-label">Kategori</label>
									<select id="jenis" class="form-control" aria-label="Default select example">
										<option value="Hotel">Hotel</option>
										<option value="Kendaraan">Kendaraan</option>
										
									</select>
								</div>
								<div class="col-sm-3">
									<label for="checkin" class="form-label">Checkin</label>
									<input type="text" class="form-control" id="checkin">
								</div>
								<div class="col-sm-3">
									<label for="checkout" class="form-label">Checkout</label>
									<input type="text" class="form-control" id="checkout">
								</div>
								<div class="col-sm-3" style="margin-top: 25px;">
									<a id="cari" type="button" class="btn btn-primary">Search <i class="fa fa-search"></i></a>
								</div>

							</div>
						</div>


						<div class="row m-2 t-4" id="divhotel" style="display: none;">
												<?php 

    while ($dt2 = $hotel->fetch_assoc()) :
    ?>
							<div class="col-sm-3">
								<div class="card" style="width: 20rem;">
									<img src="assets/img/<?= $dt2['gambar'] ?>" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title"><?= $dt2['nama'] ?></h5>
										
										<h5><?= 'Rp. '.number_format($dt2['harga_sewa'],0,',','.')  ?></h5>
										<!-- <a href="#" class="btn btn-primary">Lihat..</a> -->
										<a href="#" class="btn btn-success" onclick="booking('Sewa Hotel','<?= $dt2['harga_sewa'] ?>')" data-toggle="modal" data-target="#modalform" style="width: 100%;">Boking</a>
									</div>
								</div>
							</div>

							<?php
    endwhile;
    ?>
						</div>





						<div class="row m-2 t-4" id="divkendaraan" style="display: none;">

									<?php 

    while ($dt1 = $kendaraan->fetch_assoc()) :
    ?>
							<div class="col-sm-3">
								<div class="card" style="width: 20rem;">
									<img src="assets/img/<?= $dt1['gambar'] ?>" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title"><?= $dt1['nama'] ?></h5>
										
										<h5><?= 'Rp. '.number_format($dt1['harga_sewa'],0,',','.')  ?></h5>
										<!-- <a href="#" class="btn btn-primary">Lihat..</a> -->
										<a href="#" class="btn btn-success" onclick="booking('Sewa Kendaraan', '<?= $dt1['harga_sewa']  ?>')" data-toggle="modal" data-target="#modalform" style="width: 100%;">Boking</a>
									</div>
								</div>
							</div>

							<?php
    endwhile;
    ?>
						
						</div>


						<!-- Modal -->
<!-- <div class="modal fade" id="modalform">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" readonly="readonly" id="harga" class="form-control" placeholder="Disabled input">

        <label for="qty" class="form-label">Qty</label>
        <input type="number" id="qty" class="form-control" placeholder="Disabled input">

        <label for="total" class="form-label">Total</label>
        <input type="text" readonly="readonly" id="total" class="form-control" placeholder="Disabled input">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="popup">Save changes</button>
      </div>
    </div>
  </div>
</div> -->



<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="Modal-label-3">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="modal-title fs-5" id="judulModal">Modal title</h1>
			</div>
			<form method="post" action="add.php" id="add_detail_form">
			<div class="modal-body" style="margin-left: 20px">
				<label for="harga" class="form-label">Harga</label>
				<input type="text" readonly="readonly" id="harga" name="harga" class="form-control" placeholder="Disabled input">

				<label for="qty" class="form-label">Qty</label>
				<input type="number" name="qty" id="qty" class="form-control" placeholder="Disabled input">

				<label for="total" class="form-label">Total</label>
				<input type="text" name="total" readonly="readonly" id="total" class="form-control" placeholder="Disabled input">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<!-- <button type="submit" class="btn btn-primary" id="popup">Save changes</button> -->

				<input type="submit" class="btn btn-primary" name="submit" value="Simpan">
			</div>
			</form>
		</div>
	</div>
</div>



</main>

</div><!-- end container -->
</section>

<p id="back-top">
	<a href="#top"><i class="fa fa-angle-up"></i></a>
</p>
<footer>
	<div class="container text-center">
		<p>Wisata Pulau Bali</p>
	</div>
</footer>



<!-- Modal for portfolio item 1 -->
<div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="Modal-label-1">The Blooms Garden</h4>
			</div>
			<div class="modal-body">
				<img src="images/w1.jpg" alt="img01" class="img-responsive"  id='logoKategori1' />
				<!-- 	<div class="modal-works"><span>Branding</span><span>Web Design</span></div> -->
				<p id="keterangan">The Blooms Garden adalah taman rekreasi seluas 4,5 hektar yang disebut sebagai taman bunga terbesar di Bali. Lokasinya ada di Desa Batusea, Kecamatan Baturiti, Tabanan. Taman-taman tersebut di antaranya Taman Belanda, Taman Cinta, Taman Dewi Danu, Taman Oval, dan lainnya.Di Taman Belanda, misalnya, penunjung bisa menemukan ornamen dua kincir yang merupakan ikon negara Belanda. Selain mengeksplorasi taman bunga, ada pula aktivitas lain seperti naik ATV, main di playground anak, kulineran di restoran, dan lainnya.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>








		<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/cbpAnimatedHeader.js"></script>
			<script src="js/theme-scripts.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="js/ie10-viewport-bug-workaround.js"></script>


			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/bootstrap/jquery-3.6.1.min.js"></script>

			<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
			rel = "stylesheet">
			<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
			<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
			<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




			<script>
				$( function(){
					$( "#checkout" ).datepicker();
					$( "#checkin" ).datepicker();
				});
			</script>
			<script>
				$('#popup').click(function() {
					Swal.fire('Berhasil Disimpan')
				});
			</script>

			<script>
				function add_detail(){

					$("#modalform").modal({
						backdrop : "static",
						keyboard: false
					});
				}


				$("#cari").click(function(){
					var jenis = $("#jenis").val();
					if(jenis=="Hotel"){
						$("#divhotel").fadeIn("10000");
						$("#divkendaraan").fadeOut();
						var scrollPos = $("#divhotel").offset().top;
						$(window).scrollTop(scrollPos);
					}else if (jenis=="Kendaraan"){
						$("#divhotel").fadeOut();
						$("#divkendaraan").fadeIn("10000");
						var scrollPos = $("#divkendaraan").offset().top;
						$(window).scrollTop(scrollPos);
					}else{
						alert("Layanan Belum Tersedia");
					}
				});

				function booking(namaObjek, harga){
 // $('#modalform').modal('show');

					$("#modalform").modal({
						backdrop : "static",
						keyboard: false
					});

					$('#judulModal').text(namaObjek);
					$('#harga').val(harga);
				}


				function keterangan(keterangan,nama,gambar=null){
 // $('#modalform').modal('show');

					$("#Modal-1").modal({
						backdrop : "static",
						keyboard: false
					});

					 $('#Modal-label-1').text(nama);
					 $('#keterangan').text(keterangan);
					 $('#logoKategori1').attr('src', '<?= ('images/') ?>'+gambar);
            
				}

				$('#qty').on('input',function(e){
					var qty = $('#qty').val();
					var harga = $("#harga").val().replace(/\./g,'');
					var total = parseInt(harga) * parseInt(qty);
					$('#total').val(total);

					// $('#total').val(total.toLocaleString().replace(/\,/g, '.'));
  //alert(harga);
				});
			</script>

		</body>
		</html>