@extends('web.layouts.home_layout')

@section('title', "Pochentong Presbyterian Church")
@section('keywords', "PPC")
@section('description', "ព្រះវិហារសភាភិបាលពោធិ៍ចិនតុង")
@section('meta_image', "https://ppc-church.com/web/logo/ppc-logo-blue.png")

@section('style')
<style>
	#owl-demo{
		margin-top: 60px;
	}

	@media screen and (max-width: 1024px) {
		#owl-demo{
			margin-top: 45px;
		}
	}
	.about_text{
		line-height: 3rem;
	}
	/*** Testimonial ***/
	.testimonial-carousel .owl-item .testimonial-item {
		box-shadow: 0 0 45px rgba(0, 0, 0, .07);
		border: 1px solid transparent;
		transform: scale(.85);
		transition: .5s;
	}
	.spacer{
		padding-top:20px;
	}
	.map-frame{
		/* padding: 10px; */
		border: 3px;
		background: #008fd5;
	}
	#owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }


	@media (max-width: 979px) {
		#banner-caption{
			font-size: .6rem;
		}
		#banner-title-shape{
			margin-top: -35
		}
		#spacer{
		padding: 10px 0;
	}

	}

	@media (min-width:979px){
		#banner-title-shape{
			margin-top: -75
		}
		#spacer{
		padding: 50px 0;
	}
	}

</style>

@endsection

@section('banner')
		<div id="owl-demo" class="owl-carousel">

			<div class="item"><img src="{{ asset('web/banner_image/cover1.jpg') }}" alt="BSEA"></div>
			{{-- <div class="item"><img src="{{ asset('web/banner_image/043A4046.jpg') }}" alt="BSEA"></div>--}}
			<div class="item"><img src="{{ asset('web/banner_image/cover2.jpg') }}" alt="BSEA"></div> 
			
		</div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info" id="banner-title-shape" style="box-shadow: 0 8px 61px -2px rgba(0,0,0,.2);">
                        <div class="panel-body">
                            <h4 class="text-primary text-center" id="banner-caption" style="margin-top: 0px; color: #008fd5;">ព្រះវិហារសភាភិបាលពោធិ៍ចិនតុង សូមស្វាគមន៍</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="col-md-12">
	{{-- <div class="crumb inner-page-crumb">
		<ul>
			<li><i class="ti-home"></i><a href="#">Home</a>  </li>
		</ul>
	</div> --}}

	<div class="home-news-block block-no-space">

		<!-- about part start-->
		<!-- <section class="about_part"> -->
				<div class="row align-items-center justify-content-center">
					<div class="col-md-12">
						<div class="about_text">
							<h2 style="padding-bottom: 30px">កម្មវិធីថ្វាយបង្គំ</h2>
							<p>
								ព្រះវិហារសភាភិបាលពោធិ៍ចិនតុងមានកម្មវិធីថ្វាយបង្គំរៀងរាល់ថ្ងៃអាទិត្យ ដោយចែកចេញជា២គឺ៖
								<ol style="padding-left:50px">
									<li>1. កម្មវិធីថ្វាយបង្គំសម្រាប់កុមារ ម៉ោង ៨:០០ ព្រឹក ដល់ម៉ោង ៩:០០ព្រឹក</li>
									<li>2. កម្មវិធីថ្វាយបង្គំសម្រាប់មនុស្សធំ ម៉ោង ៩:០០ ព្រឹក ដល់ម៉ោង ១១:០០ព្រឹក</li>
								</ol>
							</p>
							{{-- <p>{!! \Illuminate\Support\Str::limit($page->page_content,4000,'...') !!}</p>
							<div class="btn btn-primary" style="margin-bottom:20px"><a style="color: antiquewhite" href="{{ route('pagePage', $page->page_slug) }}">Read more</a></div> --}}
						</div>
					</div>
				</div>
			<div class="hero-app-7 custom-animation"><img src="web/animate_icon/icon_1.png" alt=""></div>
			<div class="hero-app-8 custom-animation2"><img src="web/animate_icon/icon_2.png" alt=""></div>
			<div class="hero-app-6 custom-animation3"><img src="web/animate_icon/icon_3.png" alt=""></div>
		<!-- </section> -->
		<!-- about part start-->
		<div class="spacer"></div>
		<h4>លោកអ្នកអាចស្វែងរកទីតាំងព្រះវិហារតាមរយៈផែនទីខាងក្រោម</h4>
		<div class="map-frame">
			<iframe style="margin-top:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.300857029514!2d104.85107016284017!3d11.565208494700398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951de9cd132ef%3A0xc55711348494851c!2z4Z6W4Z-S4Z6a4Z-H4Z6c4Z634Z6g4Z624Z6a4Z6f4Z6X4Z624Z6X4Z634Z6U4Z624Z6b4Z6W4Z-E4Z6S4Z634Z-N4Z6F4Z634Z6T4Z6P4Z674Z6EIChQb2NoZW50b25nIFByZXNieXRlcmlhbiBDaHVyY2gp!5e0!3m2!1sen!2skh!4v1703948690079!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>		
		<hr>
		<div class="home-posts-head mt-30">
			<h4 class="home-posts-cat-title"><a class="cat-3" href="#">What's New</a></h4>
		</div>
		<h2 style="color:red">Website under construction!</h2>
		<h2 style="color: plum">Coming soon!!</h2>
		
	</div>
</div>
@endsection

{{-- @section('sidebar')
@include('web.includes.sidebar')
@endsection --}}

@section('script')
	
@endsection
<script src="{{ asset('web/js/jquery-1.9.1.min.js') }}"></script> 
<script src="{{ asset('web/js/owl.carousel.js') }}"></script>
<style>
    
</style>

<script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({
		lazyLoad : true,
        autoPlay: true,
        navigation : false,
        singleItem : true,
        transitionStyle : "fade"
      });
    });
</script>
