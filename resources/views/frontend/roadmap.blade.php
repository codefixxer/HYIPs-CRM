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
		<!-- sectio content begin -->
		<div class="uk-section">
			<div class="uk-container">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-flex uk-flex-center">
						<div class="uk-width-3-4@m uk-margin-medium-bottom">
							<h1 class="uk-margin-remove">We're constantly updating our <span class="in-highlight">roadmap.</span></h1>
							<p class="uk-text-lead">We're constantly updating our roadmap to bring transparency for our users and to get your feedback - please tell us what is important for you!</p>
							<p>You can follow our progress here or follow us on Twitter   <a href="#"><i class="fab fa-twitter"></i><span class="uk-text-lowercase">@equity-fx</span></a></p>
						</div>
					</div>
					<div class="uk-width-1-1 in-timeline-1">
						<hr>
						<div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m">
							<div>
								<div class="in-timeline-branch">
									<div class="uk-flex">
										<div class="in-icon-wrap primary-color">
											<i class="fas fa-clipboard-check fa-lg"></i>
										</div>
										<div class="in-timeline-title uk-flex uk-flex-middle">
											<h4 class="uk-margin-remove-bottom">Q4 2019</h4>
											<span class="uk-label uk-label-success in-label-small">completed</span>
										</div>
									</div>
								</div>
								<div class="uk-box-shadow-small uk-width-expand">
									<div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
										<ul class="uk-list in-list-check">
											<li>Wireframe</li>
											<li>Design</li>
											<li>Documentation</li>
										</ul>
									</div>
								</div>
							</div>
							<div>
								<div class="in-timeline-branch">
									<div class="uk-flex">
										<div class="in-icon-wrap primary-color">
											<i class="fas fa-cog fa-lg"></i>
										</div>
										<div class="in-timeline-title uk-flex uk-flex-middle">
											<h4 class="uk-margin-remove-bottom">Q2 2020</h4>
											<span class="uk-label uk-border-rounded in-label-small">on progress</span>
										</div>
									</div>
								</div>
								<div class="uk-box-shadow-small uk-width-expand">
									<div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
										<ul class="uk-list in-list-check">
											<li>Chart with base functional</li>
											<li>Launching plans and billings</li>
											<li>Improvement of the rest of the functions of the Chart</li>
											<li>Availability panel</li>
										</ul>
									</div>
								</div>
							</div>
							<div>
								<div class="in-timeline-branch">
									<div class="uk-flex">
										<div class="in-icon-wrap primary-color">
											<i class="fas fa-flask fa-lg"></i>
										</div>
										<div class="in-timeline-title uk-flex uk-flex-middle">
											<h4 class="uk-margin-remove-bottom">Q3 2020</h4>
											<span class="uk-label uk-label-warning in-label-small">planned</span>
										</div>
									</div>
								</div>
								<div class="uk-box-shadow-small uk-width-expand">
									<div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
										<ul class="uk-list in-list-check">
											<li>Extensions for other popular browsers</li>
											<li>List View for your tasks</li>
											<li>Apps for iOS & Android</li>
											<li>New cool skin for Default View</li>
											<li>Community formation and the subsequent cyclic completion of the product based on the wishes of customers</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
	</main>
	@endsection