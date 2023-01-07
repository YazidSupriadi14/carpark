<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>


<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.html" class="navbar-brand brand"> DARUL KHOLIDIN </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="index.html">Home</a></li>
				<li class="propClone"><a href="{{url('sma/ceklulus')}}">Info Kelulusan</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage" data-aos="fade-up">
					<div class="maintext-image"  data-scrollreveal="enter top over 1.5s after 0.1s">
						 Selamat Datang <br> Di Website Darul Kholidin
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>


<!-- STEPS =============================-->
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
			<div class="col-md-4" data-aos="fade-up" >
				<div class="col editContent">
					<span class="numberstep"><i class="fa fa-graduation-cap"></i></span>
					<h3 class="numbertext">Pendidik dan Pengajar</h3>
					<p>
					Tenaga pendidik dan pengajar di pondok pesantren Darul Kholidin adalah para sarjana yang memeiliki pengalaman mendidik dan mengajar serta latar belakang keilmuan dalam pendidikan umum dan agama yang berasal dari perguruan tinggi di indonesia dan timur tengah serta tamatan beberapa pesantren di pulau jawa</p>
				</div>
				<!-- /.col-md-4 -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent" data-aos="fade-up" data-aos-duration="1000">
				<div class="col">
					<span class="numberstep"><i class="fa fa-building"></i></span>
					<h3 class="numbertext">Sarana Pendukung</h3>
					<p class="text-center">
                    Ruang belajar dan asrama yang nyaman, laboratorium IPA/Komputer,Perpustakaan,Masjid,Musholla,Aula,
					Sarana Olahraga(Lapangan Sepakbola,Lapangan bola voli,Lapangan Badminton) dan Lingkungan yang sejuk, luas dan alam</p>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent" data-aos="fade-up" data-aos-duration="1500">
				<div class="col">
					<span class="numberstep"><i class="fa fa-book"></i></span>
					<h3 class="numbertext">Kurikulum</h3>
					<p>
					Kurikulum yang Menjadi Acuan dalam penyelenggaraan kegiatan belajar-mengajar(KBM) di pondok pesantren Darul Kholidin adalah perpaduan antara kurikulum pendidikan nasional(Diknas) yang berbasis kurikulum pondok pesantren. penyajian kurikulum senantiasa mengikuti perkembangan pendidikan nasional dan kebutuhan masyarakat.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
	
	



<!-- FOOTER =============================-->
<div class="footer ">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
		<p class="footernote ">
			Darul Kholidin
			</p>
			<p style="color:white;">YAYASAN PENDIDIKAN PONDOK PESANTREN DARUL KHOLIDIN <br> Jln. Kp. Sasak RT 03 RW 08 Desa Tegal, Kec. Kemang, Kab. Bogor, Jawa Barat 16310</p>
		
		</div>
		
		<div class="col-md-4">
		<p style="margin-top:200px;color:white;text-align:center;" >
				 &copy; 2021 Darul Kholidin
			</p>

		</div>
		
		<div class="col-md-4">
		<p class="footernote ">
				 Contact us
			</p>
		<ul >
				<li><a href="/" style="color:white; font-size:14px;"><i class="fa fa-phone"></i>  Phone : (+62)857 - 5417 - 0453</a></li>
				<li><a href="/"style="color:white; font-size:14px;"><i class="fa fa-envelope"></i>  Email : smadarulkholidin42@gmail.com</a></li>
				<li><a href="/"style="color:white; font-size:14px;"><i class="fa fa-envelope"></i>  Email : smpitdarulkholidin42@gmail.com</a></li>
			</ul>
		</div>
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
<script src="{{asset('frontend/js/jquery-.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/anim.js')}}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
<script>
  AOS.init();
</script>
</body>
</html>