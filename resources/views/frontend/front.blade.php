<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link href="{{ asset('backendtemplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<style type="text/css">
		/*home*/
		html{
			scroll-behavior: smooth;
		}
		#home{
			position: relative;
			width: 100%;
			padding: 0px;
			height: 100vh;
		}
		/*#home.black{
			position: absolute;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,1);
			z-index: 1000;
		}*/
		#home .navbar{
			position: absolute;
			width: 100%;
			background: rgba(1,1,1,.2);
		}

		.navbar-nav a{
			display: block;
			color: white;
			transition: .5s;
			/*border-left: 2px solid #74d5dd;*/
		}
		.navbar-nav a:hover{
			color: #74d5dd;
		}
		#home #carouselExampleCaptions{
			position: absolute;
			width: 100%;
			height: 100vh;
			overflow:hidden;
		}
		#home#carouselExampleCaptions.carousel-inner{
			position: absolute;
			width: 100%;
			height: 100%;
			/*overflow: hidden;*/
		}
		#home#carouselExampleCaptions.carousel-inner.carousel-item{
			position: absolute;
			width: 100%;
			height: 100%;
			/*overflow: hidden;*/
		}
		#home#carouselExampleCaptions.carousel-inner.carousel-item img{
			position: absolute;
			/*background-position:center;*/
			/*background-size: cover;*/
			background-attachment: fixed;
			width: 100%;
			height: 100%;
		}
		.carousel-caption{
			position: absolute;
			top: 30%;
			background: rgba(1,1,1,.2);
			/*bottom: 25%;*/
			padding: 40px 50px;
			/*width: 600px;*/
			height: 250px;
			padding-left: 0px;
			border-radius: 30px;
			padding-bottom: 20px;	
		}
		.carousel-caption h5{
			font-size: 50px;
		}
		.carousel-caption p{
			font-size: 18px;
		}
		#cummunity p{
			text-transform: uppercase; 
		}
		/*end home*/
		.program p{
			position: relative;
			color:gray;
			transition: .5s;
			padding: 5px;
			border: 1px solid white;
			border-radius: 2px;
			margin-bottom: 5px;
			/*padding-left: 20px;*/
		}
		.program p:hover{
			color: white;
			letter-spacing: 2px;
			background-color:#002e63;
			padding-left: 10px;
		}
		#studentlife{
			position: relative;
			padding: 0;
			background-image: url('img/wall.jpg');
			width: 100%;
			height: 70vh;
			background-position: center;
			background-size: cover;
			background-attachment: fixed;
			
		}
		#studentlife .black{
			position: absolute; 
			width: 100%;
			height: 100%;
			background:rgba(1,1,1,.7);	
		}
		#studentlife img{
			width: 100%;
			height: 100%;
		}
		#parentsay .avatar{
			overflow: hidden;
		}
		#parentsay  img{
			transition: .5s;
		}
		#parentsay .card:hover img{
			transform: scale(1.1);
		}
		#after .day{
			color: #1f75ee;
			transition: .5s;
			font-size: 15px;
		}
		#after .day:hover{
			color: #002e63;
			/*font-weight: 600;*/
		}
		#after h5{
			color: #002e63;
			font-weight: 600;
			font-size: 30px;
			transition: .5s;
		}
		#after h5:hover{
			color: #1f75ee;
		}
		#after .card-body{
			background-color: #f2f3f6;
		}
		#after .carousel-cell{
			margin-right: 20px;
		}
		#after .card .card-img-top{
			width: 300px;
			height: 200px;
			overflow: hidden;
		}
		#after .card .card-img-top img{
			transition: .9s ease;
		}
		#after .card img:hover{
			transform: scale(1.1);
			/*background-color: green;*/
		}
		#contact{
			background-color: #f2f3f6;
			position: relative;
			/*height: 70vh;*/
		}
		.flickity-page-dots{
			display: none;
		}
		#contact img{
			
		}
		#contact  .row .from-control{
			border-radius: 40px;
			line-height: 20px;
			padding: 30px 20px;
		}
		#footer {
			color: #a6a6a6;
			background-color: #1f2024;
		}
		#category .d-flex{
			margin-bottom: 20px;
		}
		#category .d-flex a{
			display: inline-block;
			text-decoration: none;
			margin-right: 20px;
			color: inherit;
			transition: .5s;
		}
		#category .d-flex a:hover{
			color: #f2aa2cff;
		}
		#parentsay .card{
			height: 500px;
		}
		#parentsay .card p{
			transition: .5s;
			/*visibility: hidden;*/

		}
	</style>	
</head>
<body>
	<!-- start home -->
	<div class="container-fluid" id="home">
		<div class="black">
			<!-- nav -->
			<nav class="navbar navbar-expand-lg  px-4 fixed-top py-3">
			  <a class="navbar-brand text-light" href="#" style="font-size: 30px;"><i class="fas fa-graduation-cap text-light mr-2" style="font-size: 35px;"></i>WEC</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
			    <div class="navbar-nav text-light">
			      <a class="nav-link active" href="#">HOME<span class="sr-only">(current)</span></a>
			      <a class="nav-link" href="#">ABOUT</a>
			      <a class="nav-link" href="#">ADMISSION</a>
			      <a class="nav-link" href="#">FEATURES</a>
			      <a class="nav-link" href="#">COMMNITY</a>
			      <a class="nav-link" href="#">NEWS</a>
			      <a class="nav-link" href="#">CONTACT</a>
			   	 </div>
			  </div>
			  <div class="justify-content-end register d-flex mr-2" style="cursor: pointer;">
			  	<a class="text-light mr-3" href="{{ route('login') }}"><i class="fas fa-unlock mr-1 text-light"></i>Login</a>
			  	<a class="text-light"><i class="far fa-user-circle mr-1 text-light"></i>Register</a>
			  </div>
			</nav>
			<!-- end nav -->
			<!-- start carousel -->
			<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
			 <!--  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			  </ol> -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{asset('/images/b1.jpg')}}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			      	<p class="text-light mb-0">Best Private School in Town</p>
			        <h5>A Great Place for Eduction</h5>
			        <a class="btn btn-primary btn-lg mt-3 rounded" href="#welcome">Make Appointment</a>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('/images/b2.jpg')}}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			      	<p class="text-light mb-0">Best Private School in Town</p>
			        <h5>A Great Place for Eduction</h5>
			        <a class="btn btn-primary btn-lg mt-3 rounded" href="#welcome">Make Appointment</a>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('/images/b3.jpg')}}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			      	<p class="text-light mb-0">Best Private School in Town</p>
			        <h5>A Great Place for Eduction</h5>
			        <a class="btn btn-primary btn-lg mt-3 rounded" href="#welcome">Make Appointment</a>
			      </div>
			    </div>
			  </div>
			  <!-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
 -->			</div>
			<!-- end carousel -->
		</div>
	</div>
	<!-- end home -->
	<!-- start content -->
	<div class="container-fluid text-center" style="background:#f2f3f6;padding:100px 0px;" id="welcome">
		<p class="text-primary">Welcome To Us</p>
		<h1 class="text-dark">Welcome To Greenville</h1>
		<div class="justify-content-center mt-4" style="padding: 0px 300px;">Our buildings are filled with children and adults who want to come to school every day. They are engaged in activities that light up their brains, sharpen their critical capacities and develop their consciences.</div>
		
	</div>
	<!-- building our community-->
	<div class="container" id="community" style="margin-top: -50px;">
		<div class="row">
			<div class="col-12 col-md-3 text-center">
				<div class="card shadow py-4" style="border-radius: 3px;">
					<div class="icon">
						<i class="far fa-clock mb-3 text-primary" style="font-size: 50px;"></i>
					</div>
					<p class="text-secondary text-uppercase">Flexible Schedule</p>
				</div>
			</div>
			<div class="col-12 col-md-3 text-center">
				<div class="card shadow py-4" style="border-radius: 3px;">
					<div class="icon">
						<i class="fas fa-chess-queen mb-3 text-primary" style="font-size: 50px;"></i>
					</div>
					<p class="text-secondary text-uppercase">Accerditation</p>
				</div>
			</div>
			<div class="col-12 col-md-3 text-center">
				<div class="card shadow py-4" style="border-radius: 3px;">
					<div class="icon">
						<i class="fas fa-drafting-compass mb-3 text-primary" style="font-size: 50px;"></i>	
					</div>
					<p class="text-secondary text-uppercase">After School Program</p>
				</div>
			</div>
			<div class="col-12 col-md-3 text-center">
				<div class="card shadow py-4" style="border-radius: 3px;">
					<div class="icon">
						<i class="fas fa-award mb-3 text-primary" style="font-size: 50px;"></i>
					</div>
					<p class="text-secondary text-uppercase">Proven Track Record</p>
				</div>
			</div>

			
		</div>
		
	</div>
	<!-- end  -->
	<!-- end content -->
	<!-- start about -->
	<div class="container my-5 px-0" id="about">
		<div class="row">
			<div class="col-12 col-md-5 p-md-5">
				<span class="text-info" >A Big Family</span>
				<h3 class="my-3" style="font-size: 35px;line-height: 35px;font-weight: 700;">Building Our Community</h3>
				<p class="text-secondary" style="line-height: 25px;">Building a strong sense of community in Greenville school is both important and doable. Our school uses different Community - Building Approaches, that helps us to be a family.</p>
				<div class="program">
					<p class="text-uppercase"><span>explore school programs</span></p>
					<p class="text-uppercase mb-4"><span>school community</span></p>
				</div>
				<a href="" class="btn btn-primary btn-lg" style="border-radius: 30px;">Make An Appointment</a>
			</div>
			<div class="col-12 col-md-4" style="position: relative;">
				<img src="img/c1.jpg" class="w-100 h-100 p-2" style="position: absolute;bottom: 0;" data-aos="zoom-out-down">
			</div>
			<div class="col-12 col-md-2 pb-md-0">
				<img src="img/c2.jpg" class="w-100  d-block mb-3" data-aos="zoom-out-down">
				<img src="img/c3.jpg" class="w-100  d-block" data-aos="zoom-out-down">
			</div>
		</div>
	</div>
	<!-- end about -->
	<!-- start student life -->
	<div class="container-fluid" id="studentlife">
		<div class="black">
			<div class="text-center my-5 py-5">
				<p style="font-size: 20px;font-style: italic;" class="text-info">Best Private in Town</p>
				<h1 style="font-size: 70px;" class="my-3 text-light">Where Learning Begin</h1>
				<button class="btn btn-lg btn-outline-primary mt-3" style="border-radius: 40px;">MAKE AN APPOINTMENT</button>
			</div>			
		</div>
	</div>
	<!-- end student life -->
	<!-- start what parent say -->
	<!-- Section: Testimonials v.1 -->
	<div class="text-center my-4 p-5" id="parentsay">

	  <!-- Section heading -->
	  <h2 class="h1-responsive font-weight-bold my-5">What Parent Says</h2>
	  <!-- Section description -->
	  

	  <!-- Grid row -->
	  <div class="row">

	    <!--Grid column-->
	    <div class="col-12 col-md-4">
	      <!--Card-->
	      <div class="card testimonial-card p-3" data-aos="fade-right">
	        <!--Background color-->
	        <div class="card-up info-color"></div>
	        <!--Avatar-->
	        <div class="avatar mx-auto white">
	          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
	        </div>
	        <div class="card-body">
	          <!--Name-->
	          <h4 class="font-weight-bold mb-4">John Doe</h4>
	          <hr>
	          <!--Quotation-->
	          <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>We are impressed with the strong academic focus as well as the values-centred program the school offers. Greenville really cares about the student as a whole and prepares them for the next step in their lives.</p>
	        </div>
	      </div>
	      <!--Card-->
	    </div>
	    <!--Grid column-->

	    <!--Grid column-->
	    <div class="col-12 col-md-4">
	      <!--Card-->
	      <div class="card testimonial-card p-3" data-aos="fade-right">
	        <!--Background color-->
	        <div class="card-up blue-gradient">
	        </div>
	        <!--Avatar-->
	        <div class="avatar mx-auto white">
	          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-fluid">
	        </div>
	        <div class="card-body">
	          <!--Name-->
	          <h4 class="font-weight-bold mb-4">Anna Aston</h4>
	          <hr>
	          <!--Quotation-->
	          <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>We are impressed with the strong academic focus as well as the values-centred program the school offers. Greenville really cares about the student as a whole and prepares them for the next step in their lives.</p>
	        </div>
	      </div>
	      <!--Card-->
	    </div>
	    <!--Grid column-->

	    <!--Grid column-->
	    <div class="col-md-4 col-12">
	      <!--Card-->
	      <div class="card testimonial-card p-3" data-aos="fade-right">
	        <!--Background color-->
	        <div class="card-up indigo"></div>
	        <!--Avatar-->
	        <div class="avatar mx-auto white rounded-circle">
	          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
	        </div>
	        <div class="card-body">
	          <!--Name-->
	          <h4 class="font-weight-bold mb-4">Maria Kate</h4>
	          <hr>
	          <!--Quotation-->
	          <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>We are impressed with the strong academic focus as well as the values-centred program the school offers. Greenville really cares about the student as a whole and prepares them for the next step in their lives.</p>
	        </div>
	      </div>
	      <!--Card-->
	    </div>
	    <!--Grid column-->

	  </div>
	  <!-- Grid row -->

	</div>
	<!-- end  -->

	<!-- after school program -->
	<div class="container my-3" id="after">
		<p class="text-center text-info" style="font-size: 20px;font-style: italic;">Our Activities</p>
	  <h2 class="h1-responsive font-weight-bold mb-5 text-center">After School Programs</h2>
		<!-- Flickity HTML init -->
		<div class="carousel mb-5"
		  data-flickity='{ "freeScroll": true }'>
		  <div class="carousel-cell">
		  	<div class="card" style="width:300px; ">
		  		<div class="card-img-top">
		  			<img src="img/f1.jpg" style="width: 300px; height: 200px;">
		  		</div>
		  		<div class="card-body">
		  			<p class="day">Monday</p>
		  			<h5>Tennis</h5>
		  			<p>The most popular sport at school is football. </p>
		  			<a href="" class="btn btn-warning text-light">Learn More</a>
		  		</div>
		  	</div>
		  </div>
		  <div class="carousel-cell">
		  	<div class="card" style="width:300px; ">
		  		<div class="card-img-top">
		  			<img src="img/horse.jpg" style="width: 300px; height: 200px;">
		  		</div>
		  		<div class="card-body">
		  			<p class="day">Monday / Wednesday</p>
		  			<h5>Horse Club</h5>
		  			<p>Drama introduces students to a world of wonder and play.</p>
		  			<a href="" class="btn btn-warning text-light">Learn More</a>
		  		</div>
		  	</div>
		  </div>
		  <div class="carousel-cell">
		  	<div class="card" style="width:300px; ">
		  		<div class="card-img-top">
		  			<img src="img/music.jpg" style="width: 300px; height: 200px;">
		  		</div>
		  		<div class="card-body">
		  			<p class="day">Monday / Wednesday</p>
		  			<h5>Music Club</h5>
		  			<p>Music Class is as a vehicle for personal expression.  </p>
		  			<a href="" class="btn btn-warning text-light">Learn More</a>
		  		</div>
		  	</div>
		  </div>
		  <div class="carousel-cell">
		  	<div class="card" style="width:300px; ">
		  		<div class="card-img-top">
		  			<img src="img/tennis.jpg" style="width: 300px; height: 200px;">
		  		</div>
		  		<div class="card-body">
		  			<p class="day">Monday</p>
		  			<h5>Tennis</h5>
		  			<p>The most popular sport at school is football. </p>
		  			<a href="" class="btn btn-warning text-light">Learn More</a>
		  		</div>
		  	</div>
		  </div>
		  <div class="carousel-cell">
		  	<div class="card" style="width:300px; ">
		  		<div class="card-img-top">
		  			<img src="img/soccer.jpg" style="width: 300px; height: 200px;">
		  		</div>
		  		<div class="card-body">
		  			<p class="day">Monday</p>
		  			<h5>Football</h5>
		  			<p>The most popular sport at school is football. </p>
		  			<a href="" class="btn btn-warning text-light">Learn More</a>
		  		</div>
		  	</div>
		  </div>
		  <div class="carousel-cell">
		  	<div class="card" style="width:300px; ">
		  		<div class="card-img-top">
		  			<img src="img/volley.jpg" style="width: 300px; height: 200px;">
		  		</div>
		  		<div class="card-body">
		  			<p class="day">Monday</p>
		  			<h5>Volleyball</h5>
		  			<p>The most popular sport at school is football. </p>
		  			<a href="" class="btn btn-warning text-light">Learn More</a>
		  		</div>
		  	</div>
		  </div>
		  
		</div>
	</div>

	<!-- student -->
	

	<!-- end  -->

	<div class="container-fluid py-5" id="contact" >
		<div class="row py-5">
			<div class="col-12 col-md-5 pl-4">
				<img src="http://greenville.ancorathemes.com/wp-content/uploads/2017/03/image-36.png" style="width: 450px; height: 600px;">
			</div>
			<div class="col-12 col-md-7 pr-5 pl-0"> 
				<p class="text-center text-info" style="font-size: 20px;font-style: italic;">How can We Help You ?</p>
	  			<h2 class="h1-responsive font-weight-bold mb-5 text-center">Have Any Question ?</h2>
				<form action="" method="post">
					<div class="row">
					    <div class="col">
					      <input type="text" class="form-control py-4 pl-3" placeholder="Your Name" style="border-radius: 23px;border-color:white;">
					    </div>
					    <div class="col">
					      <input type="email" class="form-control py-4 pl-3" placeholder="Your Email" style="border-radius: 23px;border-color:white;">
					    </div>
					  </div>
					  <div class="form-group">
					    <textarea class="form-control my-4 text-left" placeholder="Your Message" rows="8" style="border-radius: 23px;border-color:white;">
					    			
					    </textarea>
					  </div>
					  <div class="form-check ml-2">
						  <input class="form-check-input" type="checkbox" value="" id="read">
						  <label class="form-check-label" for="read">
						    I have read and agreed the Terms, Conditions and <a href="" class="text-info">Privacy Policy</a>
						  </label>
						</div>
						<button class="mt-4 px-4 btn btn-secondary text-dark text-uppercase py-2 " style="border-radius: 23px;" type="submit" id="btnsub">submit form</button>
				</form>
			</div>
		</div>
	</div>
	<div class="container-fluid py-5" id="footer">
		<div class="container mt-5">
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="card" style="background:transparent;border:none;">
						<h3 class="mb-4" style="font-size: 40px;font-style: italic;">WEC School</h3>	
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card " style="background:transparent;border:none;" id="category">
						<h4 style="color: #f2aa2cff;" class="mb-4">Main Information</h4>
						<div class="d-flex">
							<div class="">
								<a href="">Home</a>
							</div>
							<div>
								<a href="">About</a>
							</div>
						</div>
						<div class="d-flex">
							<div class="">
								<a href="">About School</a>
							</div>
							<div>
								<a href="">Articles</a>
							</div>
						</div>
						<div class="d-flex">
							<div class="">
								<a href="">Admission</a>
							</div>
							<div>
								<a href="">Testimonials</a>
							</div>
						</div>
						<div class="d-flex">
							<div class="">
								<a href="">Prospectus</a>
							</div>
							<div>
								<a href="">Contact</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<h4 style="color: #f2aa2cff;" class="mb-4">Subscription</h4>
					<div class="form-group d-flex py-4">
						<input type="email" name="" placeholder="Your Email" class="form-control pl-3 bg-dark" style="border-radius: 30px; border: none; padding: 30px 0px;color: white;font-size: 20px;">
						<button class="btn btn-secondary text-dark text-uppercase px-4" style="margin-left: -50px; border-radius: 30px;"  id="btn-sub">Subscribe</button>
					</div>
					<div class="form-check ml-2">
						  <input class="form-check-input" type="checkbox" value="" id="sub">
						  <label class="form-check-label" for="read">
						    I agree that my submitted data is being collected and stored.
						  </label>
						</div>
				</div>
				<div class="col-12 col-md-12 pt-4 mt-5" style="border-top:1px solid #a6a6a6; ">
					<h5>Wecschool &copy;2020. All rights reserved</h5>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script type="text/javascript">
		$(document).ready(function($) {
			count=true;
			count1=true;
			$('#read').on("click",function () {
				// alert("message?: DOMString");
				if (count) {
					$('#btnsub').removeClass('btn-secondary');
					$('#btnsub').removeClass('text-dark');
					$('#btnsub').addClass('text-light');
					$('#btnsub').addClass('btn-warning');
					count=false;
				}else{
					$('#btnsub').addClass('btn-secondary');
					$('#btnsub').addClass('text-dark');
					$('#btnsub').removeClass('text-light');
					$('#btnsub').removeClass('btn-warning');
					count=true;
				}

			})
			$('#sub').on("click",function () {
				// alert("message?: DOMString");
				if (count1) {
					$('#btn-sub').removeClass('btn-secondary');
					$('#btn-sub').removeClass('text-dark');
					$('#btn-sub').addClass('text-light');
					$('#btn-sub').addClass('btn-warning');
					count1=false;
				}else{
					$('#btn-sub').addClass('btn-secondary');
					$('#btn-sub').addClass('text-dark');
					$('#btn-sub').removeClass('text-light');
					$('#btn-sub').removeClass('btn-warning');
					count1=true;
				}

			})
			 AOS.init();
			 AOS.init({
			 	once: false, 
			 	duration:500,
			 })
		});
	</script>
</body>
</html>