@extends('web.layouts.home_layout')

@section('title', "Pochentong Presbyterian Church")
@section('keywords', "PPC")
@section('description', "ព្រះវិហារសភាភិបាលពោធិចិនតុង")

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
                            <h4 class="text-primary text-center" id="banner-caption" style="margin-top: 0px; color: #008fd5;"><strong>ព្រះវិហារសភាភិបាលពោធិចិនតុង សូមស្វាគមន៍</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="col-md-8">
	<div class="crumb inner-page-crumb">
		<ul>
			<li><i class="ti-home"></i><a href="#">Home</a>  </li>
		</ul>
	</div>

	<div class="home-news-block block-no-space">

		<!-- about part start-->
		<!-- <section class="about_part"> -->
				<div class="row align-items-center justify-content-center">
					<div class="col-md-12">
						<div class="about_text">
							<h2>WHO WE ARE</h2>
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
		<hr>
		<div class="home-posts-head mt-30">
			<h4 class="home-posts-cat-title"><a class="cat-3" href="#">What's New</a></h4>
		</div>
		<div class="row postgrid-horiz grid-style-2">
			{{-- @foreach($posts as $post)
			<div class="col-md-6">
				<div class="post-grid-style">
					<div class='post-grid-image'>
						<a class="post-cat cat-1" href="{{ route('categoryPage', $post->category->id) }}" title="{{ $post->category->category_name }}">{{ $post->category->category_name }}</a>
						<a class="grid-image" href="{{ route('detailsPage', $post->post_slug) }}" title="{{ $post->post_title }}">
							<img src="{{ get_featured_image_thumbnail_url($post->featured_image) }}" alt="{{ $post->post_title }}">
						</a>
					</div>

					<div class="post-detail">
						<h2>
							<a style="color: gray" href="{{ route('detailsPage', $post->post_slug) }}" title="{{ $post->post_title }}">
								{{ \Illuminate\Support\Str::limit($post->post_title, 44, '...') }}
							</a>
						</h2>
						<ul class="post-meta3 pull-left">
							<li><i class="ti-time"></i><a>{{ date("d F Y", strtotime($post->post_date)) }}</a></li>
							<li class="admin"><a href="{{ route('authorProfilePage', $post->user->username) }}"><i class="ti-user"></i> {{ $post->user->name }}</a></li>
						</ul>
						<ul class="post-meta3 pull-right">
							<li><i class="fa fa-eye"></i><a title="{{ $post->post_title }}">{{ $post->view_count }}</a></li>
							<li><a title="{{ $post->post_title }}"><i class="fa fa-comments"></i> {{ $post->comment->count() }}</a></li>
						</ul>
						<a href="{{ route('detailsPage', $post->post_slug) }}" class="readmore" title="{{ $post->post_title }}"><i class="ti-more-alt"></i></a>
					</div>
				</div>
			</div>
			@endforeach --}}
		</div>
		{{-- <div class="pagination">{{ $posts->links() }}</div> --}}
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

<script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({
        autoPlay: true,
        navigation : false,
        singleItem : true,
        transitionStyle : "fade"
      });

    });
    </script>
