@extends('web.layouts.app')

@section('title', $category->meta_title)
@section('keywords', $category->meta_keywords)
@section('description', $category->meta_description)

@section('style')
@endsection

@section('content')
<div class="col-md-8">
	<div class="crumb inner-page-crumb">
		<ul>
			<li><i class="ti-home"></i><a href="{{ route('homePage') }}">Home</a> / </li>
			<li><a class="active">{{ $category->category_name }}</a></li>
		</ul>
	</div>
	<div class="home-news-block block-no-space">
		<div class="row postgrid-horiz grid-style-2">
			@foreach($posts as $post)
			<div class="col-sm-6">
				<div class="post-grid-style">
					<div class='post-grid-image'>
						<a class="post-cat cat-1" href="{{ route('categoryPage', $post->category->id) }}" title="{{ $post->category->category_name }}">{{ $post->category->category_name }}</a>
						<a class="grid-image" href="{{ route('detailsPage', $post->post_slug) }}" title="{{ $post->post_title }}">
							<img src="{{ get_featured_image_thumbnail_url($post->featured_image) }}" alt="{{ $post->post_title }}">
						</a>
					</div>

					<div class="post-detail">
						<h2><a href="{{ route('detailsPage', $post->post_slug) }}" title="{{ $post->post_title }}">{{ \Illuminate\Support\Str::limit($post->post_title, 44) }}</a></h2>
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
			@endforeach
		</div>
		<div class="pagination">{{ $posts->links() }}</div>
	</div>


</div>
@endsection

@section('sidebar')
@include('web.includes.sidebar')
@endsection

@section('script')
@endsection