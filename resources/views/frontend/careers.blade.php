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
	<main>
		<!-- section content begin -->
		<div class="uk-section">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-3-4@m">
						<p class="uk-text-large">We're a team of mission-driven experts and learners who are committed to making security a strength for every startup.</p>
						<p>We've already helped hundreds of innovative companies succeed at becoming trustworthy custodians of sensitive data. And we're just getting started.</p>
						<div class="uk-grid-divider uk-child-width-1-1 uk-child-width-1-3@m uk-margin-medium-top uk-margin-bottom" data-uk-grid>
							<div>
								<h4>Our oppurtinity</h4>
								<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui anim officia.</p>
								<a class="uk-button uk-button-text" href="#">Watch the video<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
							</div>
							<div>
								<h4>Our team</h4>
								<p>Architecto beatae vitae dicta sunt explicabo ipsam memo voluptatem quia voluptas.</p>
								<a class="uk-button uk-button-text" href="#">Meet the team<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
							</div>
							<div>
								<h4>Our culture</h4>
								<p>Corporis suscipit laboriosa nisi ut aliquid ex ea commodi consequatur pariatur.</p>
								<a class="uk-button uk-button-text" href="#">See our values<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section in-content-3">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-1-1">
						<h2 class="uk-text-center">Open positions</h2>
						<table class="uk-table uk-table-middle uk-table-divider uk-table-responsive">
							<tbody>
								<tr>
									<td>
										<h4>Solutions engineer (entry level)</h4>
									</td>
									<td class="in-office-location">
										<i class="fas fa-map-marker-alt uk-margin-small-right"></i> Stockholm, Sweden
									</td>
									<td class="uk-text-left uk-text-right@m">
										<a class="uk-button uk-button-primary uk-border-rounded" href="#">Apply for this job <i class="fas fa-file-alt uk-margin-small-left"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Sales Development Representative</h4>
									</td>
									<td class="in-office-location">
										<i class="fas fa-map-marker-alt uk-margin-small-right"></i> London, United Kingdom
									</td>
									<td class="uk-text-left uk-text-right@m">
										<a class="uk-button uk-button-primary uk-border-rounded" href="#">Apply for this job <i class="fas fa-file-alt uk-margin-small-left"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Software Engineer - Backend</h4>
									</td>
									<td class="in-office-location">
										<i class="fas fa-map-marker-alt uk-margin-small-right"></i> Stockholm, Sweden
									</td>
									<td class="uk-text-left uk-text-right@m">
										<a class="uk-button uk-button-primary uk-border-rounded" href="#">Apply for this job <i class="fas fa-file-alt uk-margin-small-left"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section in-gallery-1">
			<div class="uk-container">
				<ul class="uk-grid-small uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center" data-uk-grid="masonry: true">
					<li>
						<div class="uk-inline-clip uk-transition-toggle uk-border-rounded" tabindex="0">
							<img class="uk-transition-scale-up uk-transition-opaque" src="img/blockit/in-gallery-image-1.jpg" alt="gallery-image" data-width data-height>
						</div>
					</li>
					<li>
						<div class="uk-inline-clip uk-transition-toggle uk-border-rounded" tabindex="0">
							<img class="uk-transition-scale-up uk-transition-opaque" src="img/blockit/in-gallery-image-2.jpg" alt="gallery-image" data-width data-height>
						</div>
					</li>
					<li>
						<div class="uk-inline-clip uk-transition-toggle uk-border-rounded" tabindex="0">
							<img class="uk-transition-scale-up uk-transition-opaque" src="img/blockit/in-gallery-image-3.jpg" alt="gallery-image" data-width data-height>
						</div>
					</li>
					<li>
						<div class="uk-inline-clip uk-transition-toggle uk-border-rounded" tabindex="0">
							<img class="uk-transition-scale-up uk-transition-opaque" src="img/blockit/in-gallery-image-4.jpg" alt="gallery-image" data-width data-height>
						</div>
					</li>
					<li>
						<div class="uk-inline-clip uk-transition-toggle uk-border-rounded" tabindex="0">
							<img class="uk-transition-scale-up uk-transition-opaque" src="img/blockit/in-gallery-image-5.jpg" alt="gallery-image" data-width data-height>
						</div>
					</li>
					<li>
						<div class="uk-inline-clip uk-transition-toggle uk-border-rounded" tabindex="0">
							<img class="uk-transition-scale-up uk-transition-opaque" src="img/blockit/in-gallery-image-6.jpg" alt="gallery-image" data-width data-height>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- section content end -->
	</main>
	@endsection