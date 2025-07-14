@extends('layouts.app')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/image_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    	<div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                <h2 class="subheading">Welcome to Vacation Rental</h2>
                <h1 class="mb-4">Rent an appartment for your vacation</h1>
                <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
                </div>
            </div>
    	</div>
    </div>
</div>

<section class="ftco-section ftco-services">
	<div class="container">
		<div class="row">
		<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
			<div class="d-block services-wrap text-center">
				<div class="img" style="background-image: url(assets/images/services-1.jpg);"></div>
				<div class="media-body py-4 px-3">
					<h3 class="heading">Sheraton</h3>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					<p>Location: Cairo.</p>
					<p><a href="rooms.html" class="btn btn-primary">View rooms</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
			<div class="d-block services-wrap text-center">
				<div class="img" style="background-image: url(assets/images/image_4.jpg);"></div>
				<div class="media-body py-4 px-3">
					<h3 class="heading">The Plaza Hote</h3>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					<p>Location: New york.</p>
					<p><a href="#" class="btn btn-primary">View rooms</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
			<div class="d-block services-wrap text-center">
				<div class="img" style="background-image: url(assets/images/image_4.jpg);"></div>
				<div class="media-body py-4 px-3">
					<h3 class="heading">The Ritz</h3>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					<p>Location: Paris.</p>
					<p><a href="#" class="btn btn-primary">View rooms</a></p>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<section class="ftco-section bg-light">
	<div class="container-fluid px-md-0">
		<div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Apartment Room</h2>
            </div>
        </div>
	</div>
	</div>
		<div class="row no-gutters">
			<div class="col-lg-6">
				<div class="room-wrap d-md-flex">
					<a href="#" class="img" style="background-image: url(assets/images/room-1.jpg);"></a>
					<div class="half left-arrow d-flex align-items-center">
						<div class="text p-4 p-xl-5 text-center">
							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
							<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
							<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
							<ul class="list-accomodation">
								<li><span>Max:</span> 3 Persons</li>
								<li><span>Size:</span> 45 m2</li>
								<li><span>View:</span> Sea View</li>
								<li><span>Bed:</span> 1</li>
							</ul>
							<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="room-wrap d-md-flex">
					<a href="#" class="img" style="background-image: url(assets/images/room-2.jpg);"></a>
					<div class="half left-arrow d-flex align-items-center">
						<div class="text p-4 p-xl-5 text-center">
							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
							<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
							<h3 class="mb-3"><a href="rooms.html">Standard Room</a></h3>
								<ul class="list-accomodation">
								<li><span>Max:</span> 3 Persons</li>
								<li><span>Size:</span> 45 m2</li>
								<li><span>View:</span> Sea View</li>
								<li><span>Bed:</span> 1</li>
							</ul>
							<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="room-wrap d-md-flex">
					<a href="{{ route('hotel.rooms.details', $rooms_details->id) }}" class="img order-md-last" style="background-image: url(assets/images/room-3.jpg);"></a>
					<div class="half right-arrow d-flex align-items-center">
						<div class="text p-4 p-xl-5 text-center">
							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
							<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
							<h3 class="mb-3"><a href="{{ route('hotel.rooms.details', $rooms_details->id) }}">Family Room</a></h3>
								<ul class="list-accomodation">
								<li><span>Max:</span> 3 Persons</li>
								<li><span>Size:</span> 45 m2</li>
								<li><span>View:</span> Sea View</li>
								<li><span>Bed:</span> 1</li>
							</ul>
							<p class="pt-1"><a href="{{ route('hotel.rooms.details', $rooms_details->id) }}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="room-wrap d-md-flex">
					<a href="#" class="img order-md-last" style="background-image: url(assets/images/room-4.jpg);"></a>
					<div class="half right-arrow d-flex align-items-center">
						<div class="text p-4 p-xl-5 text-center">
							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
							<!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
							<h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
								<ul class="list-accomodation">
								<li><span>Max:</span> 3 Persons</li>
								<li><span>Size:</span> 45 m2</li>
								<li><span>View:</span> Sea View</li>
								<li><span>Bed:</span> 1</li>
							</ul>
							<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
