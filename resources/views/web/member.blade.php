@php
use Carbon\Carbon;
@endphp

@extends('web.layouts.app')

@section('title', 'Member')
{{-- @section('keywords', $post->meta_keywords)
@section('description', $post->meta_description) --}}

@section('style')
{{-- <meta property="og:image" content="{{ get_featured_image_thumbnail_url($post->featured_image) }}"> --}}
<!-- Social Share: http://js-socials.com/demos/ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials-theme-flat.css">
<style type="text/css">
	iframe {
		margin: 20px 0px;
	}
	.category {
		color: #9E9E9E;
	}
	.category:hover {
		color: #757575;
	}
</style>
<style type="text/css">
#shareButton { 
display:block; 
}
#shareNative { 
display:block; }
@media screen and (max-width: 500px) {
#shareButton { 
display:block; }
#shareNative { 
display:block; }
.jssocials { 
display:block; }
.jssocials-shares { 
display:block; }
.jssocials-share-email { 
display:block; }
}
</style>
@endsection

@section('content')
<div class="col-md-8">
	<div class="crumb inner-page-crumb">
		<ul>
			<li><i class="ti-home"></i><a href="{{ route('homePage') }}">Home</a> /</li>
			<li><a class="active">Members</a></li> 
		</ul>
	</div>

		
	<div class="blog-single"> 
		<div class="row" style="margin-left:0">
			@foreach ($members as $member)
				<div class="col-lg-6" style="padding-left: 0%">
					<div class="team-item">
						<h4 style="color:aliceblue;background: #007bbd; padding:10px 0; border-radius:10px">{{ $member->company }}</h4>
						<p class="mb-4">{{ $member->address }}</p>
						@if(!empty($member->company_logo))
							<img class="img-fluid rounded-circle w-60 mb-4" src="{{ get_member_image_url($member->company_logo) }}" alt="">
						@endif
						<p><a id="member-product" href="#">{{ $member->type->title }}</a> &nbsp; </p>
						<p>
						@foreach ($member->products as $product)
							<a href="#" id="member-type">{{ $product->title }}</a>
						@endforeach
						</p>
						<p>Workers: {{ $member->number_of_worker }} &nbsp; </p>
						<p><i class="fa-solid fa-phone"></i> {{ $member->telephone }} &nbsp; </p>
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ $member->email }} &nbsp; </p>
						<p>Owner from: <a href="#">{{ $member->country->country }}</a></p>
						{{-- <div class="d-flex justify-content-center">
							<a class="btn btn-square text-primary bg-white m-1" href=""><i
									class="fab fa-facebook-f"></i></a>
							<a class="btn btn-square text-primary bg-white m-1" href=""><i
									class="fab fa-twitter"></i></a>
							<a class="btn btn-square text-primary bg-white m-1" href=""><i
									class="fab fa-linkedin-in"></i></a>
						</div> --}}
					</div>
				</div>
			@endforeach
		</div>
	</div>
		
</div>
@endsection

@section('sidebar')
@include('web.includes.sidebar')
@endsection

<style>
	#relate-post-title{
		font-size: 1rem;
	}

	#post-title{
		padding: 20px 0;
		font-weight: bold;
	}
	#member-product{
		border-radius: 5px;
		background: #cbeaa4;
		/* color: aliceblue; */
		padding: 0 5px;
	}
	#member-type{
		border-radius: 5px;
		background: #10c6b1;
		color: aliceblue;
		padding: 0 5px;
	}


	/*** Team ***/
	.team-item {
		position: relative;
		padding: 30px;
		text-align: center;
		transition: .5s;
		z-index: 1;
	}

	.team-item a{
		color: #007bbd;
	}

	.team-item::before,
	.team-item::after {
		position: absolute;
		content: "";
		width: 100%;
		height: 40%;
		top: 0;
		left: 0;
		border-radius: 5px;
		background: #f9f9f9;
		box-shadow: 0 0 45px rgba(0, 0, 0, .07);
		transition: .5s;
		z-index: -1;
	}

	.team-item::after {
		top: auto;
		bottom: 0;
	}

	.team-item:hover::before,
	.team-item:hover::after {
		background: var(--primary);
	}

	.team-item h5,
	.team-item p {
		transition: .5s;
	}

	.team-item:hover h5,
	.team-item:hover p {
		color: #FFFFFF;
	}

	.team-item img {
		padding: 15px;
		border: 1px solid var(--primary);
	}

	.rounded-circle{
		border-radius: 50%;
	}

	.justify-content-center{
		justify-content: center;
	}
	.mb-4{
		margin-bottom: 1.5rem;
	}

	.w-100{
		width: 100%;
	}

</style>

@section('script')

@endsection