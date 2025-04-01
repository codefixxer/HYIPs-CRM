@extends('frontend.layouts.app')
@section('content')
	<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb content end -->
	<main data-title="blog-find">
		<!-- blog content begin -->
		<div class="uk-section uk-margin-small-top">
			<div class="uk-container">
				<div class="uk-grid" data-uk-grid>
					<div class="uk-width-2-3@m">
						<p class="uk-text-muted uk-margin-remove blog-find-text"></p>
						<h2 class="uk-margin-remove-top blog-find-heading"><i class="fas fa-tags fa-xs uk-margin-small-right"></i>keyword</h2>
						<div class="blog-find uk-child-width-1-1 uk-margin-medium-top in-blog-1 uk-grid uk-grid-stack" data-uk-grid></div>
					</div>
					<div class="uk-width-expand@m">
						<!-- widget search begin -->
						<aside class="uk-margin-medium-bottom">
							<form name="blog-search" class="uk-search uk-search-default uk-width-1-1">
								<a href="" class="uk-search-icon-flip" data-uk-search-icon></a>
								<input class="uk-input uk-border-rounded" type="search" placeholder="Search here...">
							</form>
						</aside>
						<!-- widget search end -->
						<!-- widget categories begin -->
						<aside class="uk-margin-medium-bottom">
							<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
								<h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Categories</h5>
								<ul class="uk-list widget-categories"></ul>
							</div>
						</aside>
						<!-- widget categories end -->
						<!-- widget lates begin -->
						<aside class="uk-margin-medium-bottom">
							<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
								<h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Latest News</h5>
								<ul class="uk-list uk-list-divider uk-list-large widget-latest"></ul>
							</div>
						</aside>
						<!-- widget lates end -->
						<!-- widget tags begin -->
						<aside class="uk-margin-medium-bottom">
							<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
								<h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Tags</h5>
								<div class="uk-margin-top widget-tag"></div>
							</div>
						</aside>
						<!-- widget tags end -->
					</div>
				</div>
			</div>
		</div>
		<!-- blog content end -->
	</main>
	@endsection