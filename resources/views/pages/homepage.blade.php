
@extends('partials.master')

@section('afterNav')



<!-- Start Image Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

	</ol>
	<div class="carousel-inner" role="listbox" >
		<!--Slide  1  -->
		<div class="carousel-item active" style="height:350px; background-image: url({{asset('image/gallary/101.jpg')}})">
			<!-- <div class="carousel-caption text-center">
				<h3 style="color:white"> <b>CSE Building</b></h3>
			</div> -->
		</div>


		<!--Slide  2  -->

		<div class="carousel-item " style="height:350px; background-image: url({{asset('image/gallary/102.jpg')}})">
		</div>

		<!--Slide  3  -->
		<div class="carousel-item" style="height:350px; background-image: url({{asset('image/gallary/103.jpg')}})">
		<!--	<div class="carousel-caption text-center">
				<h1 style="color: white"><b>Shahid Minar</b></h1>
			</div> -->
		</div>

	</div> <!-- End Carousel Inner -->

	<!-- Prev and Next Buttons -->
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>

</div>

<!-- End Image Slider -->



		<div class="pb-5"></div>

		<div class=" container">
			<div class=" row">

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="bg-secondary card changeit col-sm-10" >
						<a href="https://sec.ac.bd/campusradio/" target="_blank" style="text-decoration: none">
						<img class="card-img img-rounded" src="{{asset('image/radio.png')}}" alt="">
						<h5 class="display-5 text-center " style="color: #fafafa"><b>Campus Radio</b></h5>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class=" card bg-info changeit col-sm-10">
						<a href="{{ route('researchNews') }}" style="text-decoration: none">
						<img class="card-img img-rounded" src="{{asset('image/research.png')}}" alt="">
						<h5 class="display-5 text-center" style="color: #62262c"><b>Research</b></h5>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class=" card bg-warning changeit" >
						<a href="{{route('login')}}" style="text-decoration: none">
						<img class="card-img img-rounded" src="{{asset('image/lock.png')}}" alt="">
						<h5 class="display-5 text-center "><b>Student Login</b></h5>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class=" card changeit" style="background-color: #546543">
						<a href="{{route('gallary')}}" style="text-decoration: none">
						<img class="card-img img-rounded" src="{{asset('image/gallery.jpg')}}" alt="">
						<h5 class="display-5 text-center " style="color: #deffb3"><b>Gallery</b></h5>
						</a>
					</div>
				</div>
		</div>
		</div>

		<div class="pb-5"></div>

	<div class="container text-white" style="background:#00142d">
		<div class="pt-3">
		</div>
		<h4 class="display-5 "><b>About Us</b></h4>
		<p style="text-align: justify; text-justify: inter-word; "><strong><a href="https://sec.ac.bd/" class="text-white" target="_blank">Sylhet Engineering College (SEC)</a></strong> established
			in the year 2007 under the <a href="http://www.techedu.gov.bd/" target="_blank">
				Directorate of Technical Education</a> and School of Applied Sciences & Technology, <strong><a target="_blank" class="text-white" href="http://www.sust.edu" target="_blank">
					Shahjalal University of Science and Technology</a></strong>, is best of its kind with a motto to produce the best in class engineers for
					the 21st century. As a divisional city of Bangladesh, Sylhet had no full fledged undergraduate level engineering institute.
					 So the Government of Peoples Republic of Bangladesh has established <strong><a class="text-white" href="https://sec.ac.bd/" target="_blank">Sylhet Engineering College</a></strong>
					 as an engineering faculty section of <a   href="http://www.sust.edu" target="_blank"><strong>Shahjalal University of Science and Technology
					 </strong></a>.
					With a state-of-the-art facilities and a marvelous landscape of campus, <strong><a class="text-white" href="https://sec.ac.bd/" target="_blank">
						Sylhet Engineering College</a></strong> has become an engineering educational hub of Bangladesh.
			<p style="text-align: justify; text-justify: inter-word; ">
				<strong><a class="text-white" href="{{route('homepage')}}">Computer Science & Engineering</a></strong> is the oldest department of <strong><a class="text-white" href="https://sec.ac.bd/" target="_blank">
					Sylhet Engineering College</a></strong>.Already seven batch have become graduated from this department.First <strong><a href="https://sec.ac.bd/campusradio/" class="" target="_blank">
						Campus Radio</a></strong> of Bangladesh is operated by
						this department.
			</p>


	</div>
	<div class="pt-5">

	</div>

	<!-- <div class="container pt-2 text-white" style="background:#080f10">
		<div class="row">
			<div class="col-md-5 col-lg-5 col-sm-10">
				<h2 class="display text-center">Research news</h2>
			</div>
			<div class="col-lg-1 col-md-1">

			</div>
			<div class="col-md-5 col-sm-10 col-lg-5">
				<h2 class="display text-center">Notice</h2>
			</div>
		</div>
	</div>  -->

@endsection





<!--End Home Secton -->
